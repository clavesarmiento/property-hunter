class dashboardAdmin {
	static initialize = async function() {
		await this.isloggedIn();
		await this.loginView();
		await this.currentPage();
		this.events();
	}

	static loginView = async function() {
		await App.render('admin/dashboard-content.html', '#dashboard-content');
		await App.render('admin/sidebar.html', '#main-sidebar', { translateText: language.en });
	}

	static events = function() {
		//Events here
		$('#inquiry-nav').off().click( async function() {
			await App.render('admin/inquiry-page.html', '#dashboard-content', { translateText: language.en });
			Inquiry.requestInquiries();
		});


		$('#agent-nav').off().click( async function() {
			await App.render('admin/agent-page.html', '#dashboard-content', { translateText: language.en });
			AgentController.requestAgents();
		});
	}

	static isloggedIn = function() {
		if(window.user === null || window.user.type !== 'admin') {
		 	document.location = site.admin_url;
		}
	}

	static currentPage = async function() {
		switch(window.location.hash) {
			case '#inquiries':
				await App.render('admin/inquiry-page.html', '#dashboard-content', { translateText: language.en });
				Inquiry.requestInquiries();
				break;
			case '#agents':
				await App.render('admin/agent-page.html', '#dashboard-content', { translateText: language.en });
				AgentController.requestAgents();
				break;
			default:
				await App.render('admin/dashboard-content.html', '#dashboard-content');
				break;
		}
	}
}