        <?php if(!empty($_SESSION['user'])){ ?>
        <div class="reproducao"> <!-- O Reprodutor-->
            <img src="imagens/sunflower.png" alt=""> <!-- imagem da música tocada -->
            <div class="organizando">
                <div class="tocando">
                    <span class="nome_musica">NOME DA MÚSICA</span> <!-- nome da música tocando-->
                    <div class="barra-reproducao">
                        <div class="progresso"></div>
                    </div> <!-- barra de reprodução (pesquisar como fazer)-->
                </div>
                <!-- PLAYER -->
                <audio controls>
                    <source src="./src/music/track001.mp3" type="audio/mpeg">
                </audio>
                <!-- PLAYER -->
                <div class="botoes">
                    <button><i class='bx bx-first-page'></i></button>
                    <button><i class='bx bx-pause'></i></button>
                    <button><i class='bx bx-play' id="play"></i></button>
                    <button><i class='bx bx-last-page' ></i></button>
                </div>
            
            </div>
        </div>
        <?php } ?>
        <footer>
            <button><i class='bx bx-home' ></i></button>
            <button><i class='bx bx-search-alt-2'></i></button>
            <button><i class='bx bx-smile'></i></button>
        </footer>
    </div>
    <!--<script src="js/script.js"></script>-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>
