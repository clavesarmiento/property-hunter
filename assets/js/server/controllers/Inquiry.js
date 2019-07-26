class Inquiry {

	static notifyAdmin = function(response) {
		if(window.user.type === 'admin') {
			this.displayNotif(response);
		}
	}

	static displayNotif = function(response) {
		alert('There is a new Inquiry');
		console.log('DEBUG: New Inquiry', response);
		var count = (parseInt($('#total-new-inquiry').text()) || 0) + 1;
		$('#total-new-inquiry').text(count);
		this.appendNewInquiry(response);
	}

	static appendNewInquiry = function(inquiry) {
		let tr = `<tr><td>${inquiry.inq_fname} ${inquiry.inq_lname}</td><td>${inquiry.message}</td>`;
		tr += `<td>${inquiry.contact}</td><td>${inquiry.email}</td>`;
		tr += `<td><button class="btn btn-default" id="${inquiry.inquiry_id || inquiry.id}">Assign Agent</td></tr>`;
		$('#inquiry-tbl > tbody').prepend(tr);
	}

	static requestInquiries = function() {
		broadcast.send(JSON.stringify({ method: 'inquiries/getInquiries'}));
	}

	static getInquiries = function(response) {
		$('#inquiry-tbl > tbody').html('');
		response.forEach( async inquiry => {
			this.appendNewInquiry(inquiry);
		});
	}

	
}