<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YPF Style | Components</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
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
								<strong>Esto es una notificación del sistema</strong>
								Esto es una aclaración de la notificación que arroja el sistema
							</p>
						</div>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación del sistema</strong>
								Esto es una aclaración de la notificación que arroja el sistema
							</p>
						</div>
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación del sistema</strong>
								Esto es una aclaración de la notificación que arroja el sistema
							</p>
						</div>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<p>
								<strong>Esto es una notificación del sistema</strong>
								Esto es una aclaración de la notificación que arroja el sistema
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
							<div class="group">
								<h4>Filled Buttons</h4>
								<h5>Normal</h5>
								<button class="btn btn-primary">button</button>
								<button class="btn btn-success">button</button>
								<button class="btn btn-warning">button</button>
								<button class="btn btn-danger">button</button>
								<button class="btn btn-neutral">button</button>
								<h5>Disabled</h5>
								<button class="btn btn-primary disabled">button</button>
								<button class="btn btn-success disabled">button</button>
								<button class="btn btn-warning disabled">button</button>
								<button class="btn btn-danger disabled">button</button>
								<button class="btn btn-neutral disabled">button</button>
							</div>
							<div class="group">
								<h4>Outlined Buttons</h4>
								<h5>Normal</h5>
								<button class="btn btn-ghost-primary">button</button>
								<button class="btn btn-ghost-success">button</button>
								<button class="btn btn-ghost-warning">button</button>
								<button class="btn btn-ghost-danger">button</button>
								<button class="btn btn-ghost-neutral">button</button>
								<h5>Disabled</h5>
								<button class="btn btn-ghost-primary disabled">button</button>
								<button class="btn btn-ghost-success disabled">button</button>
								<button class="btn btn-ghost-warning disabled">button</button>
								<button class="btn btn-ghost-danger disabled">button</button>
								<button class="btn btn-ghost-neutral disabled">button</button>
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
								<h3>Icons</h3>
							</div>
						</div>
						<div class="card-body">
							<div class="icons">
								<div class="col-lg-4">
									<!-- System -->
									<h4>System</h4>
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
									<h4>Notifications</h4>
									<p><span class="fa fa-ban"></span>Disabled</p>
									<p><span class="fa fa-times-circle"></span>Error</p>
									<p><span class="fa fa-exclamation"></span>Warning</p>
									<p><span class="fa fa-check"></span>Succes/Validated</p>

									<!--Actions -->
									<h4 class="margin-top-10">Actions</h4>
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
									<h4>Inputs</h4>
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
									<h4>Checkbox</h4>
									<h5>Label text</h5>
									
									<input type="checkbox" class="custom-checkbox" name="check-a" id="checkbox-example-1">
									<label for="checkbox-example-1">Option 1</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-b" id="checkbox-example-2">
									<label for="checkbox-example-2">Option 2</label>
									
									<input type="checkbox" class="custom-checkbox" name="check-c" id="checkbox-example-3">
									<label for="checkbox-example-3">Option 3</label>
								</div>

								<div class="radio-button">
									<h4>Radio Button</h4>
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
			</div>
			<div class="row">
				<!-- INPUTS -->
				<div class="col-lg-12">
					<div class="card">
						<div class="card-title">
							<h3>Inputs</h3>
						</div>
						<div class="card-body">
							<div class="col-lg-3">
								<h4>Normal + Focused + Completed</h4>
								<p>
									El nombre del campo en estado normal se colocará como si fuera un placeholder. Cuando el campo sea obligatorio, será identificado con un asterisco anaranjado.<br><br>
									Cuando el usuario se posicione en el campo, el nombre del campo pasará a tener un cuerpo de 14px y a ubicarse por  arriba del input.  Si el campo requiriera una ayuda/aclaración extra para ser completado, se ubicará debajo de la línea del campo.<br><br>
									Cuando el usuario haya terminado de completar el campo con la información correspondiente, el nombre del campo se colocará por arriba del espacio, y la información ingresada quedará en su lugar.
								</p>
								<div class="input-group">
									<input id="input-example" type="text" required name="example">
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
								<div class="input-group">
									<input id="input-example" type="text" required name="example">
									<span class="fa fa-tag" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
							</div>
							<div class="col-lg-3">
								<h4>Validated</h4>
								<p>
									Cuando el usuario haya terminado de completar el input y el mismo sea validable y validado, si el input no tiene ícono en la parte derecha, se colocará un tilde y se pintarán la línea, el ícono y el label de verde. Si el input tiene ícono, el mismo también se pintará de azul.
								</p>
								<div class="input-group validated">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-check" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
								<div class="input-group validated">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-tag" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
							</div>
							<div class="col-lg-3">
								<h4>Error</h4>
								<p>
									Cuando el usuario haya terminado de completar el campo  y la información ingresada no sea correcta o el campo esté incompleto, si no tiene ícono en la parte derecha, se colocará una cruz dentro de un círculo y se pintarán tanto la línea, el ícono y el label de púrpura. Si el input tiene ícono se pintará de púrpura. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender y corregir el error.
								</p>
								<div class="input-group error">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-times-circle" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
								<div class="input-group error">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-tag" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
							</div>
							<div class="col-lg-3">
								<h4>Warning</h4>
								<p>
									Cuando el usuario haya terminado de completar el campo y por un motivo u otro el usuario deba prestar atención al mismo, si no tiene ícono en la parte derecha, se colocará un signo de admiración y se pintarán tanto la línea, el ícono y el label de naranja. Si el input tiene ícono se pintará de naranja. Además, por debajo de la línea del input se colocará un mensaje de ayuda para que el usuario pueda comprender lo que tiene que hacer.
								</p>
								<div class="input-group warning">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-exclamation" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
								<div class="input-group warning">
									<input id="input-example" type="text" required name="example" value="Information entered">
									<span class="fa fa-tag" aria-hidden="true"></span>
									<label for="input-example">Label<span>*</span></label>
									<p>This is a help text</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php';?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>
		$('#laytime-tab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>
</body>
</html>