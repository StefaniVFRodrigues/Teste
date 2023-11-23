<main>
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <hr style="width:100%" class="w3-opacity">
        <h2 class="text-center">Upload Música</h2>
        <br>
        <form method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="musicName" class="form-label">Nome da Música:</label>
                <input type="text" class="form-control" name="musicName" placeholder="Nome Musica (feat. Artista)..." required>
            </div>
            <div class="mb-3">
                <label for="artistName" class="form-label">Nome do Artista:</label>
                <input type="text" class="form-control" name="artistName" placeholder="Artista 1, Artista 2..." required>
            </div>
    
            <div class="mb-3">
                <label for="musicFile" class="form-label">Arquivo de Áudio:</label>
                <input type="file" class="form-control" name="musicFile" required accept="audio/*">
            </div>

            <div class="mb-3">
                <label for="coverFile" class="form-label">Imagem do Album:</label>
                <input type="file" class="form-control" name="coverFile" required accept="image/*">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gênero:</label>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option selected>Selecione o Genero</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            
            <div class="mb-3">
                <button type="submit" name="uploadMusic" class="btn btn-primary mb-3">Enviar</button>
            </div>
        </form>
    </div>
</main>