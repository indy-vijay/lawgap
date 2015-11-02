var heights = $(".eq-height").map(function() {

	return $(this).height();

}).get(),

maxHeight = Math.max.apply(null, heights);

$(".eq-height").height(maxHeight);

$('[data-toggle="tooltip"]').tooltip()

$('input[name="daterange"]').daterangepicker({
    "autoApply": true

}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});

// https://github.com/nnnick/Chart.js

Chart.defaults.global.pointHitDetectionRadius = 1;
Chart.defaults.global.customTooltips = function(tooltip) {

	var tooltipEl = $('#chartjs-tooltip');

	if (!tooltip) {
		tooltipEl.css({
			opacity: 0
		});
		return;
	}

	tooltipEl.removeClass('above below');
	tooltipEl.addClass(tooltip.yAlign);

	var innerHtml = '';
	for (var i = tooltip.labels.length - 1; i >= 0; i--) {
		innerHtml += [
		'<div class="chartjs-tooltip-section">',
		'	<span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
		'	<span class="chartjs-tooltip-value">' + '<strong>' + tooltip.labels[i] + '</strong>' + '</span>',
		'</div>'
		].join('');
	}
	tooltipEl.html(innerHtml);

	tooltipEl.css({
		opacity: 1,
		left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
		top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
		fontFamily: tooltip.fontFamily,
		fontSize: tooltip.fontSize,
		fontStyle: tooltip.fontStyle,
	});
};
var randomScalingFactor = function() {
	return Math.round(Math.random() * 100);
};
var lineChartData = {
	labels: ["January", "February", "March", "April", "May", "June", "July"],
	datasets: [{
		label: "Divorce",
		fillColor: "rgba(0, 0, 0, 0)",
		strokeColor: "rgba(230, 109, 55, 1)",
		pointColor: "rgba(230, 109, 55, 1)",
		pointStrokeColor: "#fff",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(230, 109, 55, 1)",
		data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
		
	}, {
		label: "Injuctions",
		fillColor: "rgba(0, 0, 0, 0)",
		strokeColor: "rgba(82, 199, 140, 1)",
		pointColor: "rgba(82, 199, 140, 1)",
		pointStrokeColor: "#fff",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(82, 199, 140, 1)",
		data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
	}

	, {
		label: "Child Arrangements",
		fillColor: "rgba(0, 0, 0, 0)",
		strokeColor: "rgba(243, 215, 44, 1)",
		pointColor: "rgba(243, 215, 44, 1)",
		pointStrokeColor: "#fff",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(243, 215, 44, 1)",
		data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
	}]
};

window.onload = function() {


	var ctx2 = document.getElementById("chart2").getContext("2d");
	window.myLine = new Chart(ctx2).Line(lineChartData, {
		bezierCurve : false,
		responsive: true
	});
};
