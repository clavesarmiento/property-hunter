class App {
	static render = async function(component, elem, data) {
		var template = null;
		await $.get(`${site.base_url}/components/${component}`, view => {
			template = view;
		})

		var templateScript = await Handlebars.compile(template);
		var html = await templateScript(data);
		await $(elem).html(html);
	}


	static renderAppend = async function(component, elem, data) {
		var template = null;
		await $.get(`${site.base_url}/components/${component}`, view => {
			template = view;
		})

		var templateScript = await Handlebars.compile(template);
		var html = await templateScript(data);
		await $(elem).append(html);
	}

	static formatPayload = function(payload, method) {
		let formatted = { method };
		payload.forEach(e => {
			formatted[e.name] = e.value;
		});

		return JSON.stringify(formatted);
	}
}