<!-- Scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script src="js/select-search.min.js"></script>
<script src="js/autosize.min.js"></script>

<!-- JQ Grid -->
<script src="js/plugins/jqgrid/jquery.jqgrid.min.js"></script>
<script src="js/plugins/jqgrid/grid.locale-es.js"></script>
<script src="js/listado_viajes-SPOT.js"></script>

<!-- Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>
        
<script>
$(function () {
    // TextAreas con autoresize        
    autosize($('textarea'));

    // Tab
    $('#laytime-tab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    //Datepicker
    $.datetimepicker.setLocale('es');
    $('.input-date').datetimepicker({
        timepicker:false,
        format: 'd/m/Y',
        scrollInput: false
    });
    //Timepicker
    $('.timepicker').datetimepicker({
        datepicker:false,
        format:'H:i',
        step: 5
    });

    //Select with search 
    $(".select-buscador").select2();

    $(".select-buscador").each(function (i) {
        if ($(this).val() === "") {
            $(this).parent('.input-group').find('.select2-selection__rendered').addClass('texto-blanco');
        }
    });

    $(".select-buscador").change(function () {
        if ($(this).val() !== "") {
            $(this).parent('.input-group').find('label').addClass('label-arriba').removeClass('label-abajo');
            $(this).parent('.input-group').find('.select2-selection__rendered').removeClass('texto-blanco');
        } else {
            $(this).parent('.input-group').find('label').addClass('label-abajo').removeClass('label-arriba');
            $(this).parent('.input-group').find('.select2-selection__rendered').addClass('texto-blanco');
        }
        ;
    });

    var functionLabelPosition = function(){
        if ($(this).val() !== "") {
            $(this).parent('.input-group').find('label').addClass('label-arriba').removeClass('label-abajo');
            $(this).addClass('mostrar');
        } else {
            $(this).parent('.input-group').find('label').addClass('label-abajo').removeClass('label-arriba');
            $(this).removeClass('mostrar');
        }
    };
    $("select").change(functionLabelPosition);
    $("input, textarea").blur(functionLabelPosition);
    $("select, input, textarea").each(functionLabelPosition);
});
</script>
                
<!-- Fine-uploader -->
<script src="js/plugins/fine-uploader/all.fine-uploader.js"></script>        
<script type="text/template" id="qq-template">
    <div class="qq-uploader-selector qq-uploader" qq-drop-area-text="Drop files here">
        <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container qq-hide">
            <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
        </div>
        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
            <span class="qq-upload-drop-area-text-selector"></span>
        </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
        <ul class="qq-upload-list-selector qq-upload-list" aria-live="polite" aria-relevant="additions removals">
            <li>
                <div class="qq-progress-bar-container-selector">
                    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                </div>
                <span class="fa fa-file"></span>
                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                <span class="qq-upload-file-selector qq-upload-file"></span>
                <span class="qq-upload-size-selector qq-upload-size"></span>
                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                <div class="buttons">
                    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon fa fa-pencil" aria-label="Edit filename"></span>
                    <button type="button" class="qq-btn qq-upload-cancel-selector well-trash-button"><span class="fa fa-trash"></span></button>
                    <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                </div>
            </li>
        </ul>
        <div class="empty-message">
            <p>Aún no has adjuntado ningún archivo</p>
        </div>

        <dialog class="qq-alert-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Close</button>
            </div>
        </dialog>

        <dialog class="qq-confirm-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">No</button>
                <button type="button" class="qq-ok-button-selector">Yes</button>
            </div>
        </dialog>

        <dialog class="qq-prompt-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <input type="text">
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Cancel</button>
                <button type="button" class="qq-ok-button-selector">Ok</button>
            </div>
        </dialog>
    </div>
</script>