<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Contrato COA.0001</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link href="css/datepicker.css" rel="stylesheet" type="text/css">
		<link href="css/timepicker.css" rel="stylesheet" type="text/css">
		<link href="css/select-search.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/font-awesome.css">
		<link href="js/plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
		<link rel="stylesheet" href="css/ui.jqgrid.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php include 'header.php';?>
		<main class="main">
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Acuerdo <span>COA.0001</span></h1>
					</div>
					<div class="col-lg-2 text-right">
						<button class="btn btn-primary"><span class="fa fa-plus"></span> ALTA DE VIAJE</button>
					</div>
				</div>
				<div class="row">
					<div class="info-header">
						<div class="col-lg-12">
							<h4>Datos del acuerdo</h4>
							<div class="row">
								<div class="col-lg-3">
									<div class="item">
										<h6>Fletador</h6>
										<h4>vYPF GAS</h4>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="item">
										<h6>Armador</h6>
										<h4>Empresa de Armadores S.R.L.</h4>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="item">
										<h6>Broker</h6>
										<h4>Nombre del Broker</h4>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-2">
									<div class="item">
										<h6>Fecha de inicio</h6>
										<h4>04/11/2017</h4>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="item">
										<h6>Fecha de finalización</h6>
										<h4>04/11/2018</h4>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="item">
										<h6>Volumen estimado</h6>
										<h4>543 TN</h4>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="item">
										<h6>Valor estimado</h6>
										<h4>$1.222.222</h4>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="vip-item">
										<h6>Saldo del contrato</h6>
										<h4><span>US$</span>1.999.999</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="list">
							<div class="list-header">
								<div class="list-title">
									<h3>Viajes relacionados</h3>
								</div>
							</div>
							<div class="list-body">
								<div class="list-filters">
									<div class="row">
										<div class="col-lg-3">
											<div class="input-group">
												<input id="buscar-viaje" class="" type="search" required name="buscar-viaje" data-language="es">
												<span class="fa fa-search" aria-hidden="true"></span>
												<label for="buscar-viaje">Buscar viaje</label>
											</div>
										</div>
										<div class="col-lg-offset-3 col-lg-6 actions">
											<a href=""><span class="fa fa-arrow-down"></span> Exportar a excel</a>
											<button id="btn-filter" class="btn btn-ghost-neutral"><span class="fa fa-filter"></span>Filtros</button>
										</div>
										<div class="col-lg-12">
											<div class="filters">
												<div class="row">
													<div class="col-lg-3">
														<div class="input-group">
															<select id="mov" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado 1</option>
																<option value="v2">Resultado 2</option>
																<option value="v3">Resultado 3</option>
																<option value="v4">Resultado 4</option>
																<option value="v5">Resultado 5</option>
																<option value="v6">Resultado 6</option>
															</select>
															<label for="mov">Movimiento</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="armador" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado 1</option>
																<option value="v2">Resultado 2</option>
																<option value="v3">Resultado 3</option>
																<option value="v4">Resultado 4</option>
																<option value="v5">Resultado 5</option>
																<option value="v6">Resultado 6</option>
															</select>
															<label for="mov">Armador</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="buque" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado 1</option>
																<option value="v2">Resultado 2</option>
																<option value="v3">Resultado 3</option>
																<option value="v4">Resultado 4</option>
																<option value="v5">Resultado 5</option>
																<option value="v6">Resultado 6</option>
															</select>
															<label for="mov">Buque</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select name="fletador" id="fletador" required>
																<option value="" selected>Seleccione</option>
																<option value="v1">No iniciado</option>
																<option value="v2">Aprobado</option>
																<option value="v2">Facturado</option>
																<option value="v2">Cancelado</option>
																<option value="v2">Descartado</option>
															</select>
															<label for="fletador">Estado</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4">
														<h4>Volumen</h4>
														<div class="row filter-group">
															<div class="col-lg-4">
																<div class="input-group">
																	<input id="cantidad" type="text" required name="cantidad">
																	<label for="cantidad">Desde</label>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="input-group">
																	<input id="cantidad" type="text" required name="cantidad">
																	<label for="cantidad">Hasta</label>
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
																	<label for="UOM">UOM</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<h4>Fecha de cierre</h4>
														<div class="row filter-group">
															<div class="col-lg-6">
																<div class="input-group">
																	<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre" data-language="es">
																	<span class="fa fa-calendar" aria-hidden="true"></span>
																	<label for="fecha-cierre">Desde</label>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="input-group">
																	<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre" data-language="es">
																	<span class="fa fa-calendar" aria-hidden="true"></span>
																	<label for="fecha-cierre">Hasta</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<h4>Monto</h4>
														<div class="row filter-group">
															<div class="col-lg-4">
																<div class="input-group">
																	<input id="cantidad" type="text" required name="cantidad">
																	<label for="cantidad">Desde</label>
																</div>
															</div>
															<div class="col-lg-4">
																<div class="input-group">
																	<input id="cantidad" type="text" required name="cantidad">
																	<label for="cantidad">Hasta</label>
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
												<div class="row">
													<div class="col-lg-12">
														<button id="btn-apply" class="btn btn-ghost-neutral">APLICAR</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="tags-group">
												<div class="alert tag" id="tag1">
													<p>YPF GAS</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag2">
													<p>10.000 - 230.000 lbs</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag3">
													<p>10/03/2016 - 29/9/2017</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag4">
													<p>0056578</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag5">
													<p>NO INICIADO</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="list-items">
									<div class="row">
										<div class="col-lg-12">
											<table id="rowed2"></table>
		                    				<div id="prowed2"></div>
	                    				</div>
                    				</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php include 'footer.php';?>
		<script src="js/jquery.min.js"></script>
		<script src="js/datepicker.min.js"></script>
		<script src="js/datepicker.es.js"></script>
		<script src="js/timepicker.js"></script>
		<script src="js/select-search.min.js"></script>
        <script src="js/autosize.min.js"></script>
		<!-- JQ Grid -->
        <script src="js/listado_viajes-relacionados-COA.js"></script>
        <script src="js/plugins/jqgrid2/grid.locale-es.js"></script>
        <script src="js/plugins/jqgrid2/jquery.jqGrid.js"></script>

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

                // Filtros
				$("#btn-filter").click(function () {
					$(this).toggleClass('btn-ghost-neutral btn-neutral').blur();
                    $('.filters').slideToggle(400);
                });

                $("#btn-apply").click(function () {
                    $('.filters').slideToggle(400, function(){
                    	$('#btn-filter').toggleClass('btn-ghost-neutral btn-neutral');
                    	$('#tag1, #tag2, #tag3, #tag4, #tag5').css("display","inline-block");
                    });
                });
            });
		</script>
	</body>
</html>