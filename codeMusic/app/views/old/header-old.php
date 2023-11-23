<!DOCTYPE html>
<html>
    <head>
        <!-- new -->
        <link rel="stylesheet" href="css/style.css">
        <!-- new -->
        <title><?php echo isset($titleWeb)? $titleWeb: 'Spotify';?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
            .w3-row-padding img {margin-bottom: 12px}
            /* Set the width of the sidebar to 120px */
            .w3-sidebar {width: 120px;background: #222;}
            /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
            #main {margin-left: 120px}
            /* Remove margins from "page content" on small screens */
            @media only screen and (max-width: 600px) {#main {margin-left: 0}}
        </style>
        <script>
            $(document).ready(function(){
                $("#telefoneCliente").mask("(00) 00000-0000");
            });
        </script>

        <!-- CDN da última versão compilada e minimizada do CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- CDNs para importar JQUERY e Máscaras -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <!-- CDN icones -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Script para Máscaras do Formulário -->
        <script>
            $(document).ready(function(){
                $("#telefoneCliente").mask("(00) 00000-0000");
            });
        </script>
        
    </head>
    <body class="w3-black">

        <!-- Icon Bar (Sidebar - hidden on small screens) -->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <?php if(empty($_SESSION['user'])): ?>
        <a href="<?=URL_BASE?>/login" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>LOGIN</p>
        </a>
        <a href="<?=URL_BASE?>/signup" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>CADASTRAR</p>
        </a>
        <?php elseif(!empty($_SESSION['user'])): ?>
        <a href="<?=URL_BASE?>/home" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>INICIO</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>MODELOS</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-heart w3-xxlarge"></i>
            <p>AGENDAR</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-file w3-xxlarge"></i>
            <p>LISTAR CLIENTES</p>
        </a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-search w3-xxlarge"></i>
            <p>EDITAR PERFIL</p>
        </a>
        <a href="<?=URL_BASE?>/login/logout" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>SAIR</p>
        </a>
        <?php endif; ?>
        </nav>

        <!-- Navbar on small screens (Hidden on medium and large screens) -->
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
            <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">INICIO</a>
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">LOGIN</a>
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">MODELOS</a>
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">AGENDAR</a>
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">LISTAR CLIENTES</a>
                <a href="#" class="w3-bar-item w3-button" style="width:25% !important">PESQUISAR CLIENTES</a>
            </div>
        </div>

        <!-- Page Content -->
            <div class="w3-padding-large" id="main">
                <!-- Header/Home -->
                <header class="w3-container w3-padding-32 w3-black" id="home">