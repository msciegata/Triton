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
						<h1>Listado de acuerdos comerciales <span>DE TRADING</span></h1>
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
													<div class="col-lg-3">
														<div class="input-group">
															<select id="comprador" class="select-buscador" required style="width: 100%">
																<option value="" selected>Seleccione</option>
																<option value="v1">Martín Horacio García Begher</option>
																<option value="v2">Patricia Irma Gomez</option>
																<option value="v3">Jonatan Medinilla</option>
																<option value="v4">Paola Sacco</option>
																<option value="v5">Daniel Gonzales</option>
															</select>
															<label for="comprador">Solicitante</label>
														</div>
													</div>
													
													
													<div class="col-lg-4">
														<h4>Fecha de arribo del producto</h4>
														<div class="row filter-group">
															<div class="col-lg-6">
																<div class="input-group">
																	<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
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
        <script src="js/listado_acuerdos-comerciales-de-trading.js"></script>
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