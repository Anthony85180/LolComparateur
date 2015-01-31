"use strict";


var Internship = function() {}
	
/*class dinternships*/	

Internship.get = function(idC, idS, year) {
	var tpl = document.getElementById("Detail").innerHTML  ;
	var data = Ajax.retrieveASyncData("?internship/" + idC + "-" + idS + "-" + year, function(data) {
		var contentNode = document.getElementById("internshipDetail");
		contentNode.innerHTML = Mark.up(tpl, data);
	});
	
}



/*<class Company>*/
var Company = function() {}


Company.all = function() {
	var ulNode = document.createElement("ul");
	ulNode.setAttribute("class", "vbox");
	
	var data = Ajax.retrieveSyncData("?company");
	for (var i = 0; i < data.length; i++) {
		var liNode = document.createElement("li");
		var aNode = document.createElement("a");
		aNode.setAttribute("onclick", "Company.get(" + data[i].id + "); return false");
		aNode.setAttribute("href", "");
		var rawTextNode = document.createTextNode(data[i].name + " - " + data[i].town);
		aNode.appendChild(rawTextNode);
		liNode.appendChild(aNode);
		ulNode.appendChild(liNode);
	}
	//+ " - " + data[i].website+ " - " + data[i].firstname+ " - " + data[i].lastname+ " - " + data[i].year+ " - " + data[i].detail
	//+ " - " + data[i].firstname)+ " - " + data[i].lastname+ " - " + data[i].year+ " - " + data[i].detail
	var contentNode = document.getElementById("content");
	contentNode.innerHTML = "";
	contentNode.appendChild(ulNode);
	
	var contentNode = document.getElementById("internshipDetail");
	contentNode.innerHTML = "";
}

//~ {{name}} lives at {{addr.street}} in {{addr.city}}

Company.get = function(id) {
	var tpl = document.getElementById("etudiants").innerHTML ;
	var data = Ajax.retrieveASyncData("?company/" + id, function(data) {
		var contentNode = document.getElementById("content");
		contentNode.innerHTML = Mark.up(tpl, data, {delimiter : ":" });
	});
}
/*</class Company>*/




/*<class Ajax>*/
var Ajax = function() {}


Ajax.retrieveSyncData = function (url) {
	var r = new XMLHttpRequest();
	r.open("GET", url, false);
	r.setRequestHeader("Accept", "application/json");
	r.send();
	//~ alert(r.responseText);
	return JSON.parse(r.responseText);
}


Ajax.retrieveASyncData = function (url, cb) {
	var r = new XMLHttpRequest();
	r.open("GET", url, false);
	r.setRequestHeader("Accept", "application/json");
	r.onreadystatechange = function() {
		if (r.readyState == 4 && r.status == 200) {
			cb(JSON.parse(r.responseText));
		}
	};
	r.send();
}
/*</class Ajax>*/
