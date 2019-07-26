var echo = new WebSocket('ws://localhost:8080/echo');
var broadcast = new WebSocket('ws://localhost:8080/chat');

var data = null;
window.user = JSON.parse(localStorage.getItem("user"));

broadcast.onmessage = function(e) { 
	data = JSON.parse(e.data); 
	console.log('DEBUG:', data);

	switch(data.method) {
		case 'auth/doClientLogin':
			Auth.doClientLogin(data.response);
			break;
		case 'auth/doadminLogin':
			Auth.doadminLogin(data.response);
			break;
		case 'inquiries/save':
			Inquiry.notifyAdmin(data.response);
			break;
		case 'inquiries/getInquiries':
			Inquiry.getInquiries(data.response);
			break;
		case 'agents/getAgents':
			AgentController.getAgents(data.response);
			break;
	default:

		break;
	}
};

broadcast.onopen = function(e) { 
	console.log('DEBUG: path', window.location.pathname);

	switch(window.location.pathname) {
		case '/property-hunter/index.php':
		case '/property-hunter/':
		case '/property-hunter/':
			Home.initialize();
			break;
		case '/property-hunter/listings_single.php':
		case '/property-hunter/listings_single.php/':
			singleListing.initialize();
			break;
		case '/property-hunter/admin':
		case '/property-hunter/admin/':
			loginAdmin.initialize();
			break;
		case '/property-hunter/admin/dashboard-admin.php':
		case '/property-hunter/admin/dashboard-admin.php/':
			dashboardAdmin.initialize();
			break;
		default:

			break;
	}
};
