<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Registrar necesidad de compra</title>
		<?php include 'css-elements.php';?>           
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
					<div class="col-lg-6 margin-top-10 margin-bottom-30">
                        <div class="radio-button error">
							<p>Condición respecto del presupuesto<span>*</span></p>
							<div class="radio">
								<input type="radio" id="radio-1" name="radio-a">
								<label for="radio-1" class="radio-label">Dentro del presupuesto</label>
							</div>
							
							<div class="radio">
								<input type="radio" id="radio-2" name="radio-a">
								<label for="radio-2" class="radio-label">Fuera del presupuesto</label>
							</div>
							<span>El campo Condición respecto del presupuesto es requerido</span>
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
								<button class="btn btn-primary">GUARDAR MODIFICACIÓN</button>
								<button class="btn btn-danger">CANCELAR NECESIDAD</button>
								<button class="btn btn-ghost-neutral">SALIR</button>
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
                <?php include 'js-elements.php';?>
                <script src="js/listado_viajes-SPOT.js"></script>
                <script>
                $(function () {
                    new qq.FineUploader({
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
                        ],
                        callbacks: {
                            onSubmitted: function () {
                                $("#contrato-SAP-upload").find(".empty-message").hide();
                            }
                        }
                    });
                });
                </script>
	</body>
</html>