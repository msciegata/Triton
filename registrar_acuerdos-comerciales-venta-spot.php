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
						<h1>Registro Acuerdo Comercial de <span>VENTA SPOT</span></h1>
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
												<label for="fecha-cierre">Fecha de Cierre<span>*</span></label>
											</div>
											<div class="input-group">
										      <select name="fletador" id="fletador" required>
												<option value="" selected>Seleccione</option>
												<option value="v1">Cliente homologado 01</option>
												<option value="v2">Cliente homologado 02</option>
												<option value="v2">Cliente homologado 03</option>
										      </select>
										      <label for="fletador">Comprador<span>*</span></label>
											</div>
											<div class="input-group">
												<select name="fletador" id="fletador" required>
													<option value="" selected>Seleccione</option>
													<option value="v1">Transporte 01</option>
													<option value="v2">Transporte 02</option>
													<option value="v2">Transporte 03</option>
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
														<div class="col-lg-5">
															<div class="input-group">

																<button class="btn btn-ghost-primary">Verificar Crédito</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="well">
												<div class="well-header">
													<h6>Condición Crediticia<span>*</span></h6>
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