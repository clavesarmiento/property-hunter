class singleListing {
	static initialize = async function() {
		await this.listSingleView();
		this.events();
		initMenu();
		initListingSlider();
		initPopup();
		initGoogleMap();
		initSearchFeatures();

	}

	static listSingleView = async function() {
		await App.render('single-list/navigation.html', '#single-list-nav');
		await App.render('single-list/header.html', '#single-list-header');
		await App.render('single-list/listing.html', '#listing-section');
		await App.render('single-list/newsletter.html', '#newsletter-section');
		await App.renderAppend('single-list/modal/inquire-modal.html', 'html');
	}

	static events = function() {
		//Declare Dom events here
		$('#inquire-form').submit( async function(event) {
			event.preventDefault();
			let payload = await $(this).serializeArray();
			payload = await App.formatPayload(payload, 'inquiries/save');
			await broadcast.send(payload);
			$('#inquireform').modal('hide');

		});
	}

}