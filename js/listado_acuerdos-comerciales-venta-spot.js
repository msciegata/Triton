jQuery(document).ready(function ($) {
    jQuery("#rowed2").jqGrid({
        url: 'listado_acuerdos-comerciales-venta-spot.json',
        datatype: "json",
        colNames: ['IDENTIFICADOR', 'PROCEDENCIA', 'DESTINO', 'PRODUCTO', 'CANTIDAD', 'INCOTERM', 'ESTADO', ''],
        colModel: [
            {name: 'campo1', sortable: false, title: false, width: '150'}, 
            {name: 'campo2', sortable: false, title: false, width: '150'}, 
            {name: 'campo3', sortable: false, title: false, width: '125'}, 
            {name: 'campo4', sortable: false, title: false, width: '250'}, 
            {name: 'campo5', sortable: false, title: false, width: '100'}, 
            {name: 'campo6', sortable: false, title: false, width: '100'}, 
            {name: 'campo7', sortable: false, title: false, width: '125'}, 
            {name: 'campo8', sortable: false, title: false}
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
                ver = "<span class='fa fa-eye btn-acciones' type='button' value='V' />";
                editar = "<span class='fa fa-pencil btn-acciones' type='button' value='E' />";
                duplicar = "<span class='fa fa-clone btn-acciones' type='button' value='E' />";
                cancelar = "<span class='fa fa-close btn-acciones' type='button' value='C' />";
                jQuery("#rowed2").jqGrid('setRowData', ids[i], {campo8: ver + editar + duplicar + cancelar});
            }
        }
    });
    jQuery("#rowed2").jqGrid('navGrid', "#prowed2", {refresh: false, search: false, edit: false, add: false, del: false});
});

//--

$(document).ready(function () {
    $(".ui-jqgrid-hdiv").addClass("responsive");
    $(".ui-jqgrid").addClass("responsive");
    $(".ui-jqgrid-htable").addClass("responsive");
    $(".ui-jqgrid-bdiv").addClass("responsive");
    $(".ui-jqgrid-btable").addClass("responsive");
    $(".ui-jqgrid-pager").addClass("responsive");
    $(".ui-jqgrid-hbox").addClass("responsive");
    $(".ui-jqgrid-view").addClass("responsive");
    $(".ui-jqgrid-pg-center .ui-pg-selbox option").prepend("Mostrar ");
    $(".ui-jqgrid-pg-center .ui-pg-selbox option").append(" acuerdos");
});