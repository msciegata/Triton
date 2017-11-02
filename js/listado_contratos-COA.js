jQuery(document).ready(function ($) {
    jQuery("#rowed2").jqGrid({
        url: 'listado_contratos-COA.json',
        datatype: "json",
        colNames: ['N\u00B0 COA', 'ARMADOR', 'FECHA INICIO', 'FECHA DE FINALIZACIÓN', 'SALDO CONTRATO', 'VIAJES', ''],
        colModel: [
            {name: 'campo1', sortable: false, title: false, width: '100'},
            {name: 'campo2', sortable: false, title: false},
            {name: 'campo3', sortable: false, title: false, width: '150'},
            {name: 'campo4', sortable: false, title: false, width: '200'},
            {name: 'campo5', sortable: false, title: false},
            {name: 'campo6', sortable: false, title: false},
            {name: 'campo7', sortable: false, title: false, width: '180'},
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
                agregar = "<span class='fa fa-plus btn-acciones' type='button' value='A' />";
                descartar = "<span class='fa fa-trash btn-acciones' type='button' value='D' />";
                cancelar = "<span class='fa fa-close btn-acciones' type='button' value='C' />";
                jQuery("#rowed2").jqGrid('setRowData', ids[i], {campo7: ver + editar + agregar + descartar + cancelar});
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