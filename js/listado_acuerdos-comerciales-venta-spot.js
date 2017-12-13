jQuery(document).ready(function ($) {
    jQuery("#rowed2").jqGrid({
        url: 'listado_acuerdos-comerciales-venta-spot.json',
        datatype: "json",
        colNames: ['IDENTIFICADOR', 'PROCEDENCIA', 'COMPRADOR', 'FECHA CIERRE', 'MONTO',  'PRODUCTO', 'CANTIDAD', 'ESTADO DEL ACUERDO', 'ESTADO DEL PAGO', ''],
        colModel: [
            {name: 'campo1', sortable: false, title: false, width: '125'}, 
            {name: 'campo2', sortable: false, title: false, width: '115'}, 
            {name: 'campo3', sortable: false, title: false, width: '130'}, 
            {name: 'campo4', sortable: false, title: false, width: '100'}, 
            {name: 'campo5', sortable: false, title: false, width: '100'}, 
            {name: 'campo6', sortable: false, title: false, width: '155'}, 
            {name: 'campo7', sortable: false, title: false, width: '90'}, 
            {name: 'campo8', sortable: false, title: false, width: '115'},
            {name: 'campo9', sortable: false, title: false, width: '100'},
            {name: 'campo10', sortable: false, title: false},
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
                ver = "<span class='fa fa-eye btn-acciones' type='button' value='V' data-toggle='tooltip' data-placement='top' title='Ver Detalle' />";
                editar = "<span class='fa fa-pencil btn-acciones' type='button' value='E' data-toggle='tooltip' data-placement='top' title='Modificar' />";
                duplicar = "<span class='fa fa-clone btn-acciones' type='button' value='E' data-toggle='tooltip' data-placement='top' title='Duplicar' />";
                cancelar = "<span data-toggle='modal' data-target='#cancelar-modal'><span class='fa fa-close btn-acciones' type='button' value='C' data-toggle='tooltip' data-placement='top' title='Cancelar' /></span>";
                jQuery("#rowed2").jqGrid('setRowData', ids[i], {campo10: ver + editar + duplicar + cancelar});
            };
            $('[data-toggle="tooltip"]').tooltip();
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