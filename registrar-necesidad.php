<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Registrar necesidad de compra</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="css/select-search.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="js/plugins/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="css/ui.jqgrid.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="js/plugins/fine-uploader/fine-uploader.css">            
        </head>
	<body>
		<?php include 'header.php';?>
		<main>
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Registro de necesidad de <span>Compra Internacional</span></h1>
					</div>
					<div class="col-lg-2 state">
						<div class="circle bg-gray">
						</div>
						<h5>NO INICIADO</h5>
					</div>
					<div class="col-lg-6 margin-top-10">
						<div class="input-group">
							<select id="mov-triton" class="select-buscador" required style="width: 100%">
								<option value="" selected>Seleccione</option>
								<option value="v1">Dentro del presupuesto</option>
								<option value="v2">Fuera del presupuesto</option>
							</select>
							<label for="mov-triton">Condición respecto del presupuesto<span>*</span></label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h3>Datos del producto
										<span>1</span>
									</h3>
									<div class="delete">
										<a href="#"> 
											<span class="fa fa-close"></span>Eliminar
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="col-lg-6">
									<div class="input-group">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="" selected>Seleccione</option>
											<option value="v1">Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Nombre del producto<span>*</span></label>
									</div>
									<div class="well">
										<div class="well-header">
											<h6>Arribo del Producto</h6>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-6">
													<div class="input-group">
														<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
														<span class="fa fa-calendar" aria-hidden="true"></span>
														<label for="fecha-inicio">Desde</label>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="input-group">
														<input class="input-date" id="fecha-limite" type="text" required name="fecha-limite">
														<span class="fa fa-calendar" aria-hidden="true"></span>
														<label for="fecha-limite">Hasta</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="well">
										<div class="well-header">
											<h6>Cantidad</h6>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-8">
													<div class="input-group">
														<input id="cantidad" type="text" required name="cantidad">
														<label for="cantidad">Cantidad</label>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<select id="UOM" name="UOM" required>
															<option value="" selected>Seleccione</option>
															<option value="v1">TN</option>
															<option value="v2">CM3</option>
															<option value="v2">LTS</option>
														</select>
														<label for="UOM">UOM<span>*</span></label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="well">
										<div class="well-header">
											<h6>Monto</h6>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-8">
													<div class="input-group">
														<input id="cantidad" type="text" required name="cantidad">
														<label for="cantidad">Cantidad</label>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<select id="divisa" name="divisa" required>
															<option value="" selected>Seleccione</option>
															<option value="v1">ARS</option>
															<option value="v2">USD</option>
															<option value="v3">EUR</option>
															<option value="v4">GBP</option>
															<option value="v5">BRL</option>
														</select>
														<label for="divisa">Divisa<span>*</span></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="input-group">
										<input id="contrato-SAP" type="text" required name="contrato-SAP">
										<label for="contrato-SAP">Calidad</label>
									</div>
									<div class="well">
										<div class="well-header">
                                            <h6>Especificaciones de calidad</h6>
                                            <div id="well-add-button" class="well-add">
                                                <a href="#"> 
                                                    <span class="fa fa-plus"></span>
                                                </a>
                                            </div>
										</div>
                                    <div id="contrato-SAP-upload" name="contrato-SAP-upload" class="well-body"></div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="remark remark-warning">
												<p>
													<span class="fa fa-exclamation"></span>
													En caso de embarques parciales por favor completar el campo observaciones.
												</p>
                                            </div>
											<div class="input-group autoheight margin-top-20">
                                                <textarea id="observaciones" required name="observaciones" rows="1" cols="50"></textarea>
                                                <label for="observaciones">Observaciones</label>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="final-buttons">
							<div class="col-lg-6 text-left">
								<button class="btn btn-success text-left">
									<span class="fa fa-plus"></span> AGREGAR OTRO PRODUCTO
								</button>
							</div>
							<div class="col-lg-6 text-right">
								<button class="btn btn-primary">REGISTRAR NECESIDAD</button>
								<button class="btn btn-ghost-neutral">CANCELAR</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include 'footer.php';?>
		<!--MODALS -->
		<!-- CIA-modal -->
		<div id="CIA-modal" class="modal" role="dialog" style="display: none;">
			<div class="moda-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Modal title</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="col-lg-6">
							<div class="col-lg-12">
								<div class="radio-button">
									<div class="radio">
										<input type="radio" id="costo" name="costo-ingreso">
										<label for="costo" class="radio-label">Costo</label>
									</div>
									<div class="radio">
										<input type="radio" id="ingreso" name="costo-ingreso">
										<label for="ingreso" class="radio-label">Ingreso</label>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-group">
									<select name="concepto" id="concepto" required>
										<option value="" selected>Seleccione</option>
										<option value="v1">Resultado 1</option>
										<option value="v2">Resultado 2</option>
										<option value="v3">Resultado 3</option>
										<option value="v4">Resultado 4</option>
									</select>
									<label for="concepto">Concepto<span>*</span></label>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="col-lg-4">
								<div class="input-group">
									<select name="divisa" id="divisa" required>
										<option value="" selected>Seleccione</option>
										<option value="v1">ARS</option>
										<option value="v2">USD</option>
										<option value="v3">EUR</option>
										<option value="v4">GBP</option>
										<option value="v5">BRL</option>
									</select>
									<label for="divisa">Divisa<span>*</span></label>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="input-group">
									<input id="importe" type="text" required name="importe">
									<label for="importe">Importe<span>*</span></label>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-group">
									<select name="contraparte" id="contraparte" required>
										<option value="" selected>Seleccione</option>
										<option value="v1">Resultado 1</option>
										<option value="v2">Resultado 2</option>
										<option value="v3">Resultado 3</option>
										<option value="v4">Resultado 4</option>
									</select>
									<label for="contraparte">Contraparte</label>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="input-group">
								<input id="detalle" type="text" required name="detalle">
								<label for="detalle">Detalle</label>
							</div>
						</div>
				    </div>
				    <div class="modal-footer">
						<button class="btn btn-primary">AGREGAR</button>
						<button class="btn btn-ghost-neutral" data-dismiss="modal">CANCELAR</button>
				    </div>
				</div>
			</div>
		</div>
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
                    } else {
                        $(this).parent('.input-group').find('label').addClass('label-abajo').removeClass('label-arriba');
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
                <span class="fa fa-file-o"></span>
                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                <span class="qq-upload-file-selector qq-upload-file"></span>
                <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                <span class="qq-upload-size-selector qq-upload-size"></span>
                <button type="button" class="qq-btn qq-upload-cancel-selector"><span class="fa fa-trash"></span></button>
                <button type="button" class="qq-btn qq-upload-retry-selector qq-upload-retry">Retry</button>
                <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">Delete</button>
                <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
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
        <script>
        var galleryUploader = new qq.FineUploader({
            element: document.getElementById("contrato-SAP-upload"),
            template: 'qq-template',
            autoUpload: false,
            request: {
                endpoint: '/server/uploads'
            },
            thumbnails: {
                placeholders: {
                    waitingPath: '/source/placeholders/waiting-generic.png',
                    notAvailablePath: '/source/placeholders/not_available-generic.png'
                }
            },
            validation: {
                allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
            },
            extraButtons: [
                {
                    element: document.getElementById("well-add-button"),
                    validation: {
                        allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
                    }
                }
            ]
        });
        </script>
	</body>
</html>