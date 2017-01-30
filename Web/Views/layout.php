<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        /*
         * <base> digunakan untuk menentukan URL dasar dari seluruh halaman web.
         * contoh: public/css/style.css pada kode HTML akan dibaca sebagai
         * http://localhost/framework/public/css/style.css
         */?>
        <base href="http://localhost/framework/">
        <title>Kurniawantaari</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet"
          href="resources/css/something.css"/>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo-right">Logo</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                </div>
            </nav>
        </header>

<div class="container">
    <?php require($content) ?>
</div>
    </body>
</html>
