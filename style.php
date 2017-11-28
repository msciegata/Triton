<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>YPF Style | Components</title>
		<?php include 'css-elements.php';?>
	</head>
<body>
	<?php include 'header.php';?>
	<main>
		<div class="container-fluid">
			<div class="row">
				<!-- System messages -->
				<div class="col-lg-12">
					<div class="card margin-top-30">
						<div class="card-title">
							<h3>System messages</h3>
						</div>
						<div class="alert alert-primary">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación NEUTRAL</strong>
								Es una notificación para cuando la acción del usuario es negativa (borrar, eliminar, descartar) pero se da de forma correcta. Esto se hace porque ponerle una notificación de tipo success sería una contradición. 
							</p>
						</div>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación POSITIVA</strong>
								Este tipo de notificación se da cuando la acción del usuario es positiva (alta, registro, guardar) y se da de forma correcta.
							</p>
						</div>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación WARNING</strong>
								Este tipo de notificación se da cuando se debe hacer una advertencia al usuario sobre el proceso en cuestión.
							</p>
						</div>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación ERROR</strong>
								Este tipo de notificación se da cuando el sistema no pudo realizar con éxito el proceso solicitado.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-10">
					<h1>YPF <span>Style</span></h1>
				</div>
				
				<!-- BUTTONS -->
				<div class="col-lg-6">
					
					<div class="card">
						<div class="card-header">
						<div class="card-title">
								<h3>Buttons</h3>
							</div>
						</div>
						<div class="card-body">
							<p></p>
							<div class="group">
								<div class="col-lg-6">
									<h5>Normal Primary</h5>
									<p>- Este tipo de botones se usan para acciones principales del tipo normales o rasonables. Como pueden ser aceptar, guardar o enviar. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-primary">button</button>
									<button class="btn btn-primary disabled">button</button>
									<br><br>
									<h5>Positive</h5>
									<p>- Este tipo de botones se usan para acciones de éxito,  validación o que tengan un sentido positivo. Como por ejemplo agregar, dar de alta o registrar.A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-success">button</button>
									<button class="btn btn-success disabled">button</button>
									<br><br>
									<h5>Danger</h5>
									<p>- Este tipo de botones se usan para acciones principales del tipo peligrosas o negativas. Como pueden ser borrar, descartar o eliminar. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-danger">button</button>
									<button class="btn btn-danger disabled">button</button>
								</div>
								<div class="col-lg-6">
									<h5>Normal Ghost Primary</h5>
									<p>- Este tipo de botones están pensados para acciones secundarias que no tengan sentido negativo y que estén acompañadas de acciones principales como guardar borrador. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-ghost-primary">button</button>
									<button class="btn btn-ghost-primary disabled">button</button>
									<br>
									<h5>Neutral</h5>
									<p>- Este tipo de botones se usan para acciones secundarias neutrales o bien funcionalidades. Como puede ser cancelar o filtros. A continuación también figura su versión <strong>disabled</strong></p>
									<button class="btn btn-ghost-neutral">button</button>
									<button class="btn btn-ghost-neutral disabled">button</button>
									<br>									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- SYSTEM MESSAGES -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Tags</h3>
							</div>
						</div>
						<div class="alert tag">
							<p>YPF GAS</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>COA.014</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>10/12/2017 - 21/03/2020</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>10.000 - 300.000 USD</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>States</h3>
							</div>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-darkgray">
							</div>
							<h5>INICIADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-cyan">
							</div>
							<h5>INGRESADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>PLANIFICADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>REGISTRADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>CONFIRMADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-yellow">
							</div>
							<h5>MODIFICADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-yellow">
							</div>
							<h5>BORRADOR</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-pink">
							</div>
							<h5>RECHAZADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-purple">
							</div>
							<h5>CANCELADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-orange">
							</div>
							<h5>PRE-CANCELADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-orange">
							</div>
							<h5>BORRADO</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Icons</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="icons">
								<div class="col-lg-4">
									<!-- System -->
									<h5>System</h5>
									<p><span class="fa fa-user"></span>User</p>
									<p><span class="fa fa-bars"></span>Menu</p>
									<p><span class="fa fa-cog"></span>Configuration</p>
									<p><span class="fa fa-bell"></span>Notifications</p>
									<p><span class="fa fa-search"></span>Search</p>
									<p><span class="fa fa-spinner"></span>Spinner</p>
									<p><span class="fa fa-history"></span>History</p>
									<p><span class="fa fa-filter"></span>Filter</p>
									<p><span class="fa fa-angle-right"></span>Next</p>
									<p><span class="fa fa-angle-left"></span>Back</p>
								</div>
								<div class="col-lg-4">
									<!--Notifications-->
									<h5>Notifications</h5>
									<p><span class="fa fa-ban"></span>Disabled</p>
									<p><span class="fa fa-times-circle"></span>Error</p>
									<p><span class="fa fa-exclamation"></span>Warning</p>
									<p><span class="fa fa-check"></span>Succes/Validated</p>

									<!--Actions -->
									<h5 class="margin-top-10">Actions</h5>
									<p><span class="fa fa-pencil"></span>Edit</p>
									<p><span class="fa fa-arrow-down"></span>Download</p>
									<p><span class="fa fa-share-alt"></span>Share</p>
									<p><span class="fa fa-refresh"></span>Refresh</p>
									<p><span class="fa fa-plus"></span>Add</p>
									<p><span class="fa fa-close"></span>Close</p>
									<p><span class="fa fa-trash"></span>Delete</p>
								</div>
								<div class="col-lg-4">
									<!-- Inputs -->
									<h5>Inputs</h5>
									<p><span class="fa fa-calculator"></span>Calculator</p>
									<p><span class="fa fa-calendar"></span>Calendar</p>
									<p><span class="fa fa-file"></span>Attach/To attach</p>
									<p><span class="fa fa-envelope"></span>E-mail</p>
									<p><span class="fa fa-map-marker"></span>Ubication</p>
									<p><span class="fa fa-tag"></span>Tag</p>
									<p><span class="fa fa-clock-o"></span>Time</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Controls</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="controls">
								<div class="checkbox">
									<h5>Checkbox</h5>
									<h5>Label text</h5>
									
									<input type="checkbox" class="custom-checkbox" name="check-a" id="checkbox-example-1">
									<label for="checkbox-example-1">Option 1</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-b" id="checkbox-example-2">
									<label for="checkbox-example-2">Option 2</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-c" id="checkbox-example-3">
									<label for="checkbox-example-3">Option 3</label>
								</div>

								<div class="radio-button">
									<h5>Radio Button</h5>
									<h5>Label Text</h5>
									
									<div class="radio">
										<input type="radio" id="radio-1" name="radio-a">
										<label for="radio-1" class="radio-label">Option 1</label>
									</div>
									
									<div class="radio">
										<input type="radio" id="radio-2" name="radio-a">
										<label for="radio-2" class="radio-label">Option 2</label>
									</div>
									
									<div class="radio">
										<input type="radio" id="radio-3" name="radio-a">
										<label for="radio-3" class="radio-label">Option 3</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Tabs</h3>
							</div>
						</div>
						<div class="card-body">
							<ul class="nav nav-tabs" id="laytime-tab" role="tablist">
								<li role="presentation" class="tab">
									<a href="#fijo" class="active" data-toggle="tab" aria-controls="fijo">Fijo</a>
								</li>
								<li role="presentation" class="tab">
									<a href="#calculado" data-toggle="tab" aria-controls="calculado">Calculado</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="fijo">
									<p>Contenido 1</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="calculado">
									<p>Contenido 2</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Uploader</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="well">
								<div class="well-header">
                                    <h6>Documentos a ingresar</h6>
                                    <div id="well-add-button" class="well-add">
                                        <a href="#"> 
                                            <span class="fa fa-plus"></span>
                                        </a>
                                    </div>
								</div>
                            	<div id="contrato-SAP-upload" name="contrato-SAP-upload" class="well-body"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- INPUTS -->
				<div class="col-lg-12">
					<div class="card">
						<div class="card-title">
							<h3>Inputs</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4">
									<h5>Normal + Focused + Completed</h5>
									<p>
										El nombre del campo en estado normal se colocará como si fuera un placeholder. Cuando el campo sea obligatorio, será identificado con un asterisco anaranjado.<br><br>
										Cuando el usuario se posicione en el campo, el nombre del campo pasará a tener un cuerpo de 14px y a ubicarse por  arriba del input.  Si el campo requiriera una ayuda/aclaración extra para ser completado, se ubicará debajo de la línea del campo.<br><br>
										Cuando el usuario haya terminado de completar el campo con la información correspondiente, el nombre del campo se colocará por arriba del espacio, y la información ingresada quedará en su lugar.
									</p>
									<div class="input-group">
										<input id="input-example" type="text" required name="example">
										<label for="input-example">Input No icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<input id="input-example" type="text" required name="example">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
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
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="UOM" name="UOM" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select no search<span>*</span></label>
									</div>
									<div class="input-group">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Validated</h5>
									<p>
										Cuando el usuario haya terminado de completar el input y el mismo sea validable y validado, si el input no tiene ícono en la parte derecha, se colocará un tilde y se pintarán la línea, el ícono y el label de verde. Si el input tiene ícono, el mismo también se pintará de azul.
									</p>
									<div class="input-group validated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-check" aria-hidden="true"></span>
										<label for="input-example">Input no icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group validated">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group validated">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Error</h5>
									<p>
										Cuando el usuario haya terminado de completar el campo  y la información ingresada no sea correcta o el campo esté incompleto, si no tiene ícono en la parte derecha, se colocará una cruz dentro de un círculo y se pintarán tanto la línea, el ícono y el label de púrpura. Si el input tiene ícono se pintará de púrpura. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender y corregir el error.
									</p>
									<div class="input-group error">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-times-circle" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No search<span>*</span></label>
									</div>
									<div class="input-group error">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker<span>*</span></label>
									</div>
									<div class="input-group error">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<h5>Disabled</h5>
									<p>
										Cuando el campo se encuentre deshabilitado por cuestiones del sistema se pintarán tanto la línea, el ícono y el label de gris claro.
									</p>
									<div class="input-group">
										<input id="input-example" disabled  type="text" required name="example" value="Information entered">
										<span class="fa fa-times-circle" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<input id="input-example" disabled  type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="product-name" disabled class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="UOM" name="UOM" required disabled>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No search<span>*</span></label>
									</div>
									<div class="input-group">
										<input class="input-date" disabled id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker<span>*</span></label>
									</div>
									<div class="input-group">
										<input id="horario-inicio" disabled type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Warning</h5>
									<p>
										Cuando el usuario haya terminado de completar el campo y por un motivo u otro el usuario deba prestar atención al mismo, si no tiene ícono en la parte derecha, se colocará un signo de admiración y se pintarán tanto la línea, el ícono y el label de naranja. Si el input tiene ícono se pintará de naranja. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender lo que tiene que hacer.
									</p>
									<div class="input-group warning">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-exclamation" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1" selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group warning">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group warning">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Duplicated</h5>
									<p>
										Cuando el usuario haya duplicado un formulario cargado en el sistema y haya campos a los cuales deba prestar atención para completar nuevamente o corroborar la información, estos campos se verán afectados por un fondo celeste claro, el nombre del label y el texto de ayuda serán gris oscuro, la linea inferior del input será color cyan y la información ingresada y el ícono, si tuviera, blancos. 
									</p>
									<div class="input-group duplicated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-exclamation" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1" selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1" selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group duplicated">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group duplicated">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
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
                ]
            });
        });
        </script>
</body>
=======
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>YPF Style | Components</title>
		<?php include 'css-elements.php';?>
	</head>
<body>
	<?php include 'header.php';?>
	<main>
		<div class="container-fluid">
			<div class="row">
				<!-- System messages -->
				<div class="col-lg-12">
					<div class="card margin-top-30">
						<div class="card-title">
							<h3>System messages</h3>
						</div>
						<div class="alert alert-primary">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación NEUTRAL</strong>
								Es una notificación para cuando la acción del usuario es negativa (borrar, eliminar, descartar) pero se da de forma correcta. Esto se hace porque ponerle una notificación de tipo success sería una contradición. 
							</p>
						</div>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación POSITIVA</strong>
								Este tipo de notificación se da cuando la acción del usuario es positiva (alta, registro, guardar) y se da de forma correcta.
							</p>
						</div>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación WARNING</strong>
								Este tipo de notificación se da cuando se debe hacer una advertencia al usuario sobre el proceso en cuestión.
							</p>
						</div>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación ERROR</strong>
								Este tipo de notificación se da cuando el sistema no pudo realizar con éxito el proceso solicitado.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-10">
					<h1>YPF <span>Style</span></h1>
				</div>
				
				<!-- BUTTONS -->
				<div class="col-lg-6">
					
					<div class="card">
						<div class="card-header">
						<div class="card-title">
								<h3>Buttons</h3>
							</div>
						</div>
						<div class="card-body">
							<p></p>
							<div class="group">
								<div class="col-lg-6">
									<h5>Normal Primary</h5>
									<p>- Este tipo de botones se usan para acciones principales del tipo normales o rasonables. Como pueden ser aceptar, guardar o enviar. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-primary">button</button>
									<button class="btn btn-primary disabled">button</button>
									<br><br>
									<h5>Positive</h5>
									<p>- Este tipo de botones se usan para acciones de éxito,  validación o que tengan un sentido positivo. Como por ejemplo agregar, dar de alta o registrar.A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-success">button</button>
									<button class="btn btn-success disabled">button</button>
									<br><br>
									<h5>Danger</h5>
									<p>- Este tipo de botones se usan para acciones principales del tipo peligrosas o negativas. Como pueden ser borrar, descartar o eliminar. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-danger">button</button>
									<button class="btn btn-danger disabled">button</button>
								</div>
								<div class="col-lg-6">
									<h5>Normal Ghost Primary</h5>
									<p>- Este tipo de botones están pensados para acciones secundarias que no tengan sentido negativo y que estén acompañadas de acciones principales como guardar borrador. A continuación también figura su versión <strong>disabled</strong>.</p>
									<button class="btn btn-ghost-primary">button</button>
									<button class="btn btn-ghost-primary disabled">button</button>
									<br>
									<h5>Neutral</h5>
									<p>- Este tipo de botones se usan para acciones secundarias neutrales o bien funcionalidades. Como puede ser cancelar o filtros. A continuación también figura su versión <strong>disabled</strong></p>
									<button class="btn btn-ghost-neutral">button</button>
									<button class="btn btn-ghost-neutral disabled">button</button>
									<br>									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- SYSTEM MESSAGES -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Tags</h3>
							</div>
						</div>
						<div class="alert tag">
							<p>YPF GAS</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>COA.014</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>10/12/2017 - 21/03/2020</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						<div class="alert tag">
							<p>10.000 - 300.000 USD</p>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>States</h3>
							</div>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-darkgray">
							</div>
							<h5>INICIADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-cyan">
							</div>
							<h5>INGRESADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>PLANIFICADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>REGISTRADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-green">
							</div>
							<h5>CONFIRMADO</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-yellow">
							</div>
							<h5>MODIFICADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-yellow">
							</div>
							<h5>BORRADOR</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-pink">
							</div>
							<h5>RECHAZADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-purple">
							</div>
							<h5>CANCELADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-orange">
							</div>
							<h5>PRE-CANCELADA</h5>
						</div>
						<div class="col-lg-3 state">
							<div class="circle bg-orange">
							</div>
							<h5>BORRADO</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Icons</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="icons">
								<div class="col-lg-4">
									<!-- System -->
									<h5>System</h5>
									<p><span class="fa fa-user"></span>User</p>
									<p><span class="fa fa-bars"></span>Menu</p>
									<p><span class="fa fa-cog"></span>Configuration</p>
									<p><span class="fa fa-bell"></span>Notifications</p>
									<p><span class="fa fa-search"></span>Search</p>
									<p><span class="fa fa-spinner"></span>Spinner</p>
									<p><span class="fa fa-history"></span>History</p>
									<p><span class="fa fa-filter"></span>Filter</p>
									<p><span class="fa fa-angle-right"></span>Next</p>
									<p><span class="fa fa-angle-left"></span>Back</p>
								</div>
								<div class="col-lg-4">
									<!--Notifications-->
									<h5>Notifications</h5>
									<p><span class="fa fa-ban"></span>Disabled</p>
									<p><span class="fa fa-times-circle"></span>Error</p>
									<p><span class="fa fa-exclamation"></span>Warning</p>
									<p><span class="fa fa-check"></span>Succes/Validated</p>

									<!--Actions -->
									<h5 class="margin-top-10">Actions</h5>
									<p><span class="fa fa-pencil"></span>Edit</p>
									<p><span class="fa fa-arrow-down"></span>Download</p>
									<p><span class="fa fa-share-alt"></span>Share</p>
									<p><span class="fa fa-refresh"></span>Refresh</p>
									<p><span class="fa fa-plus"></span>Add</p>
									<p><span class="fa fa-close"></span>Close</p>
									<p><span class="fa fa-trash"></span>Delete</p>
								</div>
								<div class="col-lg-4">
									<!-- Inputs -->
									<h5>Inputs</h5>
									<p><span class="fa fa-calculator"></span>Calculator</p>
									<p><span class="fa fa-calendar"></span>Calendar</p>
									<p><span class="fa fa-file"></span>Attach/To attach</p>
									<p><span class="fa fa-envelope"></span>E-mail</p>
									<p><span class="fa fa-map-marker"></span>Ubication</p>
									<p><span class="fa fa-tag"></span>Tag</p>
									<p><span class="fa fa-clock-o"></span>Time</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Controls</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="controls">
								<div class="checkbox">
									<h5>Checkbox</h5>
									<h5>Label text</h5>
									
									<input type="checkbox" class="custom-checkbox" name="check-a" id="checkbox-example-1">
									<label for="checkbox-example-1">Option 1</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-b" id="checkbox-example-2">
									<label for="checkbox-example-2">Option 2</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-c" id="checkbox-example-3">
									<label for="checkbox-example-3">Option 3</label>
								</div>

								<div class="radio-button">
									<h5>Radio Button</h5>
									<h5>Label Text</h5>
									
									<div class="radio">
										<input type="radio" id="radio-1" name="radio-a">
										<label for="radio-1" class="radio-label">Option 1</label>
									</div>
									
									<div class="radio">
										<input type="radio" id="radio-2" name="radio-a">
										<label for="radio-2" class="radio-label">Option 2</label>
									</div>
									
									<div class="radio">
										<input type="radio" id="radio-3" name="radio-a">
										<label for="radio-3" class="radio-label">Option 3</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Tabs</h3>
							</div>
						</div>
						<div class="card-body">
							<ul class="nav nav-tabs" id="laytime-tab" role="tablist">
								<li role="presentation" class="tab">
									<a href="#fijo" class="active" data-toggle="tab" aria-controls="fijo">Fijo</a>
								</li>
								<li role="presentation" class="tab">
									<a href="#calculado" data-toggle="tab" aria-controls="calculado">Calculado</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="fijo">
									<p>Contenido 1</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="calculado">
									<p>Contenido 2</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<h3>Uploader</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="well">
								<div class="well-header">
                                    <h6>Documentos a ingresar</h6>
                                    <div id="well-add-button" class="well-add">
                                        <a href="#"> 
                                            <span class="fa fa-plus"></span>
                                        </a>
                                    </div>
								</div>
                            	<div id="contrato-SAP-upload" name="contrato-SAP-upload" class="well-body"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- INPUTS -->
				<div class="col-lg-12">
					<div class="card">
						<div class="card-title">
							<h3>Inputs</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4">
									<h5>Normal + Focused + Completed</h5>
									<p>
										El nombre del campo en estado normal se colocará como si fuera un placeholder. Cuando el campo sea obligatorio, será identificado con un asterisco anaranjado.<br><br>
										Cuando el usuario se posicione en el campo, el nombre del campo pasará a tener un cuerpo de 14px y a ubicarse por  arriba del input.  Si el campo requiriera una ayuda/aclaración extra para ser completado, se ubicará debajo de la línea del campo.<br><br>
										Cuando el usuario haya terminado de completar el campo con la información correspondiente, el nombre del campo se colocará por arriba del espacio, y la información ingresada quedará en su lugar.
									</p>
									<div class="input-group">
										<input id="input-example" type="text" required name="example">
										<label for="input-example">Input No icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<input id="input-example" type="text" required name="example">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
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
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="UOM" name="UOM" required>
											<option value="" selected>Seleccione</option>
											<option value="v1">Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select no search<span>*</span></label>
									</div>
									<div class="input-group">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Validated</h5>
									<p>
										Cuando el usuario haya terminado de completar el input y el mismo sea validable y validado, si el input no tiene ícono en la parte derecha, se colocará un tilde y se pintarán la línea, el ícono y el label de verde. Si el input tiene ícono, el mismo también se pintará de azul.
									</p>
									<div class="input-group validated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-check" aria-hidden="true"></span>
										<label for="input-example">Input no icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group validated">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group validated">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group validated">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Error</h5>
									<p>
										Cuando el usuario haya terminado de completar el campo  y la información ingresada no sea correcta o el campo esté incompleto, si no tiene ícono en la parte derecha, se colocará una cruz dentro de un círculo y se pintarán tanto la línea, el ícono y el label de púrpura. Si el input tiene ícono se pintará de púrpura. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender y corregir el error.
									</p>
									<div class="input-group error">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-times-circle" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group error">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No search<span>*</span></label>
									</div>
									<div class="input-group error">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker<span>*</span></label>
									</div>
									<div class="input-group error">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<h5>Disabled</h5>
									<p>
										Cuando el campo se encuentre deshabilitado por cuestiones del sistema se pintarán tanto la línea, el ícono y el label de gris claro.
									</p>
									<div class="input-group">
										<input id="input-example" disabled  type="text" required name="example" value="Information entered">
										<span class="fa fa-times-circle" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<input id="input-example" disabled  type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="product-name" disabled class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group">
										<select id="UOM" name="UOM" required disabled>
											<option value="">Seleccione</option>
											<option value="v1"  selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No search<span>*</span></label>
									</div>
									<div class="input-group">
										<input class="input-date" disabled id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker<span>*</span></label>
									</div>
									<div class="input-group">
										<input id="horario-inicio" disabled type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker</label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Warning</h5>
									<p>
										Cuando el usuario haya terminado de completar el campo y por un motivo u otro el usuario deba prestar atención al mismo, si no tiene ícono en la parte derecha, se colocará un signo de admiración y se pintarán tanto la línea, el ícono y el label de naranja. Si el input tiene ícono se pintará de naranja. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender lo que tiene que hacer.
									</p>
									<div class="input-group warning">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-exclamation" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1"  selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group warning">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1" selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group warning">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group warning">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
									</div>
								</div>
								<div class="col-lg-4">
									<h5>Duplicated</h5>
									<p>
										Cuando el usuario haya duplicado un formulario cargado en el sistema y haya campos a los cuales deba prestar atención para completar nuevamente o corroborar la información, estos campos se verán afectados por un fondo celeste claro, el nombre del label y el texto de ayuda serán gris oscuro, la linea inferior del input será color cyan y la información ingresada y el ícono, si tuviera, blancos. 
									</p>
									<div class="input-group duplicated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-exclamation" aria-hidden="true"></span>
										<label for="input-example">Input No Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<input id="input-example" type="text" required name="example" value="Information entered">
										<span class="fa fa-tag" aria-hidden="true"></span>
										<label for="input-example">Input Icon<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<select id="product-name" class="select-buscador" required style="width: 100%">
											<option value="">Seleccione</option>
											<option value="v1" selected>Resultado 1</option>
											<option value="v2">Resultado 2</option>
											<option value="v3">Resultado 3</option>
											<option value="v4">Resultado 4</option>
											<option value="v5">Resultado 5</option>
											<option value="v6">Resultado 6</option>
										</select>
										<label for="product-name">Select Search<span>*</span></label>
										<p>This is a help text</p>
									</div>
									<div class="input-group duplicated">
										<select id="UOM" name="UOM" required>
											<option value="">Seleccione</option>
											<option value="v1" selected>Opción 1</option>
											<option value="v2">Opción 2</option>
											<option value="v2">Opción 3</option>
										</select>
										<label for="UOM">Select No Search<span>*</span></label>
									</div>
									<div class="input-group duplicated">
										<input class="input-date" id="fecha-inicio" type="text" required name="fecha-inicio">
										<span class="fa fa-calendar" aria-hidden="true"></span>
										<label for="fecha-inicio">Date Picker</label>
									</div>
									<div class="input-group duplicated">
										<input id="horario-inicio" type="text" class="form-control input-small timepicker" required>
										<span class="fa fa-clock-o" aria-hidden="true"></span>
										<label for="horario-inicio">Time Picker<span>*</span></label>
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
                ]
            });
        });
        </script>
</body>
>>>>>>> dac917821e6ad1f4da2dc2039154c6e44af06c8b
</html>