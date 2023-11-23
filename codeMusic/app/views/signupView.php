<main>
        <h2 class="text-center">Regista-te gratuitamente para começares a ouvir.</h2>
        <br>

        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="name">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label for="user" class="form-label">Usuário:</label>
                <input type="text" class="form-control" name="user">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Confimar Senha:</label>
                <input type="password" class="form-control" name="rePassword">
            </div>

            <div class="mb-3">
                <button type="submit" name="newRegistration"class="btn btn-primary mb-3">Cadastrar</button>
            </div>
        </form>

        <p class="w3-center">Tens uma conta? <a href="<?=URL_BASE?>/login">Inicia sessão.</a></p>
</main>