<?php include('header.php'); ?>
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
	<!-- <div class="layout-app">  -->
			<div class="innerLR spacing-x2">

	<h3>Evenements</h3>

	<!-- Row -->
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<!-- Widget -->
			<!-- CALENDAR START -->
			<div class="widget"><h4 class="bg-primary innerAll half border-bottom margin-none text-white">Evenement</h4>

				<div class="innerAll half bg-primary border-bottom">
					<div class="media innerAll half margin-none text-white">
						<div class="pull-left"><i class="fa fa-fw fa-calendar fa-3x "></i></div>
						<div class="innerAll text-center half pull-right">
							<div class="btn-group">
								<button class="btn btn-success"><i class="fa fa-fw fa-check"></i> Participe</button>
								<button class="btn btn-default">interessé</button>
							</div>
						</div>
						<div class="media-body"><p class="strong lead margin-none">22 DEC 2013</p>
							<p class="strong margin-none">1:00 - 5:00 pm</p></div>

					</div>
				</div>
				<div class="innerAll half bg-gray border-bottom">
					<div class="media innerAll half margin-none">
						<div class="pull-left"><i class="fa fa-fw fa-map-marker fa-3x"></i></div>
						<div class="media-body"><p class="strong lead margin-none">San Francisco</p>
							<p class="strong margin-none">California, USA</p></div>
					</div>
				</div>

			</div>


			<!-- // END CALENDAR -->
			<!-- Widget -->
			<div class="widget">
				<h4 class="innerAll half margin-none border-bottom">Cognitive Science and Design</h4>

				<div id="events-carousel" class="owl-carousel owl-theme">

					<div class="item">
						<div class="widget widget-pinterest">
							<div class="mark text-center">
								<span class="caret caret-primary"></span>
								<span class="text">Gratuit</span>
							</div>
							<div class="widget-body padding-none">
								<a href="product.html?lang=en" class="thumb"><img src="../assets/images/photodune-5765965-idea-concept-xs.jpg" alt="photo" class="img-responsive" /></a>
								<div class="description">

									<h5 class="text-uppercase">Beatae, pariatur, deleniti dolores nobis sint voluptatibus</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, aliquid, facere provident neque maiores modi quos suscipit maxime quod asperiores porro a iusto laboriosam consectetur perspiciatis corporis recusandae dicta alias.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="widget widget-pinterest">
							<div class="mark text-center">
								<span class="caret caret-default"></span>
								<span class="text">Free</span>
							</div>
							<div class="widget-body padding-none">
								<a href="product.html?lang=en" class="thumb"><img src="../assets/images/photodune-5557150-creative-head-xs.jpg" alt="photo" class="img-responsive" /></a>
								<div class="description">

									<h5 class="text-uppercase">Beatae, pariatur, deleniti dolores nobis sint voluptatibus</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, aliquid, facere provident neque maiores modi quos suscipit maxime quod asperiores porro a iusto laboriosam consectetur perspiciatis corporis recusandae dicta alias.</p>

								</div>
							</div>
						</div>
					</div>

				</div>









				<hr class="margin-none"/>
			</div>
			<!-- End Widget -->
			<!-- Widget -->
			<div class="widget col-sm-6">
				<h4 class="bg-inverse margin-none text-white innerAll half">Speakers</h4>
				<div id="events-speakers" class="owl-carousel owl-theme">

					<div class="item">
						<div class="widget widget-pinterest">
							<div class="widget-body padding-none">
								<a href="" class="thumb col-md-12"><img src="../assets/images/photodune-1949987-male-portrait-s.jpg" alt="photo" class="img-responsive" /></a>
								<div class="description col-md-12">
									<h5 class="text-uppercase">Speaker name</h5>
									<p class="strong">CEO, Company Inc.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="widget widget-pinterest">
							<div class="widget-body padding-none">
								<a href="" class="thumb col-md-12"><img src="../assets/images/photodune-1555340-indian-male-s.jpg" alt="photo" class="img-responsive" /></a>
								<div class="description col-md-12">
									<h5 class="text-uppercase">Speaker name</h5>
									<p class="strong">CEO, Company Inc.</p>
								</div>
							</div>
						</div>
					</div>

				</div>








				<!-- End Widget -->
			</div>
			<!-- End Col -->

			<!-- Widget -->
			<!-- FRIENDS INVITED START -->
			<div class="widget col-sm-6"><h4 class="border-bottom margin-none innerAll half">Friends</h4>
				<div class="border-bottom">
					<div class="innerAll half"><span class="badge bg-primary pull-right">215</span> Attending</div>
				</div>
				<div class="border-bottom">
					<div class="innerAll half"><span class="badge bg-white bordered border-primary pull-right text-primary">585</span> Might Go
					</div>
				</div>
				<div class="innerAll half text-center">
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/1.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/1.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/2.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/2.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/3.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/3.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/4.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/4.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/5.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/5.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/6.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/6.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/7.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/7.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/8.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/8.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/9.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/9.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/10.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/10.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/11.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/11.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/12.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/12.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/13.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/13.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
					<a href="#" class="border-none" data-toggle="image-preview" data-title="Lorem ipsum" data-image-preview="../assets/images/people/250/14.jpg" width="100" href="#"
					   class="pull-left border-none"> <img src="../assets/images/people/80/14.jpg" alt="photo" width="35" class="innerB half"></img>
					</a>
				</div>
			</div>
			<!-- // END FRIENDS INVITED -->

			<!-- End Widget -->

		</div>
		<!-- Col -->
		<div class="col-md-12 col-lg-12">

			
			<!-- widget -->
			<!-- COMPANY START -->
<div class=" widget media innerAll half">
    <div class="pull-left innerT"><img data-src="holder.js/50x50/dark" alt="" class="img-responsive img-circle"/></div>
    <div class="media-body">
        <div class="pull-right innerAll half">
            <div class="btn-group-vertical btn-group-sm"><a href="#" class="btn btn-inverse">Follow</a> <a href="#"
                                                                                                           class="btn btn-default margin-none">Contact</a>
            </div>
        </div>
        <div class="innerAll half media  margin-none">
            <div class="pull-left innerAll half"><p class="strong margin-none">Company, Inc</p>
                <p>Official Organizer</p></div>
            <div class="media-body border-left innerLR"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Illum, dicta, odio id cumque voluptates debitis asperiores. Dolorum, quod, cupiditate.
            </div>
        </div>
    </div>
</div>


<!-- // END COMPANY -->
		<!-- End Col -->
		</div>
						

		<!-- Col -->
		<div class="col-md-12 col-lg-12">
			
			<!-- Widget -->
			<!-- SCHEDULE START -->
<div class="widget"><h4 class="innerAll half margin-none border-bottom">Schedule</h4>
    <ul class="list-unstyled timeline-appointments margin-none bg-gray">
                                <li>
                <div class="time">1:00                    <span class="text-primary">pm</span></div>
                    <i class="fa fa-dot-circle-o text-primary dot"></i>

                <div class="appointments">
                                            <ul class="list-unstyled">
                            <li>
                                <div class="apt"><a href="" class="text-regular strong">Chris Hughes</a><br/>Co-founder
                                    of Facebook
                                </div>
                            </li>
                        </ul>
                                                                                                </div>
            </li>
                                <li>
                <div class="time">3:00                    <span class="text-primary">pm</span></div>
                    <i class="fa fa-dot-circle-o text-primary dot"></i>

                <div class="appointments">
                                                                <ul class="list-unstyled">
                            <li>
                                <div class="apt"><a href="" class="text-regular strong">Elon Musk</a><br/>CEO &amp; CTO
                                    of SpaceX
                                </div>
                            </li>
                        </ul>
                                                                            </div>
            </li>
                                <li>
                <div class="time">5:00                    <span class="text-primary">pm</span></div>
                    <i class="fa fa-dot-circle-o text-primary dot"></i>

                <div class="appointments">
                                                                                                        <ul class="list-unstyled">
                            <li class="text">
                                <div class="strong text-regular">Just a note</div>
                                Lorem ipsum dolor sit amet<br/>&nbsp;
                            </li>
                        </ul>
                                    </div>
            </li>
            </ul>
</div>
<!-- // END SCHEDULE -->




			<!-- Widget -->
			<!-- DISCUSSIONS START -->
<div class="widget">
    <div class="innerAll half border-bottom"><a href="" class="btn btn-primary btn-xs pull-right">
            <i class="fa fa-plus-circle"></i></a>
        <h4 class="margin-none padding-none"> Discussions</h4></div>
    <div class="media innerAll half border-bottom margin-none"><a href="" class="pull-left"><img src="../assets/images/people/35/16.jpg" alt="people" class="img-responsive img-circle"/></a>
        <div class="media-body">
            <small class="strong pull-right">3 hours ago</small>
            <h5>Reinald Lothair</h5>
            <p class="label label-info">Event Organizer</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem, ad, aut amet quis sapiente
                architecto ut corrupti molestiae.</p><button type="button" class="btn btn-primary btn-xs">J'aime</button> <button type="button" class="btn-danger btn-xs">J'aime pas</button><button type="button" class="btn btn-warning btn-xs">Commenter</button><button type="button" class="btn btn-warning btn-xs">partager</button></div>
    </div>
    <div class="media innerAll half bg-gray border-bottom margin-none"><a href="" class="pull-left"><img src="../assets/images/people/35/15.jpg" alt="people" class="img-responsive img-circle"/></a>
        <div class="media-body">
            <small class="strong pull-right">5 hours ago</small>
            <h5>Janele Sara</h5>
            <p class="label label-success">Speaker</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem, ad, aut amet quis sapiente architecto ut corrupti molestiae.</p><button type="button" class="btn btn-primary btn-xs">J'aime</button> <button type="button" class="btn-danger btn-xs">J'aime pas</button><button type="button" class="btn btn-warning btn-xs">Commenter</button><button type="button" class="btn btn-warning btn-xs">partager</button></div>
    </div>
    <div class="media innerAll half margin-none"><a href="" class="pull-left"><img src="../assets/images/people/35/17.jpg" alt="people" class="img-responsive img-circle"/></a>
        <div class="media-body">
            <small class="strong pull-right">8 hours ago</small>
            <h5>Tracie Fedelmid</h5>
            <p class="label label-danger">Attendee</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, dolorem, ad, aut amet quis sapiente
                architecto ut corrupti molestiae.</p><button type="button" class="btn btn-primary btn-xs">J'aime</button> <button type="button" class="btn-danger btn-xs">J'aime pas</button><button type="button" class="btn btn-warning btn-xs">Commenter</button><button type="button" class="btn btn-warning btn-xs">partager</button>
        </div>
    </div>
</div>

<!-- // END DISCUSSIONS -->
		<!-- End Col -->	
		</div>

	<!--  End Row -->
	</div>
<!-- End Inner -->
</div>


	
		
				
		</div>
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