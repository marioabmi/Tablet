<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">					
					<h2>Accede a tu Cuenta</h2>
						<?php echo validation_errors(); ?>
   						<?php echo form_open('verificarlogin'); ?>					
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

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>					

			</div><!--/row-->
			

			</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	

</body>