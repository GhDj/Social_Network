<?php include('header.php'); ?>

        <!-- <div class="layout-app">  -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- // END col-separator -->

    <div class="innerAll">
        <div class="row">
            <div class="col-lg-9 col-md-8">

                <div class="timeline-cover">
                    <div class="widget border-bottom">

                        <div class="widget-body border-bottom">
                            <div class="media">
                                <div class="pull-left innerAll">
                                    <img src="../assets/images/people/100/22.jpg" alt="" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h5><a href="">Nom de l'Evenement</a> <a href=""><i class="fa fa-envelope"></i></a></h5>
                                    <div class="clearfix"></div>
                                    <p>Description de l'Evenement.</p>
                                    <a href="" class="btn btn-info btn-sm">
                                        <i class="icon-turn-right"></i> Intéressé
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <ul class="navigation">
                                <li class="active"><a class="" href="timeline_3.html?lang=en"><i class="fa fa-fw icon-road-sign"></i><span> Postes</span></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <!-- 		<nav class="navbar widget-head padding-none margin-none" role="navigation">

                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
                                        <span>Choose menu </span>
                                        <i class="fa fa-bars "></i>

                                      </button>
                                    </div>
                                    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-3" style="height: 1px;">
                                        <div class="padding-none">
                                            <ul class="display-block">
                                                <li class="active"><a class="" href="timeline_3.html?lang=en"><i class="fa fa-fw icon-road-sign"></i> <span>Timeline</span></a></li>
                                                <li><a href="media_3.html?lang=en"><i class="fa fa-fw icon-flip-camera"></i> <span>Photos</span></a></li>
                                                <li><a href="contacts_3.html?lang=en"><i class="fa fa-fw icon-group"></i> <span>Friends</span></a></li>
                                                <li><a href="messages.html?lang=en"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span></a></li>
                                                <li class="pull-right"><a href="about_3.html?lang=en"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </nav>
                         -->





                    </div>


                </div>



                <div class="media">
                    <a href="" class="btn btn-default pull-left">Today</a>
                    <div class="media-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Ecrire un poste...">
                            <span class="input-group-btn">
		        <button class="btn btn-primary" type="button">Validée</button>
		      </span>
                        </div><!-- /input-group -->
                    </div>
                </div>

                <ul class="timeline-activity list-unstyled">


                    <li>
                        <span class="marker"></span>

                    </li>


                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Crée un nouveau evenement</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="usr">Name:</label>
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Description de l'evenement:</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">annulé</button>
                                    <button type="button" class="btn btn-primary">Crée!</button>
                                </div>
                            </div>
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