<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | AC - #N2345</title>
		<?php include 'css-elements.php';?>
	</head>
	<body>
		<?php include 'header.php';?>
		<main class="main">
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Acuerdos comerciales relacionados <span>#N2345</span></h1>
					</div>
					<div class="state">
						<div class="circle bg-cyan">
						</div>
						<h5>INGRESADA</h5>
					</div>
				</div>
				<div class="row">
					<div class="info-header">
						<div class="col-lg-12">
							<h4>Datos del acuerdo</h4>
							<div class="row">
								<div class="col-lg-3">
									<div class="item">
										<h6>Condición respecto al presupuesto</h6>
										<h4>Dentro del presupuesto</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="item">
										<h6>Estado</h6>
										<h4>Planificada</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="item">
										<h6>Fecha de Creación</h6>
										<h4>14/06/2015</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="item">
										<h6>Solicitada por</h6>
										<h4>Jonatan Medinilla</h4>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5">
									<div class="item">
										<h6>Producto 1</h6>
										<h4>Fully Refined Paraffin Wax</h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="item">
										<h6>Cantidad solicitada</h6>
										<h4>3500 TN</h4>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="vip-item">
										<h6>Saldo</h6>
										<h4>500 TN</h4>
									</div>
								</div>
								<br>
								<br>
								<div class="col-lg-5">
									<div class="item">
										<h6>Producto 2</h6>
										<h4>Fully Refined Paraffin Wax (improved) </h4>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="item">
										<h6>Cantidad solicitada</h6>
										<h4>500 TN</h4>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="vip-item purple">
										<h6>Saldo</h6>
										<h4>0 TN</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="list">
							<div class="list-header">
								<div class="list-title">
									<h3>Acuerdos comerciales relacionados</h3>
								</div>
							</div>
							<div class="list-body">
								<div class="list-filters">
									<div class="row">
										<div class="col-lg-3">
											<div class="input-group">
												<input id="buscar-viaje" class="" type="search" required name="buscar-viaje" data-language="es">
												<span class="fa fa-search" aria-hidden="true"></span>
												<label for="buscar-viaje">Buscar acuerdo</label>
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
															<select id="comprador" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado 1</option>
																<option value="v2">Resultado 2</option>
																<option value="v3">Resultado 3</option>
																<option value="v4">Resultado 4</option>
																<option value="v5">Resultado 5</option>
																<option value="v6">Resultado 6</option>
															</select>
															<label for="comprador">Comprador</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="producto" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado 1</option>
																<option value="v2">Resultado 2</option>
																<option value="v3">Resultado 3</option>
																<option value="v4">Resultado 4</option>
																<option value="v5">Resultado 5</option>
																<option value="v6">Resultado 6</option>
															</select>
															<label for="producto">Producto</label>
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
															<label for="mov">Incoterm</label>
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
														<h4>Cantidad</h4>
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
                <?php include 'js-elements.php';?>
                <script src="js/listado_acuerdos-comerciales-relacionados.js"></script>
		<script>
                $(function () {
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