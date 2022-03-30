<?php include ('./template/header.php')?>
    <script src="./js/login.js"></script>
    <script type="text/javascript">
        document.title = "Iniciar sesión";
    </script>
    <section class="post-list">
        <div class="formulario bg-primary">
            <h2>Inicia Sesión</h2>
            <form id="formI">
                    
                <input type="hidden" name="action" value="check">
                    
                <input type="text" maxlength="100" name="mail" id="mail" placeholder="Correo electónico" required>
                
                <input type="password" maxlength="20" name="passw" id="passw" placeholder="Contraseña" required>

                <input type="submit" id="subm">

                <button class="button btn btn-secondary my-2 my-sm-0" id="subI" type="button">Iniciar sesión<button>

            </form>
            <a class="link" href="./signin.php">¿No tienes una cuenta? Registrate aquí</a>
        </div>
    </section>
<?php include('./template/footer.php') ?>