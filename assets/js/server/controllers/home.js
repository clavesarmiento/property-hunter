class Home {

	static initialize = async function() {
		await this.homeView();
		this.events();

		initHomeSlider();
		initSearchFeatures();
		initMenu();
		initTestimonialsSlider();
		initParallax();
		initCitiesSlider();
	}

	static homeView = async function() {
		await App.render('home/slider/home-slider.html', '#home-slider');
		await App.render('home/main-header.html', '#main-header', { user: window.user });
		await App.render('home/feature.html', '#featured-section');
		await App.render('home/testimonial.html', '.testimonials');
		await App.renderAppend('home/modal/login-modal.html', 'html');
		await App.renderAppend('home/modal/view-profile-modal.html', 'html');
	}

	static events = function() {
		$('#login-form').submit(event => {
			event.preventDefault();
			const form = $('#login-form');
			const payload = {
				method: 'auth/doClientLogin',
				userid: $('input[name=username]', form).val(),
				password: $('input[name=password]', form).val(),
				type: 'client',
			};

			broadcast.send(JSON.stringify(payload));
		});

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
	}
}

