<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Alta contrato COA</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
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
				<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es un error del sistema</strong>
								Esto es una aclaración de la notificación que arroja el sistema
							</p>
						</div>
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Registro contrato <span>COA</span></h1>
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
									<div class="row">
										<div class="col-lg-12">
											<div class="input-group">
												<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
												<span class="fa fa-calendar" aria-hidden="true"></span>
												<label for="fecha-cierre">Fecha de contrato<span>*</span></label>
											</div>
										</div>
									</div>
									<div class="input-group">
										<select name="fletador" id="fletador" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">YPF S.A.</option>
											<option value="v2">YPF GAS</option>
										</select>
										<label for="fletador">Fletador<span>*</span></label>
									</div>
									<div class="row">
										<div class="col-lg-8">
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
										</div>
										<div class="col-lg-4">
											<div class="input-group">
												<input id="contrato-SAP" type="text" required name="contrato-SAP">
												<label for="contrato-SAP">N° Contrato SAP<span>*</span></label>
											</div>
										</div>
									</div>
									<div class="well">
										<div class="well-header">
											<h6>Armador alternativo</h6>
											<div class="well-add">
												<a href="#"> 
													<span class="fa fa-plus"></span>
												</a>
											</div>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-7">
													<div class="input-group">
														<select id="armador" name="armador" required>
															<option value="" selected>Seleccione</option>
															<option value="v1">Armador 1</option>
															<option value="v2">Armador 2</option>
															<option value="v3">Armador 3</option>
															<option value="v4">Armador 4</option>
															<option value="v5">Armador 5</option>
														</select>
														<label for="armador">Nombre</label>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<input id="contrato-SAP" type="text" required name="contrato-SAP">
														<label for="contrato-SAP">N° Contrato SAP</label>
													</div>
												</div>
												<div class="col-lg-1">
													<div class="well-trash">
														<a href="#"> 
															<span class="fa fa-trash"></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="input-group">
										<select id="broker" name="broker" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Broker 1</option>
											<option value="v2">Broker 2</option>
										</select>
										<label for="broker">Broker</label>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="input-group">
												<input id="fecha-inicio" class="input-date datapicker-here" type="text" required name="fecha-inicio">
												<span class="fa fa-calendar" aria-hidden="true"></span>
												<label for="fecha-inicio">Fecha de inicio<span>*</span></label>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-group">
												<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
												<span class="fa fa-calendar" aria-hidden="true"></span>
												<label for="fecha-cierre">Fecha de cierre<span>*</span></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-12">
											<div class="well">
												<div class="well-header">
													<h6>Volumen estimado<span>*</span></h6>
												</div>
												<div class="well-body">
													<div class="row">
														<div class="col-lg-9">
															<div class="input-group">
																<input id="monto-estimado" type="text" required name="monto-estimado">
																<label for="monto-estimado">Cantidad</label>
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
																<label for="UOM">UOM</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="well">
												<div class="well-header">
													<h6>Monto estimado<span>*</span></h6>
												</div>
												<div class="well-body">
													<div class="row">
														<div class="col-lg-9">
															<div class="input-group">
																<input id="monto-estimado" type="text" required name="monto-estimado">
																<label for="monto-estimado">Cantidad</label>
															</div>
														</div>
														<div class="col-lg-3">
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
										<div class="col-lg-12">
											<div class="input-group">
												<input id="contrato-COA" type="text" required name="contrato-COA">
												<label for="contrato-COA">Contrato COA<span>*</span></label>
											</div>
										</div>
										<!-- Cuando se está dando de alta el contrato COA, aplicar la clase hidden al siguiente div -->
										<div class="r-cost-coa hidden">
											<div class="col-lg-6">
												<div class="monto-v-rel">
													<div class="item">
														<h4>Monto viajes relacionados</h4>
														<!-- Cuando no tenga viajes relacionados, sacar la clase hidden -->
														<h2 class="vacio hidden">-</h2>
														<!-- Cuando no tenga viajes relacionados aplicar la clase hidden al siguiente h2-->
														<h2 class="number"><span>USD </span>31.234</h2>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="saldo">
													<div class="item">
														<h4>Saldo del contrato</h4>
														<h2 class="vacio hidden">-</h2>
														<!-- Cuando tenga viajes relacionados aplicar la clase hidden al siguiente h2-->
														<h2 class="number"><span>USD </span>12.098.473</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="final-buttons">
							<button class="btn btn-primary">REGISTRAR CONTRATO</button>
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
				// Tab
				$('#laytime-tab a').click(function (e) {
				  e.preventDefault()
				  $(this).tab('show')
				})

				//Datepicker
                                $.datetimepicker.setLocale('es');
                                $('.input-date').datetimepicker({
                                    timepicker:false,
                                    format: 'd/m/Y'
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
	</body>
</html>