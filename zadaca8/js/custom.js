// Navigacija iz mainmenu na klik promjeni TAB i odi na njega
window.addEventListener("DOMContentLoaded", function(){
	// LINK MainMenu-TAB
	$("#tab1").click(function () {
		$("#tabs1").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 0 );	
	})
	$("#tab2").click(function () {
		$("#tabs2").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 1 );	
	})
	$("#tab3").click(function () {
		$("#tabs3").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 2 );	
	})
	$("#tab4").click(function () {
		$("#tabs4").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 3 );	
	})
	$("#tab5").click(function () {
		$("#tabs5").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 4 );	
	})
	$("#tab6").click(function () {
		$("#tabs6").addClass("ui-state-active");
		$( "#tabs" ).tabs( "option", "active", 5 );	
	})
	// FORM JS

	var form = document.getElementById("form1");
  	// var button = document.getElementById("submit");
  	var status = document.getElementById("status");

  	// success i error funkcije nakon sto je "poslana"

  	function success() {
    form.reset();
    status.classList.add("success");
    status.innerHTML = "Thanks! We will contact you.";
  }

  function error() {
    status.classList.add("error");
    status.innerHTML = "Oops! There was a problem.";
  }

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });

  function ajax(method, url, data, success, error) {       
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {                       //Umjesto da ode na formspree ostane na odnosno vrati se odmah na stranicu
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}
})
