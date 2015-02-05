$(function () {
	var activiteData = $('#chart-activite').data('activitedata');

    $('#chart-activite').highcharts({
		chart: {
			zoomType: 'x',
		},
		credits: {
		    enabled: false
		},
		title: {
		    text: 'Activité'
		},
	
		xAxis: {
		    type: 'datetime'
		},
	
		yAxis: [{
		    title: {
				text: 'mn'
		    }
		}],		
	
		tooltip: {
		    crosshairs: true,
		    shared: true,
		    valueSuffix: 'mn'
		},
	
		legend: {},
	
		series: [{
		    name: 'Activité',
		    data: activiteData.dureeActivite,
		    marker: {
				fillColor: 'white',
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[0]
		    }
		}]

	});
});