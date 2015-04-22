<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Tablet</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">						

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $usuario; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span> Cuenta</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?php echo base_url().'home/logout'; ?>"><i class="halflings-icon off"></i> Salir</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url().'home/'; ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> inicio</span></a></li>	
						<li><a href="<?php echo base_url().'direccion/form'; ?>"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Pedidos</span></a></li>						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url().'home/';?>">Home</a>					
				</li>				
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2></i><span class="break"></span>Cliente</h2>
						<div class="box-icon">

						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="selectError">Cliente</label>
								<div class="controls">
								  <select required="required" data-rel="chosen" id="categoria">
                  					<option value='Varios'  selected> Selecciona Cliente</option>
                						<?php 
                  							foreach($cliente as $fila)
                  							{
                						?>
                  							<option value="<?=$fila -> idCliente ?>"><?=$fila -> nombre ?></option>
                						<?php
                  							}
                						?>        
                							</select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="selectError">Sucursal</label>
								<div class="controls">
								  <select data-rel="chosen" id="categoriaB">
                  					<option value=''  selected> Seleccionar Sucursal</option>
                						<?php 
                  							foreach($sucursal as $fila)
                  							{
                						?>
                  							<option value="<?=$fila -> idSucursal ?>"><?=$fila -> nombre ?></option>
                						<?php
                  							}
                						?>        
                							</select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Pagar</button>
								<button type="submit" onclick=location="<?php echo base_url().'direccion';?>" class="btn btn-primary">Cancelar</button>								
							  </div>						  

							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><span class="break"></span>Productos</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Codigo</th>
								  <th>Nombre</th>
								  <th>Descripcion</th>
								  <th>Existencia</th>
								  <th>Prc Mayoreo</th>
								  <th>Prc Preferencial</th>
								  <th>Prc Detalle</th>
								  <th>Equivalencia1</th>
								  <th>Equivalencia2</th>
							  </tr>
						  </thead>   
						 
						  	<tbody id = "cuerpo">
                                            
                                            
                            </tbody>
							

					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		</div>