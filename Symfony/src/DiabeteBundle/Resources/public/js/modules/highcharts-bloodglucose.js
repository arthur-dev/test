$(function () {
	var bloodGlucoseData = $('#chart-bloodglucose').data('bloodglucosedata');

    $('#chart-bloodglucose').highcharts({
		chart: {
			zoomType: 'x',
		},
		credits: {
		    enabled: false
		},
		title: {
		    text: 'Glycémie'
		},
	
		xAxis: {
		    type: 'datetime'
		},
	
		yAxis: [{
		    title: {
				text: 'mg/dL'
		    }
		}],		
	
		tooltip: {
		    crosshairs: true,
		    shared: true,
		    valueSuffix: 'mg/dL'
		},
	
		legend: {},
	
		series: [{
		    name: 'Glycémie',
		    data: bloodGlucoseData.glucose, 
		    marker: {
				fillColor: 'white',
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[0]
		    }
		}]

	});
});