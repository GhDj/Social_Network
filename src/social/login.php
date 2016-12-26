<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Social Network</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-bg">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>


            </div>
        </nav>
        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row" id="home-page">
                    <div class="col s12" >
                        <h2>
                            Welcome to your social network
                        </h2>
                        <div class="col s12 m6">
                        <a class="waves-effect waves-light btn blue" href="#modal1"><i class="material-icons left">cloud</i>Sign up</a>
                            <div class="row"></div>
                        </div>

                        <div class="col s12 m6">
                            <a class="waves-effect waves-light btn" href="#modal2"><i class="material-icons left">cloud</i>Inscription</a>
                        </div>
                    </div>


                </div>

            </div>
            <br><br>

            <div class="section">

            </div>
        </div>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <form action="../classes/verif_login.php" method="post">
                    <div class="input-field">
                        <input name="mail" type="email" id="mail" class="validate">
                        <label for="mail">Email</label>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" id="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <button role="button" class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>

                </form>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>
        </div>


        <!-- Modal Structure -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <form action="../classes/inscription.php" method="POST">
                    <h5 class="flow-text">New here? Create your account</h5>
                    <div class="divider"></div>
                    <div class="input-field">
                        <input type="text" class="validate" id="first-name" name="nom">
                        <label for="first-name">First name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="validate" id="last-name" name="prenom">
                        <label for="last-name">Last name</label>
                    </div>


                    <div class="input-field">
                        <input type="radio" id="test1" name="sexe" value="homme"/>
                        <label for="test1">Homme</label>


                        <input type="radio" id="test2" name="sexe" value="femme" />
                        <label for="test2">Femme</label>
                    </div>


                    <div class="input-field">
                        <input type="date" class="datepicker" id="datenaiss" name="datenais">
                        <label for="datenaiss">Date de Naissance</label>
                    </div>

                        <div class="input-field">
                            <input type="email" id="email" class="validate" name="mail">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" class="validate" name="password">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" class="validate" name="confirmpassword">
                            <label for="password">Confirmer Password</label>
                        </div>
                    <button class="btn waves-effect waves-light red lighten-1" type="submit" name="action">Connexion
                    </button>

                </form>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            $(document).ready(function(){
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal').modal();
            });
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 50 // Creates a dropdown of 15 years to control year
            });

        </script>
    </body>
</html>
