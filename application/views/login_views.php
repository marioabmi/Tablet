<body>
		<style type="text/css">
			body { background: url(<?php echo base_url().'seteo/logo/fondo.jpg';?>) !important; }
		</style>	
		<div class="container-fluid-full">
			<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<center>
							<a>
							<h1 aling="center">Sisteme de Ventas Multirepuesto</h1>
							</a>
						</center>											
					</li>
				
				</ul>

			<div class="row-fluid">					
				<div class="row-fluid">
					<div class="login-box">
					<center>
					<h1 aling="center">Accede a tu Cuenta</h1>
					</center>
						<?php echo validation_errors(); ?>
   						<?php echo form_open('verificarlogin'); ?>
   						<form class="form-horizontal">					
						<fieldset>
							
							<div class="input-prepend" title="Usuario">								
								<span class="add-on"><i class="halflings-icon user"></i></span>								
								<input class="input-large span10" name="usuario"  id="usuario" type="text" placeholder="Ingrese un Usuario"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Clave">								
								<span class="add-on"><i class="halflings-icon lock"></i></span>								
								<input class="input-large span10" name="clave"  id="clave" type="password" placeholder="Ingrese su Contraseña"/>
							</div>
							<div class="clearfix"></div>							

							<div class="button-login" aling="center">
									
								<button type="submit" class="btn btn-primary">Login</button>
								
							</div>
							<div class="clearfix"></div>
						</div>
				</div><!--/span-->
			</div><!--/row-->
	</div><!--/.fluid-container-->
</body>