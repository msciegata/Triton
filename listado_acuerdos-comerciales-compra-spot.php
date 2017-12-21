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
						<h1>Listado de acuerdos comerciales <span>COMPRA SPOT</span></h1>
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
															<select id="condicion" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Total Argentina S.A.</option>
																<option value="v2">Shell Argentina S.A.</option>
															</select>
															<label for="condicion">Vendedor</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="condicion" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Fully Refined Paraffin Wax</option>
																<option value="v2">Fully Refined Paraffin Wax (improved)</option>
															</select>
															<label for="condicion">Producto</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="acuerdos-relacionados" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Iniciado</option>
																<option value="v2">Borrador</option>
																<option value="v3">Confirmado</option>
																<option value="v4">Cancelado</option>
															</select>
															<label for="acuerdos-relacionados">Estado</label>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="input-group">
															<select id="condicion" class="select-buscador" style="width: 100%">
																<option value="" selected></option>
																<option value="v1">Jonatan Medinilla</option>
																<option value="v2">Patricia Gomez</option>
																<option value="v3">Daniel Gonzalez</option>
															</select>
															<label for="condicion">Usuario</label>
														</div>
													</div>
													<div class="col-lg-4">
														<h4>Rango de Fecha de Cierre</h4>
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
														<div class="filtro-radio-button">
															<p>Estado de Pago</p>
														</div>
														<div class="radio-button">
															<div class="radio">
																<input type="radio" id="radio-1" name="radio-a">
																<label for="radio-1" class="radio-label">Pendiente de Pagar/Facturar</label>
															</div>
															
															<div class="radio">
																<input type="radio" id="radio-2" name="radio-a">
																<label for="radio-2" class="radio-label">Factura Emitida</label>
															</div>
															<span>This is a help test</span>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="filtro-radio-button">
															<p>Pago Anticipado</p>
														</div>
														<div class="radio-button">
															<div class="radio">
																<input type="radio" id="radio-1" name="radio-a">
																<label for="radio-1" class="radio-label">SI</label>
															</div>
															
															<div class="radio">
																<input type="radio" id="radio-2" name="radio-a">
																<label for="radio-2" class="radio-label">NO</label>
															</div>
															<span>This is a help test</span>
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
													<p>Iniciado</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag4">
													<p>Patricia Gomez</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag5">
													<p>Factura Emitida</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag6">
													<p>SI</p>
													<button type="button" class="close" data-dismiss="alert">×</button>
												</div>
												<div class="alert tag" id="tag7">
													<p>20/12/2017</p>
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
		<script src="js/listado_acuerdos-comerciales-compra-spot.js"></script>

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
                            $('#tag1, #tag2, #tag3, #tag4, #tag5, #tag6, #tag7').css("display","inline-block");
                        });
                    });
                });
		</script>


		<!--MODALS -->
		<!-- CANCELAR-modal -->
		<div id="cancelar-modal" class="modal" role="dialog" style="display: none;">
			<div class="moda-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Solicitud de cancelación</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="col-lg-12">
						<p>Usted está por efectuar la cancelación de la necesidad de compra internacional #N2345</p>
						</div>
						<div class="col-lg-12">
							<div class="input-group autoheight margin-top-20">
                                 <textarea id="observaciones" name="observaciones" rows="1" cols="50"></textarea>
                                 <label for="observaciones">Detalle</label>
                            </div>
						</div>
				    </div>
				    <div class="modal-footer">
						<button class="btn btn-danger">CANCELAR</button>
						<button class="btn btn-ghost-primary" data-dismiss="modal">SALIR</button>
				    </div>
				</div>
			</div>
		</div>


	</body>
</html>