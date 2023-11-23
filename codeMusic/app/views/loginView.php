<main>
        <hr style="width:100%">
        <h2 class="text-center">Informe os seus dados para acessar o sistema</h2>
        <br>
        <?php if($this->loginDanger): ?>
            <div class="alert alert-danger">Incorrect username or password.</div>
        <?php endif; ?>
        <form method="POST" class="w3-center">
            <p><input type="text" name="user" placeholder="Email ou usuario" required></p>
            <p><input type="password" name="password" placeholder="Senha" required></p>
            <p><button type="submit" name="logar">Entrar</button></p>
        </form>
        <p class="w3-center">Ainda não possui um cadastro? <a href="<?=URL_BASE?>/signup">Clique aqui!</a></p>
</main>