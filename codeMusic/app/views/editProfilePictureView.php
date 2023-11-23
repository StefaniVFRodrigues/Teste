<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
            <h2 class="w3-text-light-grey">Editar Foto de Perfil</h2>

            <form action="<?=URL_BASE?>/editProfilePicture/newUpload" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="picture" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="picture">
            </div>

            <div class="mb-3">
                <button type="submit" name="uploadPicture"class="btn btn-primary mb-3">Enviar</button>
            </div>
            </form>
        
        </div>  