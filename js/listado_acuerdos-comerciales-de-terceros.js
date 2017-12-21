jQuery(document).ready(function ($) {
    jQuery("#rowed2").jqGrid({
        url: 'listado_acuerdos-comerciales-de-terceros.json',
        datatype: "json",
        colNames: ['ID', 'VENDEDOR / SELLER', 'COMPRADOR / BUYER', 'PRODUCTO', 'CANTIDAD', 'ESTADO', ''],
        colModel: [
            {name: 'campo1', sortable: false, title: false, width: '120'}, 
            {name: 'campo2', sortable: false, title: false, width: '180'}, 
            {name: 'campo3', sortable: false, title: false, width: '175'}, 
            {name: 'campo4', sortable: false, title: false, width: '190'}, 
            {name: 'campo5', sortable: false, title: false, width: '100'}, 
            {name: 'campo6', sortable: false, title: false, width: '100'}, 
            {name: 'campo7', sortable: false, title: false}
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
                editar = "<span class='fa fa-pencil btn-acciones' type='button' value='E' />";
                cancelar = "<span class='fa fa-close btn-acciones' type='button' value='C' />";
                jQuery("#rowed2").jqGrid('setRowData', ids[i], {campo7: editar + cancelar});
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