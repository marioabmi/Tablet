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
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url().'home/';?>">Home</a>					
				</li>				
			</ul>
						<div class="widget span11" onTablet="span11" onDesktop="span11">

							<button type="submit" onclick=location="<?php echo base_url().'direccion/producto';?>" class="btn btn-primary">Agregar Productos</button>
							<button type="submit" class="btn btn-primary">Pagar</button>
						</div><!--/span-->

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Pedidos</h2>
						<div class="box-icon">								
						</div>
					</div>					
					<div class="box-content">

						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Nombre Cliente</th>
								  <th>Producto</th>
								  <th>Codigo</th>
								  <th>Cantidad</th>
								 
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php foreach ($carrito as $carrito_var): ?>
								<td><?=$carrito_var->nombre ?></td>
								<td class="center"><?=$carrito_var->nombre?></td>
								<td class="center"><?=$carrito_var->codigo?></td>
								<td class="center">
									<span class="label label-success"><?=$carrito_var->cantidad?></span>
								</td>
								<td class="center">
									<a class="btn btn-danger" href="#">
										<button type="button" onclick=location="<?php echo base_url().'direccion/editar/'.$carrito_var->idProducto; ?>" class="btn btn-primary" ><i class="halflings-icon white trash"></i> </button>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
						  </tbody>
					  </table>
					  </div> 
					  
				</div><!--/span-->
			
			</div><!--/row-->
			</div>
