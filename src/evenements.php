<?php include('header.php'); ?>

        <!-- <div class="layout-app">  -->
        <div class="col-md-9">
            <div class="widget">

                <!-- Category Heading -->
                <!-- Button trigger modal -->

                <br></br>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Crée un nouveau evenement
                </button>
                <br></br>
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

                <h4 class="margin-none">evenement</h4>
                <div class="clearfix"></div>
            </div>
            <!-- End Category Heading -->

            <!-- Category Listing -->
            <div class="bg-gray-hover overflow-hidden">
                <div class="row innerAll half border-bottom">
                    <div class="col-sm-6 col-xs-8">
                        <ul class="media-list margin-none">
                            <li class="media">
                                <a class="pull-left innerAll half " href="#">
                                    <span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
                                </a>
                                <div class="media-body">
                                    <div class="innerAll half">
                                        <h4 class="margin-none"><a href="evenement.page.html" class="media-heading strong text-primary">evenement 1</a></h4>
                                        <div class="clearfix"></div>
                                        <small class="margin-none">informations sur l'evenement</small>
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
                                <a class="pull-left innerAll half " href="#">
                                    <span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
                                </a>
                                <div class="media-body">
                                    <div class="innerAll half">
                                        <h4 class="margin-none"><a href="evenement.page.html" class="media-heading strong text-primary">evenement 2</a></h4>
                                        <div class="clearfix"></div>
                                        <small class="margin-none">Informations sur l'evenement</small>
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
                                <a class="pull-left innerAll half " href="#">
                                    <span class="empty-photo"><i class="fa fa-folder fa-2x text-muted"></i></span>
                                </a>
                                <div class="media-body">
                                    <div class="innerAll half">
                                        <h4 class="margin-none"><a href="evenement.page.html" class="media-heading strong text-primary">evenement 3</a></h4>
                                        <div class="clearfix"></div>
                                        <small class="margin-none">informations sur le l'evenement</small>
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