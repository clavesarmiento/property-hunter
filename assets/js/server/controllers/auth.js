class Auth {

	constructor() {
		console.log('Auth loaded');
	}

	static doClientLogin = async function(response) {
		if(response === null) {
			alert('Invalid login');
			return;
		}

		response['type'] = 'client';
		await this.saveSession(response);
		await this.logClientUser();
		$('#loginform').modal('hide');
	}

	static doadminLogin = async function(response) {
		if(response === null) {
			alert('Invalid login');
			return;
		}
		
		response['type'] = 'admin';
		await this.saveSession(response);
		await this.logAdminUser();
	}

	static logClientUser = function() {
		let btn = $('#login-client-btn');
		const client = window.user.client;
		const name = client.client_fname + ' ' + client.client_mname + ' ' + client.client_lname
		$('a', btn).attr('data-target', '#view-profile').text(name);
	}

	static logAdminUser = function() {
		 document.location = 'dashboard-admin.php';
	}

	static saveSession = async function(response) {
		await localStorage.setItem("user", JSON.stringify(response));
		window.user = response;
	}

}