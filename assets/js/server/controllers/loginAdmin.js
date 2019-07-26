class loginAdmin {
	static initialize = async function() {
		await this.isloggedIn();
		await this.loginView();
		this.events();
	}

	static loginView = async function() {
		await App.render('admin/login.html', 'body');
	}

	static events = function() {
		$('#loginform-admin').submit(event => {
			event.preventDefault();
			const form = $('#loginform-admin');
			const payload = {
				method: 'auth/doadminLogin',
				userid: $('input[name=username]', form).val(),
				password: $('input[name=password]', form).val(),
				type: 'admin',
			};

			broadcast.send(JSON.stringify(payload));
		});

		$('#getCustomData').off().click(function() {
			const payload = {
				method: 'auth/getCustomData',
				type: 'admin',
			};

			broadcast.send(JSON.stringify(payload));
		});
	}

	static isloggedIn = function() {
		if(window.user !== null) {
		 	document.location = 'dashboard-admin.php';
		}
	}
}