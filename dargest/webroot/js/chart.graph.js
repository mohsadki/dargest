// Get the context of the canvas element we want to select
var ctx = document.getElementById("myChart").getContext("2d");
var data = {
	labels : [ "Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Juil" ],
	datasets : [ {
		label : "Dépenses",
		fillColor : "rgba(220,220,220,0.2)",
		strokeColor : "rgba(220,220,220,1)",
		pointColor : "rgba(220,220,220,1)",
		pointStrokeColor : "#fff",
		pointHighlightFill : "#fff",
		pointHighlightStroke : "rgba(220,220,220,1)",
		data : [ 65, 59, 80, 81, 56, 55, 40 ]
	}, {
		label : "Factures",
		fillColor : "rgba(151,187,205,0.2)",
		strokeColor : "rgba(151,187,205,1)",
		pointColor : "rgba(151,187,205,1)",
		pointStrokeColor : "#fff",
		pointHighlightFill : "#fff",
		pointHighlightStroke : "rgba(151,187,205,1)",
		data : [ 28, 48, 40, 19, 86, 27, 90 ]
	} ]
};
window.onload = function() {
	var ctx = document.getElementById("myChart").getContext("2d");
	window.myLine = new Chart(ctx).Line(data, {
		responsive : false
	});
}