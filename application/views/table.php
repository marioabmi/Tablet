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
						<li><a href="<?php echo base_url().'direccion/'; ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="<?php echo base_url().'direccion/tablet'; ?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>						
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
						<a href="<?php echo base_url().'direccion/index';?>">Home</a>					
					</li>
				
				</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-content">
						<picture>
  							<source
    							media="(min-width: 650px)"
    							srcset="<?php echo base_url().'seteo/logo/multi1.png'; ?>">
  							<source
    							media="(min-width: 465px)"
    							srcset="<?php echo base_url().'seteo/logo/multi.png'; ?>">
  							<img
    							src="<?php echo base_url().'seteo/logo/multi.png'; ?>"
    							alt="a cute kitten">
							</picture>						           
					</div>
				</div><!--/span-->			
			</div><!--/row-->
		</div>
	
			<div class="clearfix"></div>			