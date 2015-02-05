$(document).ready(function() {
	$('#subscribers-list').dataTable( {
		"bAutoWidth": false,
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "./get",
		"oLanguage": oLanguage,
		"aoColumnDefs": [
			{ "mData": "lastname", "bVisible": true,  "aTargets": [ 0 ],
				"mRender": function( data, type, row ) {
					return '<a href="./' + row.id + '">' + data + '</a>';
				},
			},
			{ "mData": "firstname", "bVisible": true, "bSortable": true,  "aTargets": [ 1 ] },
			{ "mData": "doctor.firstname", "bVisible": true, "bSortable": true, "bSearchable": true, "aTargets": [ 2 ],
            	"sDefaultContent": "",
				"mRender": function ( data, type, row ) {
					if(row.doctor.lastname != "") {
						return data + " " + row.doctor.lastname;
					}
					else return "";
				},
			},
			{ "mData": "phone", "bVisible": true, "bSortable": true,  "aTargets": [ 3 ] },
			{ "mData": "id", "bVisible" : false, "bSortable": false, "bSearchable": false, "aTargets": [ 4 ],},
			{ "mData": "doctor.lastname", "bVisible": false, "bSearchable": true, "aTargets": [ 5 ], "sDefaultContent": "",},
        ],
	});
	
	$.extend( $.fn.dataTableExt.oStdClasses, {
	    "sWrapper": "dataTables_wrapper form-inline"
	});
});