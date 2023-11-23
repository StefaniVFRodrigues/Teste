<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle)? $pageTitle: 'CodeMusic';?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="/Imagens/logos/Favicon Code Music.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container"> <!-- toda a pag e seu conteudo -->
        <header>
            <!-- parte de cima da página inteira -->
            <div class="esquerda">
                <a href="<?=URL_BASE.'/home'?>"><img id="imgLogo" src="imagens/logos/CodeMusic.png" alt="CodeMusic"></a> <!-- logo-->
                <input type="text" placeholder="O que você procura?"> <!-- Input de pesquisa-->

                <i class='bx bx-search-alt-2'></i> <!-- Icon de lupa-->
                <?php if(!empty($_SESSION['user'])){ ?>
                <div class="email">
                    <i class='bx bx-envelope'></i> <!-- icon de email-->
                    <div class="alerta">3</div> <!-- sinal de notificação em cima do email-->
                </div>
            </div>
            <div class="caixa_perfil"> <!-- div que contem tod conteudo de perfil com nome, imagem e botão para perfil-->
                <div class="escrita">
                    <p></p>
                    <button class="perfil">Perfil</button>
                </div>
                <img id="imgProfile" src="<?=URL_PROFILE_PIC?>/<?=$this->user['profilePicture']?>" alt="">
            </div>
            <?php } ?>
        </header>

        <aside> <!-- Barra lateral com amigos-->

            <div class="adicionar"> <!-- Area com botão de adicionar amigos -->
                <i class='bx bxs-user-plus'></i>
                <button class="add.amigo">Adicionar</button>
            </div>

            <div class="lista_amigos"> <!--Lista de Amigos -->
                <div class="pessoa"> <!-- Cada amigo é marcado como pessoa, que tem duas coisas dentro-->
                    <div class="indentificador"> <!-- Onde tem a parte de cima com icon, nome e o play-->
                        <img src="Imagens/temporarios/user_circle_icon_172814.png" alt="">
                        <span class="nome_amigo">Nome</span>
                        <button><i class='bx bx-play-circle'></i></button>
                    </div>
                    <span class="ouvindo">Ouvindo: Ainda Gosto dela</span> <!-- Onde tem o que a pessoa está ouvindo, se tiver-->
                </div> <!-- Aqui acaba cada campo de uma pessoa-->
                
                <div class="pessoa"> <!-- Cada amigo é marcado como pessoa, que tem duas coisas dentro-->
                    <div class="indentificador"> <!-- Onde tem a parte de cima com icon, nome e o play-->
                        <img src="Imagens/temporarios/user_circle_icon_172814.png" alt="">
                        <span>Nome</span>
                        <button><i class='bx bx-play-circle'></i></button>
                    </div>
                    <span class="ouvindo">Ouvindo: Ainda Gosto dela</span> <!-- Onde tem o que a pessoa está ouvindo, se tiver-->
                </div> <!-- Aqui acaba cada campo de uma pessoa-->
                
                <div class="pessoa"> <!-- Cada amigo é marcado como pessoa, que tem duas coisas dentro-->
                    <div class="indentificador"> <!-- Onde tem a parte de cima com icon, nome e o play-->
                        <img src="Imagens/temporarios/user_circle_icon_172814.png" alt="">
                        <span>Nome</span>
                        <button><i class='bx bx-play-circle'></i></button>
                    </div>
                    <span class="ouvindo">Ouvindo: Ainda Gosto dela</span> <!-- Onde tem o que a pessoa está ouvindo, se tiver-->
                </div> <!-- Aqui acaba cada campo de uma pessoa-->
                
                <div class="pessoa"> <!-- Cada amigo é marcado como pessoa, que tem duas coisas dentro-->
                    <div class="indentificador"> <!-- Onde tem a parte de cima com icon, nome e o play-->
                        <img src="Imagens/temporarios/user_circle_icon_172814.png" alt="">
                        <span>Nome</span>
                        <button><i class='bx bx-play-circle'></i></button>
                    </div>
                    <span class="ouvindo">Ouvindo: Ainda Gosto dela</span> <!-- Onde tem o que a pessoa está ouvindo, se tiver-->
                </div> <!-- Aqui acaba cada campo de uma pessoa-->
                
                <div class="pessoa"> <!-- Cada amigo é marcado como pessoa, que tem duas coisas dentro-->
                    <div class="indentificador"> <!-- Onde tem a parte de cima com icon, nome e o play-->
                        <img src="Imagens/temporarios/user_circle_icon_172814.png" alt="">
                        <span>Nome</span>
                        <button><i class='bx bx-play-circle'></i></button>
                    </div>
                    <span class="ouvindo">Ouvindo: Ainda Gosto dela</span> <!-- Onde tem o que a pessoa está ouvindo, se tiver-->
                </div> <!-- Aqui acaba cada campo de uma pessoa-->

            </div> <!-- Aqui acaba a lista de amigos-->
        </aside>  <!-- barra lateral termina aqui!!!!-->