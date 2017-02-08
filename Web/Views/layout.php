<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php /*
         * <base> digunakan untuk menentukan URL dasar dari seluruh halaman web.
         * contoh: public/css/style.css pada kode HTML akan dibaca sebagai
         * http://localhost/framework/public/css/style.css
         */ ?>
        <!--<base href="http://localhost/kurniawantaari/Web/">-->
        <title>Kurniawantaari</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/materialize.css"/>
        <link rel="stylesheet" href="resources/css/style.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
        <script type="text/javascript" src="resources/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="resources/js/materialize.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>-->
        <script src="https://use.fontawesome.com/8d1cd7da0d.js"></script>
  </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper transparent">
                    <a href="http://localhost/kurniawantaari/Web" class="brand-logo center materialize-green-text">Guratize</a>
                    <a href="#" data-activates="menu" class="button-collapse right show-on-large"><i id="button-menu" class="fa fa-bars fa-2x materialize-green-text"></i></a>
                    <ul id="menu" class="side-nav">
                        <li><a href="http://localhost/kurniawantaari/Web">Home</a></li>
                        <li><a href="http://localhost/kurniawantaari/Web/Tutorial">Tutorial</a></li>
                        <li><a href="http://localhost/kurniawantaari/Marketplace">Marketplace</a></li>
                        <li><a href="http://localhost/kurniawantaari/Wedding">Wedding</a></li>
                    </ul> 
                </div>
            </nav>
        </header>
        <main>
            <?php require($content) ?>
        </main>
        <footer class="page-footer">
            <div class="container">
                Guratize &COPY; <?php echo date("Y"); ?>
            </div>
        </footer>
        <script>
            $('.button-collapse').sideNav({
                menuWidth: 300, // Default is 300
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
            }
            );

        </script>
    </body>
</html>
