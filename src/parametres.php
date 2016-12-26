<?php
include 'header.php';


?>

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
            <form action="classes/edit_user.php" method="POST">
                <div class="form-group" >
                    <label for="email">Nom:</label>
                    <input name="nom" type="text" class="form-control" id="nom" value="<?php echo $_SESSION['NOM_USER']; ?>">
                </div>
                 <div class="form-group">
                    <label for="email">Prenom:</label>
                    <input name="prenom" type="text" class="form-control" id="prenom" value="<?php echo $_SESSION['PRENOM_USER']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Addresse Email:</label>
                    <input name="mail" type="email" class="form-control" id="email" value="<?php echo $_SESSION['MAIL_USER']; ?>">
                </div>
                 <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input name="password" type="password" class="form-control" id="pwd" value="<?php echo $_SESSION['MOTPASSE_USER'] ; ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Changer mot de passe:</label>
                    <input name="newpassword" type="password" class="form-control" id="pwd" name="new_pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Confirmer la nouvelle mot de passe:</label>
                    <input name="confirmpassword" type="password" class="form-control" id="pwd" name="new_pwd">
                </div>
                <div>
                    <div class="input-field">
                        <input type="radio" id="test1" name="genre" value="homme" <?php if ($_SESSION["GENRE_USER"] == "homme") { echo "checked ='checked'"; }  ?>  />
                        <label for="test1">Homme</label>

                        <?php

                        ?>

                        <input type="radio" id="test2" name="genre" value="femme" <?php if ($_SESSION["GENRE_USER"] == "femme") { echo "checked ='checked'"; }  ?>/>
                        <label for="test2">Femme</label>
                    </div>
                    <div class="input-field">
                        <input type="date" class="datepicker" id="datenaiss" name="datenais" value="<?php echo $_SESSION['DATENAISSANCE_USER'] ; ?>">
                        <label for="datenaiss">Date de Naissance</label>
                    </div>
                  <input name="etat" type="checkbox" id="desactiver-compte" />
                  <label for="desactiver-compte">Desactiver votre compte</label>
                </div>

                <button type="submit" class="btn btn-default">Enregistrer</button>
            </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
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