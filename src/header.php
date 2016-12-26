<?php
session_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if gt IE 8]> <html class="ie paceCounter paceSocial sidebar sidebar-social footer-sticky"> <![endif]-->
<!--[if !IE]><!--><html class="paceCounter paceSocial sidebar sidebar-social footer-sticky"><!-- <![endif]-->
<head>
	<title>Social Admin Template (v2.0.0-rc8)</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.stylesheet-complete.less" />
	-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

		<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	
		<link rel="stylesheet" href="../assets/css/admin/module.admin.stylesheet-complete.min.css" />
	<link rel="stylesheet" href="css/layout.css">
	
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="../assets/plugins/core_ajaxify_loadscript/script.min.js?v=v2.0.0-rc8&sv=v0.0.1.2"></script>

	<style>
		.innerLR {
			padding-top: 70px;
		}
	</style>
<script>var App = {};</script>

<script data-id="App.Scripts">
App.Scripts = {

	/* CORE scripts always load first; */
	core: [
		'../assets/library/jquery/jquery.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/library/modernizr/modernizr.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* PLUGINS_DEPENDENCY always load after CORE but before PLUGINS; */
	plugins_dependency: [
		'../assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/maps_google/maps-google.init.js?v=v2.0.0-rc8&sv=v0.0.1.2'
	],

	/* PLUGINS always load after CORE and PLUGINS_DEPENDENCY, but before the BUNDLE / initialization scripts; */
	plugins: [
		'../assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/menu_sidr/jquery.sidr.js?v=v2.0.0-rc8',
		'../assets/plugins/media_holder/holder.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/media_gridalicious/jquery.gridalicious.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps', 
		'../assets/plugins/ui_modals/bootbox.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/other_mixitup/jquery.mixitup.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc8&sv=v0.0.1.2',
        '../assets/plugins/forms_elements_jasny-fileupload/js/bootstrap-fileupload.js?v=v2.0.0-rc8&sv=v0.0.1.2',

    ],

	/* The initialization scripts always load last and are automatically and dynamically loaded when AJAX navigation is enabled; */
	bundle: [
		'../assets/components/widget_twitter/twitter.init.js?v=v2.0.0-rc8&sv=v0.0.1.2', 
		'../assets/components/media_gridalicious/gridalicious.init.js?v=v2.0.0-rc8', 
		'../assets/components/menus/sidebar.main.init.js?v=v2.0.0-rc8', 
		'../assets/components/menus/sidebar.collapse.init.js?v=v2.0.0-rc8', 
		'../assets/components/menus/menus.sidebar.chat.init.js?v=v2.0.0-rc8',
		'../assets/plugins/other_mixitup/mixitup.init.js?v=v2.0.0-rc8&sv=v0.0.1.2',
		'../assets/components/core/core.init.js?v=v2.0.0-rc8'
	]

};
</script>

<script>
$script(App.Scripts.core, 'core');

$script.ready(['core'], function(){
	$script(App.Scripts.plugins_dependency, 'plugins_dependency');
});
$script.ready(['core', 'plugins_dependency'], function(){
	$script(App.Scripts.plugins, 'plugins');
});
$script.ready(['core', 'plugins_dependency', 'plugins'], function(){
	$script(App.Scripts.bundle, 'bundle');
});
</script>
	<script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>
	
</head>
<body class=" scripts-async menu-right-hidden">
<div class="modal fade" id="myModalpage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">pages</h4>
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
			<div class="modal-body">
			<div class="form-group">
				<label for="usr">Nom:</label>
				<input type="text" class="form-control" id="usr">
			</div>
			<div class="form-group">
				<label for="comment">Description:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
			<button type="button" class="btn btn-primary">Crée</button>
		</div>
		
		
		</div>
	</div>

</div>
	<!-- Main Container Fluid -->
	<div class="container-fluid menu-hidden ">

						<!-- Main Sidebar Menu -->
		<div id="menu" class="hidden-print hidden-xs sidebar-default sidebar-brand-primary">

			
<div id="sidebar-social-wrapper">
	<div id="brandWrapper">
		<a href="index.php"><span class="text">Social Admin Template</span></a>
	</div>
	<ul class="menu list-unstyled">
					<li class="hasSubmenu">

								<a href="#menu-9f002edc828dfa94ba9784abd4bcf68a" data-toggle="collapse">
				
				
								<i class="icon-tv"></i>
				
								<span>Groupes</span>
				
				
				</a>
								<ul class="collapse" id="menu-9f002edc828dfa94ba9784abd4bcf68a">
								<li class="">

								<a href="groupe.php" class="no-ajaxify">
				
				
								<i class="fa fa-circle-o"></i>
				
								<span>Liste des groupes</span>
				
				
				</a>
				
			</li>
						
									<li class="">

										<a href="#" data-toggle="modal" data-target="#myModal">


											<i class="fa fa-clock-o"></i>

											<span>Créer un Groupe</span>


										</a>

									</li>
							</ul>
				
			</li>
						<li class="hasSubmenu active">

								<a href="#menu-493741186fa2d0375ca6c00daa171d92" data-toggle="collapse">
				
				
								<i class="icon-ship-wheel"></i>
				
								<span>Evenements</span>
				
				
				</a>
								<ul class="collapse in" id="menu-493741186fa2d0375ca6c00daa171d92">
								<li class="active">

								<a href="events.php" >
				
				
								<i class="fa fa-clock-o"></i>
				
								<span>Liste des évennements</span>
				
				
				</a>
				
			</li>
						
						<li class="">

							<a href="#" data-toggle="modal" data-target="#myModalevent">


								<i class="fa fa-clock-o"></i>

								<span>Crée un evenement</span>


							</a>
				
			</li>
							</ul>
				
			</li>
						<li class="hasSubmenu">

								<a href="#menu-410f773abf9382432e23ba9f500a35e7" data-toggle="collapse">
				
				
								<i class="icon-flip-camera-fill"></i>
				
								<span>Pages</span>
				
				
				</a>
								<ul class="collapse" id="menu-410f773abf9382432e23ba9f500a35e7">
								<li class="">

								<a href="liste.pages.php">
				
				
								<i class="fa fa-camera"></i>
				
								<span>Liste des pages</span>
				
				
				</a>
				
			</li>
						
						<li class="">

							<a href="#" data-toggle="modal" data-target="#myModalpage">


								<i class="fa fa-clock-o"></i>

								<span>Crée une page</span>


							</a>
				
			</li>
							</ul>
				
			</li>



				
				
				
				

				</ul>
</div>





			
		</div>
		<!-- // Main Sidebar Menu END -->
				
		
		

<div id="menu-right">
	<div>
		<button class="btn btn-inverse btn-xs btn-close" data-toggle="sidr-close" data-menu="menu-right"><i class="fa fa-times"></i></button>

		<div class="tab-content">
			<div class="tab-pane" id="chat-conversation">
				<ul>
					<li>
						<div class="innerAll"><button class="btn btn-primary" data-toggle="tab" data-target="#chat-list"><i class="fa fa-fw fa-user"></i> friends</button></div>
					</li>
					<li class="conversation innerAll">
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Jane Doe</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>just now</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, sit?</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media primary right">
							<small class="author"><a href="#" title="" class="strong">John Doe</a></small>
							<div class="media-object pull-right"><img src="../assets/images/people/50/2.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote class="pull-right">
									<small class="date"><cite>15 seconds ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, molestiae!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
						
						<!-- Media item -->
						<div class="media">
							<small class="author"><a href="#" title="" class="strong">Ricky</a></small>
							<div class="media-object pull-left"><img src="../assets/images/people/50/1.jpg" alt="Image" class="img-circle" /></div>
							<div class="media-body">
								<blockquote>
									<small class="date"><cite>5 minutes ago</cite></small>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, distinctio!</p>
								</blockquote>
							</div>
						</div>
						<!-- // Media item END -->
					</li>
				</ul>
			</div>
			
			<div class="tab-pane active" id="chat-list">
				<div class="mixitup" id="mixitup-chat" data-show-default="mixit-chat-1" data-layout-mode="list" data-target-selector=".mix" data-filter-selector=".filter-chat">
					<ul>
						<li class="category">Groups</li>
						<li class="reset">
							<div class="innerLR">
								<ul>
									<li class="filter-chat" data-filter="mixit-chat-1"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-success"></span> Work Related</a></li>
									<li class="filter-chat" data-filter="mixit-chat-2"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-primary"></span> Very Important</a></li>
									<li class="filter-chat" data-filter="mixit-chat-3"><a href="" class="no-ajaxify"><span class="fa fa-fw fa-circle-o text-info"></span> Friends &amp; Family</a></li>
								</ul>
							</div>
						</li>
						<li class="category border-bottom">Online</li>
						<li>
							
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/1.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Perpetua Inger</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/2.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoticus Axel</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/3.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Yun Ragna</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/4.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Victor Tacitus</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-1 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/5.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Arden Catharine</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/6.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mihovil Govinda</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/7.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Mariya Hadya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/8.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Tahir Benedikt</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/9.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Olayinka Kristin</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-2 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/10.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Danko Nikodim</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/11.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Zoja Aileas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/12.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Alphonsus Braidy</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/13.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Helene Liana</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/14.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Sebastian Niklas</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class="mixit-chat-3 mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/15.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Elvire Maya</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
																					<div class=" mix media border-bottom innerAll margin-none">
								<a href="#chat-conversation" data-toggle="tab" class="pull-left media-object"><img src="../assets/images/people/35/16.jpg" class="img-circle" /></a>
								<div class="media-body">
									<a href="#chat-conversation" data-toggle="tab" class="pull-right text-muted innerT half">
										<i class="fa fa-comments"></i> 4
									</a>
									<h5 class="margin-none"><a href="#chat-conversation" data-toggle="tab" class="text-white">Kerman Otakar</a></h5>
									<small>Hey, the party is on tonight!</small>
								</div>
							</div>
							
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>







		
		<!-- Content START -->
		<div id="content">
			<div class="navbar hidden-print navbar-default box main" role="navigation">

				<div class="user-action user-action-btn-navbar pull-right border-left">
					<a href="#menu-right" class="btn btn-sm btn-navbar btn-open-right"><i class="fa fa-comments fa-2x"></i></a>
					<div id="chat-notification" data-menu="menu-right" data-toggle="sidr-open" style="display: block;">New message from <strong>Mr.Awesome</strong></div>
					</div>
				<div class="user-action user-action-btn-navbar pull-left">
					<a href="#menu" class="btn btn-sm btn-navbar btn-open-left"><i class="fa fa-bars fa-2x"></i></a>
				</div>

				<ul class="notifications pull-right hidden-xs">
					<li class="dropdown notif">
						<a href="parametres.php" class="dropdown-toggle dropdown-hover"><i class="notif-block glyphicon glyphicon-cog"></i><span class="fa fa-star"></span></a>
						
					</li>
				</ul>

				<ul class="notifications pull-right hidden-xs">
					<li class="dropdown notif">
						<a href="" class="dropdown-toggle dropdown-hover" data-toggle="dropdown"><i class="notif-block icon-envelope-1"></i><span class="fa fa-star"></span></a>
						<ul class="dropdown-menu chat media-list">
							<li class="media">
								<a class="pull-left" href="#">Messages</a>
								
							</li>
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/15.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">5 min</span>
									<h5 class="media-heading">Adrian D.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/16.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">2 days</span>
									<h5 class="media-heading">Jane B.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/17.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">3 days</span>
									<h5 class="media-heading">Andrew M.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="notifications pull-right hidden-xs">
					<li class="dropdown notif">
						<a href="" class="dropdown-toggle dropdown-hover" data-toggle="dropdown"><i class="notif-block glyphicon glyphicon-globe"></i><span class="fa fa-star"></span></a>
						<ul class="dropdown-menu chat media-list">
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/15.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">5 min</span>
									<h5 class="media-heading">Adrian D.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/16.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">2 days</span>
									<h5 class="media-heading">Jane B.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
							<li class="media">
								<a class="pull-left" href="#"><img class="media-object thumb" src="../assets/images/people/100/17.jpg" alt="50x50" width="50"></a>
								<div class="media-body">
									<span class="label label-default pull-right">3 days</span>
									<h5 class="media-heading">Andrew M.</h5>
									<p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</li>
						</ul>
					</li>
				</ul>


				<div class="user-action pull-right menu-right-hidden-xs menu-left-hidden-xs border-left">
					<div class="dropdown username pull-left">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="media margin-none">
					<span class="pull-left"><img src="../assets/images/people/35/16.jpg" alt="user" class="img-circle"></span>
					<span class="media-body"><?php print_r($_SESSION['PRENOM_USER']) ; ?> <span class="caret"></span></span>
				</span>
			</a>
			<ul class="dropdown-menu">

				<li><a href="profile.php">Profile</a></li>
				<li><a href="about_1.php" >About</a></li>
				<li><a href="media_3.php">Photos</a></li>
				<li><a href="social/login.php">Déconnexion</a></li>
		    </ul>
		</div>
				</div>
                <form method="GET" action="search.php">
				<div class="input-group hidden-xs" id="search-navbar">
					<span class="input-group-addon"><i class="icon-search"></i></span>
					<input type="text" class="form-control" placeholder="Search a friend" name="search">
				</div>
                </form>
			</div>
		