$(function () {
	var insulinData = $('#chart-insulin').data('insulindata');

    $('#chart-insulin').highcharts({
		chart: {
			zoomType: 'x',
		},
		credits: {
		    enabled: false
		},
		title: {
		    text: 'Insuline'
		},
	
		xAxis: {
		    type: 'datetime'
		},
	
		yAxis: [{
		    title: {
				text: 'insuline'
		    }
		}],		
	
		tooltip: {
		    crosshairs: true,
		    shared: true,
		    valueSuffix: 'insuline'
		},
	
		legend: {},
	
		series: [{
		    name: 'Insuline',
		    data: insulinData.insulin,
		    marker: {
				fillColor: 'white',
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[0]
		    }
		}]

	});
});