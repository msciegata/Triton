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
						<h1>Listado de acuerdos comerciales <span>VENTA SPOT</span></h1>
					</div>
					
				</div>
				<div class="row">
					
					<div class="col-lg-12">
						<div class="list">
							
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
											<button id="btn-filter" class="btn btn-filtro"><span class="fa fa-filter"></span>Filtros</button>
										</div>
										<div class="col-lg-12">
											<div class="filters">
												<div class="row">
													<div class="col-lg-4">
														<div class="input-group">
															<select id="condicion" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Total Argentina S.A.</option>
																<option value="v2">Shell Argentina S.A.</option>
															</select>
															<label for="condicion">Comprador</label>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="input-group">
															<select id="condicion" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Fully Refined Paraffin Wax</option>
																<option value="v2">Fully Refined Paraffin Wax (improved)</option>
															</select>
															<label for="condicion">Producto</label>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="input-group">
															<select id="condicion" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Pendiente de Pagar/Facturar</option>
																<option value="v2">Factura Emitida</option>
															</select>
															<label for="condicion">Estado del Acuerdo</label>
														</div>
													</div>
													<div class="col-lg-4">
														<h4>Fecha de cierre</h4>
														<div class="row filter-group">
															<div class="col-lg-6">
																<div class="input-group">
																	<input id="fecha-cierre" class="input-date datapicker-here" type="text" name="fecha-cierre">
																	<span class="fa fa-calendar" aria-hidden="true"></span>
																	<label for="fecha-cierre">Desde</label>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="input-group">
																	<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
																	<span class="fa fa-calendar" aria-hidden="true"></span>
																	<label for="fecha-cierre">Hasta</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="input-group">
															<select id="acuerdos-relacionados" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Iniciado</option>
																<option value="v2">Borrador</option>
																<option value="v3">Confirmado</option>
																<option value="v4">Cancelado</option>
															</select>
															<label for="acuerdos-relacionados">Estado de Pago</label>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="input-group">
															<select id="condicion" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Jonatan Medinilla</option>
																<option value="v2">Patricia Gomez</option>
																<option value="v3">Daniel Gonzalez</option>
															</select>
															<label for="condicion">Solicitante</label>
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
													<p>Total Argentina S.A.</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag2">
													<p>Fully Refined Paraffin Wax</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag3">
													<p>Factura Emitida</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag4">
													<p>29/09/2017</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag5">
													<p>Confirmado</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag6">
													<p>Patricia Gomez</p>
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
                  <div class="row">
				<div class="col-lg-12 text-right">
						<button class="btn btn-success">
							<span class="fa fa-plus"></span> ALTA DE ACUERDO COMERCIAL
						</button>
					</div>
				</div>

			</div>
		</main>
		<?php include 'footer.php';?>
        <?php include 'js-elements.php';?>
		<script src="js/listado_acuerdos-comerciales-venta-spot.js"></script>

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
                            $('#tag1, #tag2, #tag3, #tag4, #tag5, #tag6').css("display","inline-block");
                        });
                    });
                });
		</script>
	</body>
</html>