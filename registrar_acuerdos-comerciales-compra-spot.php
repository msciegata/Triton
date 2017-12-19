<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tritón 2.0 | Alta contrato COA</title>
		<?php include 'css-elements.php';?>
	</head>
	<body>
		<?php include 'header.php';?>
		<main>
			<div class="container-fluid">
				<div class="row page-title">
					<div class="col-lg-10">
						<h1>Registro Acuerdo Comercial de <span>COMPRA SPOT</span></h1>
					</div>
					<div class="col-lg-2 state">
						<div class="circle bg-gray"></div>
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
												<label for="fecha-cierre">Fecha de Cierre<span>*</span></label>
											</div>
											<div class="input-group">
										      <select name="fletador" id="fletador" required>
												<option value="" selected>Seleccione</option>
												<option value="v1">Resultado de Búsqueda predictiva 01</option>
												<option value="v2">Resultado de Búsqueda predictiva  02</option>
												<option value="v2">Resultado de Búsqueda predictiva  03</option>
										      </select>
										      <label for="fletador">Vendedor<span>*</span></label>
											</div>
											<div class="input-group">
												<select name="fletador" id="fletador" required>
													<option value="" selected>Seleccione</option>
													<option value="v1">Oleoducto</option>
													<option value="v2">Camión</option>
													<option value="v2">Buque</option>
													<option value="v2">Barcaza</option>
												</select>
												<label for="fletador">Transporte<span>*</span></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-12">
											<div class="well">
												<div class="well-header">
													<h6>Monto estimado<span>*</span></h6>
												</div>
												<div class="well-body">
													<div class="row">
														<div class="col-lg-4">
															<div class="input-group">
																<input id="monto-estimado" type="text" required name="monto-estimado">
																<label for="monto-estimado">Cantidad</label>
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
														<div class="col-lg-4">
															<div class="radio-button margin-top-25">
																<h6>¿Es pago anticipado?</h6>
																<div class="radio">
																	<input type="radio" id="radio-1" name="radio-a">
																	<label for="radio-1" class="radio-label">SI</label>
																</div>
																<div class="radio">
																	<input type="radio" id="radio-2" name="radio-a">
																	<label for="radio-2" class="radio-label">NO</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="well">
												<div class="well-header">
													<h6>Condición Crediticia Vendedor</h6>
												</div>
													<div class="remark remark-neutro">
													<p><span class="fa fa-clock-o "></span>AGUARDANDO INFORMACIÓN</p>
												</div>
											</div>
										</div>
										<div class="r-cost-coa hidden">
									        <!-- Cuando la condición crediticia no coincide, aplicar el siguiente div -->
									        <div class="remark remark-warning">
												<p><span class="fa fa-exclamation"></span>NECESITA UNA CARTA DE CRÉDITO / PCG</p>
											</div>
											<!-- Cuando la condición crediticia si coincide, aplicar el siguiente div -->
									        <div class="remark remark-warning">
												<p><span class="fa fa-exclamation"></span>NO ES NECESARIO CONTAR CON NINGUNA</p>
											</div>
										</div>
									</div>
								</div>	
							</div>
                            <div class="separador-productos"><h3>DATOS DEL PRODUCTO</h3></div>
							<div class="card-body">
                               <div class="col-lg-6">
								    <div class="input-group">
										<select id="armador" name="armador" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Nombre del producto 1</option>
											<option value="v2">Nombre del producto 2</option>
											<option value="v3">Nombre del producto 3</option>
											<option value="v4">Nombre del producto 4</option>
											<option value="v5">Nombre del producto 5</option>
										</select>
										<label for="armador">Nombre del producto <span>*</span></label>
									</div>
									<div class="well">
										<div class="well-body margin-top-0">
											<div class="row">
												<div class="col-lg-8">
													<div class="input-group">
														<input id="cantidad" type="text" required name="cantidad">
														<label for="cantidad">Cantidad<span>*</span></label>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="input-group">
														<select id="divisa" name="divisa" required>
															<option value="" selected>Seleccione</option>
															<option value="v1">M2</option>
															<option value="v2">M3</option>
															<option value="v3">LTS</option>
															<option value="v4">TN</option>
														</select>
														<label for="divisa">UOM<span>*</span></label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="well">
										<div class="well-header">
											<h6>Tolerancia</h6>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-11">
													Completar
												</div>
											</div>
										</div>
									</div>
									<div class="input-group">
										<select id="armador" name="armador" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">FCA</option>
											<option value="v2">FOB</option>
											<option value="v3">CFR</option>
										</select>
										<label for="armador">Condición de entrega / Incoterm<span>*</span></label>
									</div>
									<div class="well">
										<div class="well-header">
									        <h5>Operación vinculante</h5>
											<h6>Carga<span>*</span></h6>
											<div class="well-add">
												<a href="#"> 
													<span class="fa fa-plus"></span>
												</a>
											</div>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-11">	
													<div class="col-lg-12">
														<div class="input-group margin-bottom-30">
															<select id="armador" name="armador" required>
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado de Búsqueda predictiva 01</option>
																<option value="v2">Resultado de Búsqueda predictiva 02</option>
																<option value="v3">Resultado de Búsqueda predictiva 03</option>
																<option value="v4">Resultado de Búsqueda predictiva 04</option>
																<option value="v5">Resultado de Búsqueda predictiva 05</option>
															</select>
															<label for="armador">Puerto de carga<span>*</span></label>
														</div>
													</div>
													<div role="tab-pane" class="tab-pane fecha active" id="fecha">
														<div class="col-lg-12">
															<div class="row">
																<div class="col-lg-6">
																	<div class="input-group margin-bottom-30">
																		<input id="fecha-inicio" class="input-date datapicker-here" type="text" required name="fecha-inicio">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-inicio">Inicio<span>*</span></label>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="input-group margin-bottom-30">
																		<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-cierre">Fin<span>*</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="input-group margin-bottom-30">
																<select id="armador" name="armador" required>
																	<option value="" selected>Seleccione</option>
																	<option value="v1">Resultado de Búsqueda predictiva 01</option>
																	<option value="v2">Resultado de Búsqueda predictiva 02</option>
																	<option value="v3">Resultado de Búsqueda predictiva 03</option>
																	<option value="v4">Resultado de Búsqueda predictiva 04</option>
																	<option value="v5">Resultado de Búsqueda predictiva 05</option>
																</select>
																<label for="armador">Lugar de pase de título</label>
															</div>
													    </div>
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
										<div class="well-header margin-top-30">
											<h6>Descarga<span>*</span></h6>
											<div class="well-add">
												<a href="#"> 
													<span class="fa fa-plus"></span>
												</a>
											</div>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-11">	
													<div class="col-lg-12">
														<div class="input-group margin-bottom-30">
															<select id="armador" name="armador" required>
																<option value="" selected>Seleccione</option>
																<option value="v1">Resultado de Búsqueda predictiva 01</option>
																<option value="v2">Resultado de Búsqueda predictiva 02</option>
																<option value="v3">Resultado de Búsqueda predictiva 03</option>
																<option value="v4">Resultado de Búsqueda predictiva 04</option>
																<option value="v5">Resultado de Búsqueda predictiva 05</option>
															</select>
															<label for="armador">Puerto de descarga <span>*</span></label>
														</div>
													</div>
													<div role="tab-pane" class="tab-pane fecha active" id="fecha">
														<div class="col-lg-12">
															<div class="row">
																<div class="col-lg-6">
																	<div class="input-group margin-bottom-30">
																		<input id="fecha-inicio" class="input-date datapicker-here" type="text" required name="fecha-inicio">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-inicio">Inicio<span>*</span></label>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="input-group margin-bottom-30">
																		<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-cierre">Fin<span>*</span></label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="input-group margin-bottom-30">
																<select id="armador" name="armador" required>
																	<option value="" selected>Seleccione</option>
																	<option value="v1">Resultado de Búsqueda predictiva 01</option>
																	<option value="v2">Resultado de Búsqueda predictiva 02</option>
																	<option value="v3">Resultado de Búsqueda predictiva 03</option>
																	<option value="v4">Resultado de Búsqueda predictiva 04</option>
																	<option value="v5">Resultado de Búsqueda predictiva 05</option>
																</select>
																<label for="armador">Lugar de pase de título</label>
															</div>
													    </div>
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

									
							   </div>
							   <div class="col-lg-6">
									<div class="well">
										<div class="well-header">
											<h6>Origen</h6>
											<div class="well-add">
												<a href="#"> 
													<span class="fa fa-plus"></span>
												</a>
											</div>
										</div>
										<div class="well-body">
											<div class="row">
												<div class="col-lg-11">
													<div class="input-group">
														<select id="armador" name="armador" required>
															<option value="" selected>Seleccione</option>
															<option value="v1">Argentina</option>
															<option value="v2">Brasil</option>
															<option value="v3">China</option>
															<option value="v4">Estados Unidos</option>
															<option value="v5">Portugal</option>
														</select>
														<label for="armador">País</label>
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
											<option value="v1">Resultado de Búsqueda predictiva 1</option>
											<option value="v2">Resultado de Búsqueda predictiva 2</option>
											<option value="v1">Resultado de Búsqueda predictiva 3</option>
											<option value="v2">Resultado de Búsqueda predictiva 4</option>
										</select>
										<label for="broker">Productor</label>
									</div>
									<div class="input-group">
										<select id="buque" name="buque" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Resultado de Búsqueda predictiva 1</option>
											<option value="v2">Resultado de Búsqueda predictiva 2</option>
											<option value="v1">Resultado de Búsqueda predictiva 3</option>
											<option value="v2">Resultado de Búsqueda predictiva 4</option>
										</select>
										<label for="buque">Procedencia</label>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="laytime">
												<h6 class="margin-bottom-15">Tipo de precio</h6>
												<ul class="nav nav-tabs" id="laytime-tab" role="tablist">
													<li role="presentation" class="tab active">
														<a href="#fijo" data-toggle="tab" aria-controls="fijo">Fijo</a>
													</li>
													<li role="presentation" class="tab">
														<a href="#calculado" data-toggle="tab" aria-controls="calculado">Fórmula</a>
													</li>
												</ul>
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane fijo active" id="fijo">
														<div class="col-lg-6">
															<div class="input-group">
																<input id="caudal-volumen" type="text" required name="caudal-volumen">
																<label for="caudal-volumen">Precio</label>
															</div>
														</div>
														<div class="col-lg-3">
															<div class="input-group">
																<select id="UOM" name="UOM" required>
																	<option value="" selected>Seleccione</option>
																	<option value="v1">U$D</option>
																	<option value="v2">ARG</option>
																	<option value="v2">EUR</option>
																</select>
																<label for="UOM">Moneda</label>
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
													<div role="tabpanel" class="tab-pane calculado" id="calculado">
														<div class="input-group">
															<textarea id="observaciones" required name="observaciones" rows="1" cols="50"></textarea>
                                                            <label for="observaciones">Escriba la fórmula para calcular el precio</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="laytime">
												<h6 class="margin-bottom-15">Preciación</h6>
												<ul class="nav nav-tabs-3" id="laytime-tab" role="tablist">
													<li role="presentation" class="tab active">
														<a href="#fecha" data-toggle="tab" aria-controls="fecha">Fecha</a>
													</li>
													<li role="presentation" class="tab">
														<a href="#eventos" data-toggle="tab" aria-controls="eventos">Eventos</a>
													</li>
													<li role="presentation" class="tab">
														<a href="#triggers" data-toggle="tab" aria-controls="triggers">Triggers</a>
													</li>
												</ul>
												<div class="tab-content">
													<div role="tab-pane" class="tab-pane fecha active" id="fecha">
														<div class="col-lg-12">
															<div class="row">
																<div class="col-lg-6">
																	<div class="input-group">
																		<input id="fecha-inicio" class="input-date datapicker-here" type="text" required name="fecha-inicio">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-inicio">Desde<span>*</span></label>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="input-group">
																		<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
																		<span class="fa fa-calendar" aria-hidden="true"></span>
																		<label for="fecha-cierre">Hasta<span>*</span></label>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div role="tab-pane" class="tab-pane eventos" id="eventos">
														<div class="col-lg-4">
															<div class="input-group margin-bottom-30">
																<input id="caudal-volumen" type="text" required name="caudal-volumen">
																<label for="caudal-volumen">N. de preciaciones<span>*</span></label>
															</div>
														</div>
														<div class="col-lg-8">
															<div class="input-group margin-bottom-30">
																<select id="UOM" name="UOM" required>
																	<option value="" selected>Seleccione</option>
																	<option value="v1">Cotizaciones</option>
																	<option value="v2">Días</option>
																	<option value="v2">Semanas</option>
																	<option value="v2">Meses</option>
																	<option value="v2">Trimestre</option>
																</select>
																<label for="UOM">Seleccione</label>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="input-group">
																<select id="UOM" name="UOM" required>
																	<option value="" selected>Seleccione</option>
																	<option value="v1">Alrededor de</option>
																	<option value="v2">Antes</option>
																	<option value="v2">Después</option>
																	<option value="v2">Terminando en</option>
																	<option value="v2">Empezando en</option>
																</select>
																<label for="UOM">¿Cuándo?<span>*</span></label>
															</div>
														</div>
													</div>
													<div role="tab-pane" class="tab-pane triggers" id="triggers">
														<div class="input-group">
															 Completar
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="laytime">
												<h6 class="margin-bottom-15">Fecha de vencimiento del pago</h6>
												<ul class="nav nav-tabs" id="laytime-tab" role="tablist">
													<li role="presentation" class="tab active">
														<a href="#pago" data-toggle="tab" aria-controls="pago">Fija</a>
													</li>
													<li role="presentation" class="tab">
														<a href="#calculada" data-toggle="tab" aria-controls="calculada">Calculada</a>
													</li>
												</ul>
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane pago active" id="pago">
														<div class="col-lg-12">
															<div class="input-group">
																<input id="fecha-cierre" class="input-date datapicker-here" type="text" required name="fecha-cierre">
																<span class="fa fa-calendar" aria-hidden="true"></span>
																<label for="fecha-cierre">Fecha<span>*</span></label>
															</div>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane calculada" id="calculada">
														<div class="input-group">
															Completar
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
		<?php include 'js-elements.php';?>

		
	</body>
</html>