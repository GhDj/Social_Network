<?php include('header.php') ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">groups</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="usr">Nom:</label>
					<input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
					<label for="comment">Description:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">annulé</button>
				<button type="button" class="btn btn-primary">Crée</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModalevent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">events</h4>
			</div>
			<div class="form-group">
				<label for="usr">Nom:</label>
				<input type="text" class="form-control" id="usr">
			</div>
			<div class="form-group">
				<label for="comment">Description:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">annulé</button>
			<button type="button" class="btn btn-primary">Crée</button>
		</div>
	</div>
</div>
<div class="modal fade" id="myModalpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pages</h4>
			</div>
			<div class="form-group">
				<label for="usr">Nom:</label>
				<input type="text" class="form-control" id="usr">
			</div>
			<div class="form-group">
				<label for="comment">Description:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">annulé</button>
			<button type="button" class="btn btn-primary">Crée</button>
		</div>
	</div>
</div>
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">
<div class="innerLR">
	<h3>Groupes</h3>
	<div class="separator-h"></div>

	<!-- Search Bar -->


	<div class="separator-h"></div>
		
		<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Groupes</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Invitations</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="row">

		<div class="col-md-9">
			<div class="widget">

				<!-- Category Heading -->
				<div class="innerAll bg-gray border-bottom">
					<a href="#" class="btn btn-xs btn-inverse pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-fw"></i> Crée un groupe</a>
					<h4 class="margin-none">Liste des groupes</h4>
					<div class="clearfix"></div>
				</div>
				<!-- End Category Heading -->

				<!-- Category Listing -->
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 1</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description ici</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">101</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="" class="pull-left">
										<img src="../assets//images/people/35/2.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 2</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description du groupe</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">212</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="" class="pull-left">
										<img src="../assets//images/people/35/3.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 3</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description du groupe</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">323</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="" class="pull-left">
										<img src="../assets//images/people/35/4.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- // END Category Listing -->


			</div>

			<!-- // END col-separator -->
		</div>
		<!-- // END col -->

		<!-- col -->
		<div class="col-md-3">

			<!-- col-separator -->
			<div class="widget">


						
	</div>
	<!-- // END row -->

</div>	
		
				
		</div>
		</div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<div class="col-md-9">
			<div class="widget">

				<!-- Category Heading -->
				<div class="innerAll bg-gray border-bottom">
					<a href="#" class="btn btn-xs btn-inverse pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-fw"></i> Crée un groupe</a>
					<h4 class="margin-none">Liste des groupes</h4>
					<div class="clearfix"></div>
				</div>
				<!-- End Category Heading -->

				<!-- Category Listing -->
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 1</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description ici</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">101</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="" class="pull-left">
										<img src="../assets//images/people/35/2.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 2</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description du groupe</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">212</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="" class="pull-left">
										<img src="../assets//images/people/35/3.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-gray-hover overflow-hidden">
					<div class="row innerAll half border-bottom">
						<div class="col-sm-6 col-xs-8">
							<ul class="media-list margin-none">
								<li class="media">
									<a class="pull-left innerAll half " href="groupe.page.php">
										<span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
									</a>
									<div class="media-body">
										<div class="innerAll half">
											<h4 class="margin-none"><a href="groupe.page.php" class="media-heading strong text-primary">Groupe 3</a></h4>
											<div class="clearfix"></div>
											<small class="margin-none">Description du groupe</small>
										</div>

									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-4">
							<div class="text-center">
								<p class="lead strong margin-bottom-none">323</p>
								<span class="text-muted">POSTS</span>
							</div>
						</div>
						<div class="col-sm-3 col-xs-hidden">
							<div class="innerAll half">
								<div class="media">
									<a href="groupe.page.php" class="pull-left">
										<img src="../assets//images/people/35/4.jpg" class="media-object">
									</a>
									<div class="media-body">
										<a href="groupe.page.php" class="text-small">mosaicpro</a>
										<div class="clearfix"></div>
										<small>last replied</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- // END Category Listing -->


			</div>

			<!-- // END col-separator -->
		</div>
		<!-- // END col -->

		<!-- col -->
		<div class="col-md-3">

			<!-- col-separator -->
			<div class="widget">


						
	</div>
	<!-- // END row -->

</div>	
		
				
		</div>
    </div>
  </div>

</div>
		
	<!-- row -->
	<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
				<!-- Footer -->
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase Social Admin Template</a> - Current version: v2.0.0-rc8 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v2.0.0-rc8">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
				
	</div>
	<!-- // Main Container Fluid END -->


	<!-- Global -->
	<script data-id="App.Config">
		var basePath = '',
		commonPath = '../assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = '../assets/components/';
	
	var primaryColor = '#25ad9f',
		dangerColor = '#b55151',
		successColor = '#609450',
		infoColor = '#4a8bc2',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	
	var themerPrimaryColor = primaryColor;

		App.Config = {
		ajaxify_menu_selectors: ['#menu'],
		ajaxify_layout_app: false	};
		</script>
	
		
</body>
</html>