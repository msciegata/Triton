<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Alta viaje SPOT</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/timepicker.css">
        <link rel="stylesheet" href="css/select-search.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="js/plugins/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="css/ui.jqgrid.min.css">
        <link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php include 'header.php';?>
		<main>
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Alta de viaje <span>SPOT</span></h1>
					</div>
					<div class="col-lg-2 state">
						<div class="circle bg-gray">
						</div>
						<h5>NO INICIADO</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h3>Datos generales</h3>
								</div>
							</div>
							<div class="card-body">
								<div class="col-lg-6">
									<div class="input-group">
										<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre" data-language="es">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-cierre">Fecha de cierre<span>*</span></label>
									</div>
									<div class="input-group">
										<select id="mov-triton" class="select-buscador" required style="width: 100%">
											<option value="" selected>Seleccione</option>
											<option value="v1">Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="mov-triton">Movimiento tritón<span>*</span></label>
									</div>
									<div class="input-group">
										<select name="fletador" id="fletador" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">YPF S.A.</option>
											<option value="v2">YPF GAS</option>
										</select>
										<label for="fletador">Fletador<span>*</span></label>
									</div>
									<div class="laycan">
										<h5>Laycan</h5>
										<div class="well">
											<div class="well-header">
												<h6>Inicio</h6>
											</div>
											<div class="well-body">
												<div class="row">
													<div class="col-lg-6">
														<div class="input-group">
															<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio" data-language="es">
															<span class="fa fa-calendar" aria-hidden="true"></span>
															<label for="fecha-inicio">Fecha</label>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="input-group">
															<input id="horario-inicio" type="text" class="form-control input-small timepicker"  data-minute-step="5" data-default-time="current" data-show-seconds="false" data-show-meridian="false" required>
															<span class="fa fa-clock-o" aria-hidden="true"></span>
															<label for="horario-inicio">Horario</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="well">
											<div class="well-header">
												<h6>Fin</h6>
											</div>
											<div class="well-body">
												<div class="row">
													<div class="col-lg-6">
														<div class="input-group">
															<input id="fecha-fin" class="input-date" type="text" required name="fecha-fin" data-language="es">
															<span class="fa fa-calendar" aria-hidden="true"></span>
															<label for="fecha-fin">Fecha</label>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="input-group">
															<input id="horario-fin" type="text" class="form-control input-small timepicker"  data-minute-step="5" data-default-time="current" data-show-seconds="false" data-show-meridian="false" required>
															<span class="fa fa-clock-o" aria-hidden="true"></span>
															<label for="horario-fin">Horario</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="input-group">
										<select id="armador" name="armador" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Armador 1</option>
											<option value="v2">Armador 2</option>
											<option value="v3">Armador 3</option>
											<option value="v4">Armador 4</option>
											<option value="v5">Armador 5</option>
										</select>
										<label for="armador">Armador<span>*</span></label>
									</div>
									<div class="input-group">
										<select id="broker" name="broker" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Broker 1</option>
											<option value="v2">Broker 2</option>
										</select>
										<label for="broker">Broker</label>
									</div>
									<div class="input-group">
										<select id="buque" name="buque" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Buque Papa Juan Pablo II</option>
											<option value="v2">Buque Papa Francisco I</option>
										</select>
										<label for="buque">Buque<span>*</span></label>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class=" laytime">
												<h5>Laytime<span>*</span></h5>
												<ul class="nav nav-tabs" id="laytime-tab" role="tablist">
													<li role="presentation" class="tab active">
														<a href="#fijo" data-toggle="tab" aria-controls="fijo">Fijo</a>
													</li>
													<li role="presentation" class="tab">
														<a href="#calculado" data-toggle="tab" aria-controls="calculado">Calculado</a>
													</li>
												</ul>
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane fijo active" id="fijo">
														<div class="input-group">
															<input id="tiempo-fijo" type="text" class="form-control input-small timepicker"  data-minute-step="5" data-default-time="current" data-show-seconds="false" data-show-meridian="false" required>
															<span class="fa fa-clock-o" aria-hidden="true"></span>
															<label for="tiempo-fijo">Tiempo</label>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane calculado" id="calculado">
														<div class="col-lg-6">
															<div class="input-group">
																<input id="caudal-volumen" type="text" required name="caudal-volumen">
																<label for="caudal-volumen">Caudal / Volumen</label>
															</div>
														</div>
														<div class="col-lg-3">
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
														<div class="col-lg-3">
															<div class="input-group">
																<input id="tiempo-calculado" type="text" class="form-control input-small timepicker"  data-minute-step="5" data-default-time="current" data-show-seconds="false" data-show-meridian="false" required>
																<span class="fa fa-clock-o" aria-hidden="true"></span>
																<label for="tiempo-calculado">Tiempo</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="well">
												<div class="well-header">
													<h6>Demurrage rate</h6>
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
																<label for="divisa">Divisa</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
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
					<div class="col-lg-12 f-cost">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h3>Costo por flete</h3>
								</div>
								<div class="state">
									<h5><span class="fa fa-check"></span>PAGADO</h5>
								</div>
							</div>
							<div class="card-body">
								<div class="col-lg-6 calculator" >
									<div class="row">
										<div class="col-lg-4">
											<div class="input-group">
												<select id="tipo-precio" name="tipo-precio" required>
													<option value="" selected>Seleccione</option>
													<option value="v1">Unitario</option>
													<option value="v2">WS</option>
													<option value="v2">Lumpsun</option>
												</select>
												<label for="tipo-precio">Tipo de precio<span>*</span></label>
											</div>
										</div>
										<div class="col-lg-2">
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
										<div class="col-lg-3">
											<div class="input-group">
												<input id="precio" type="text" required name="precio">
												<label for="precio">Precio<span>*</span></label>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<!-- Para habilitar el campo sacar el attr al input siguiente -->
												<input id="ws" type="text" required name="ws" disabled>
												<label for="ws">WS<span>*</span></label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="input-group">
												<input id="cantidad-bl" type="text" required name="cantidad-bl">
												<label for="cantidad-bl">Cantidad BL<span>*</span></label>
											</div>
										</div>
										<div class="col-lg-3">
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
										<div class="col-lg-3">
											<div class="input-group">
												<input id="overage" type="text" required name="overage">
												<label for="overage">Overage</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<div class="input-group">
												<input id="cant-min" type="text" required name="cant-min">
												<label for="cant-min">Cantidad mínima</label>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="input-group">
												<input id="add-comiss" type="text" required name="add-comiss">
												<label for="add-comiss">Adress comission</label>
											</div>
										</div>
										<div class="col-lg-4">
											<button class="btn btn-ghost-primary">CALCULAR</button>
										</div>
									</div>
								</div>
								<!-- Cuando haya resultados, aplicar la clase hidden al siguiente div -->
								<div class="col-lg-6 no-results hidden margin-top-60">
									<span class="fa fa-calculator"></span>
									<h3>Resultados de cálculo</h3>
									<p>Complete los campos para obtener resultados</p>
								</div>
								<!-- Cuando no haya resultados, aplicar la clase hidden al siguiente div -->
								<div class="col-lg-6 results">
									<div class="subtotals">
										<div class="item">
											<h4>Total flete muerto</h4>
											<h2 class="number"><span>USD </span>31.234</h2>
										</div>
										<div class="item">
											<h4>Total overage</h4>
											<h2 class="number"><span>USD </span>57.800</h2>
										</div>
										<div class="item">
											<h4>Sub total del flete</h4>
											<h2 class="number"><span>USD </span>5.475.098</h2>
										</div>
									</div>
									<div class="total">
										<div class="item">
											<h4>Total adress comission</h4>
											<h2 class="number"><span>USD </span>12.098.473</h2>
										</div>
									</div>
									<!--Botón para eliminar el flete, versión editar -->
									<button class="btn btn-danger">CANCELAR VIAJE</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 ci-asociated">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h3>Otros costos / Ingresos asociados</h3>
									<!-- Cuando haya costos o ingresos asociados, sacar la clase hidden al siguiente div -->
									<div class="add">
										<a href="#" data-toggle="modal" data-target="#CIA-modal"> 
											<span class="fa fa-plus"></span>Agregar
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- Cuando haya costos o ingresos asociados, agregar la clase hidden al siguiente div -->
								<div class="no-results hidden">
									<h3>Actualmente no existe un costo o ingreso asociado a este viaje.</h3>
									<button class="btn btn-ghost-primary"><span class="fa fa-plus"></span>AGREGAR UN COSTO / INGRESO ASOCIADO</button>
								</div>
								<div class="results">
									<table>
										<tr class="ci-a">
											<td>Ingreso</td>
											<td>Nombre demasiado largo del concepto</td>
											<td>Nombre de la contraparte</td>
											<td>USD <span>540.000.000</span></td>
											<td>
												<a href="#">
													<span class="fa fa-eye"></span>
												</a>
												<a href="#">
													<span class="fa fa-pencil"></span>
												</a>
												<a href="#">
													<span class="fa fa-trash"></span>
												</a>
											</td>
										</tr>
										<tr class="ci-a">
											<td>Costo</td>
											<td>Nombre largo del concepto</td>
											<td>Nombre largo de la contraparte</td>
											<td>ARS <span>230.000</span></td>
											<td>
												<a href="#">
													<span class="fa fa-eye"></span>
												</a>
												<a href="#">
													<span class="fa fa-pencil"></span>
												</a>
												<a href="#">
													<span class="fa fa-trash"></span>
												</a>
											</td>
										</tr>
										<tr class="ci-a">
											<td>Costo</td>
											<td>Nombre corto</td>
											<td>Nombre super largo de la contraparte</td>
											<td>EUR <span>30.000</span></td>
											<td>
												<a href="#">
													<span class="fa fa-eye"></span>
												</a>
												<a href="#">
													<span class="fa fa-pencil"></span>
												</a>
												<a href="#">
													<span class="fa fa-trash"></span>
												</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="final-buttons">
							<button class="btn btn-primary">REGISTRAR VIAJE</button>
							<button class="btn btn-ghost-neutral">CANCELAR</button>
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
        <script src="js/datepicker.min.js"></script>
        <script src="js/datepicker.es.js"></script>
        <script src="js/timepicker.js"></script>
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

				// Datepicker
				$('.input-date').datepicker();

				// Timepicker
				$(".timepicker").click(function () {
                    $(this).timepicker('showWidget');
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
            });
		</script>
	</body>
</html>