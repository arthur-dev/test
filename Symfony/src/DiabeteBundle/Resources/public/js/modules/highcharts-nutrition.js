$(function () {
	var nutritionData = $('#chart-nutrition').data('nutritiondata');

    $('#chart-nutrition').highcharts({
		chart: {
			zoomType: 'x',
		},
		credits: {
		    enabled: false
		},
		title: {
		    text: 'Nutrition'
		},
	
		xAxis: {
		    type: 'datetime'
		},
	
		yAxis: [{
		    title: {
				text: 'Glucide'
		    }
		}],		
	
		tooltip: {
		    crosshairs: true,
		    shared: true,
		    valueSuffix: 'Glucide'
		},
	
		legend: {},
	
		series: [{
		    name: 'Nutrition',
		    data: nutritionData.sucre,
		    marker: {
				fillColor: 'white',
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[0]
		    }
		}]

	});
});