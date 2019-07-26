class AgentController {

	static requestAgents = function() {
  		broadcast.send(JSON.stringify({ method: 'agents/getAgents'}), function(data) {
			this.informCommingData(data, myListener);
		});
	}

	static informCommingData = function (data, fn) {
		fn(data);
	}

	static myListener = function(data) {
		alert();
		console.log('DEBUG: data', data);
	}

	static getAgents = function(response) {
		$('#agent-tbl > tbody').html('');
		response.forEach( async function(agent) {
			let tr = `<tr><td>${agent.agent_fname} ${agent.agent_lname}</td><td>${agent.agent_contact}</td>`;
			tr += `<td><button class="btn btn-default" id="${agent.agent_id || agent.id}">Assign Agent</td></tr>`;
			$('#agent-tbl > tbody').prepend(tr);
		});
	}

	
}