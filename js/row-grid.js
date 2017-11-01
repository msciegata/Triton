jQuery(document).ready(function ($) {
    jQuery("#rowed2").jqGrid({
        url: 'data.json',
        datatype: "json",
        colNames: ['N\u00B0 VIAJE', 'MOVIMIENTO', 'ARMADOR', 'BUQUE', 'VOLUMEN', 'F.CIERRE', 'MONTO', 'ESTADO', ''],
        colModel: [
            {name: 'campo1', sortable: false, title: false, width: '100'},
            {name: 'campo2', sortable: false, title: false},
            {name: 'campo3', sortable: false, title: false},
            {name: 'campo4', sortable: false, title: false},
            {name: 'campo5', sortable: false, title: false},
            {name: 'campo6', sortable: false, title: false},
            {name: 'campo7', sortable: false, title: false},
            {name: 'campo8', sortable: false, title: false, width: '100'},
            {name: 'campo9', sortable: false, title: false}
        ],
        rowNum: 5,
        rowList: [5, 10, 15],
        pager: '#prowed2',
        sortorder: "desc",
        shrinkToFit: true,
        forceFit: true,
        autowidth: true,
        height: "auto",
        gridview: true,
        loadonce: true,
        gridComplete: function () {
            var ids = jQuery("#rowed2").jqGrid('getDataIDs');
            for (var i = 0; i < ids.length; i++) {
                var cl = ids[i];
                ver = "<span class='fa fa-eye btn-acciones' type='button' value='E' />";
                editar = "<span class='fa fa-pencil btn-acciones' type='button' value='S' />";
                cancelar = "<span class='fa fa-trash btn-acciones' type='button' value='C' />";
                descartar = "<span class='fa fa-trash btn-acciones' type='button' value='C' />";
                jQuery("#rowed2").jqGrid('setRowData', ids[i], {campo9: ver + editar + cancelar + descartar });
            }
        }
    });
    jQuery("#rowed2").jqGrid('navGrid', "#prowed2", {refresh: false, search: false, edit: false, add: false, del: false});
});

//--

$(document).ready(function () {
    $("#gview_tree").addClass("responsive");
    $(".ui-jqgrid-hdiv").addClass("responsive");
    $(".ui-jqgrid").addClass("responsive");
    $(".ui-jqgrid-htable").addClass("responsive");
    $(".ui-jqgrid-bdiv").addClass("responsive");
    $(".ui-jqgrid-btable").addClass("responsive");
    $(".ui-jqgrid-pager").addClass("responsive");
    $(".ui-jqgrid-hbox").addClass("responsive");
    $(".ui-jqgrid-view").addClass("responsive");
    $("#prowed2_center .ui-paging-pager .ui-pg-selbox option").prepend("Mostrar ");
    $("#prowed2_center .ui-paging-pager .ui-pg-selbox option").append(" viajes");
});