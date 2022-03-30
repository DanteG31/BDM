<?php include ('./template/header.php')?>
    <script src="./js/sigin.js"></script>
    <script type="text/javascript">
        document.title = "Registrarse";
    </script>
    <section class="post-list">
        <div class="formulario bg-primary">
            <h2>Crea tu Cuenta</h2>
            <form id="form">
                
                <input type="hidden" name="action" value="insertar">
                
                <input type="text" name="rname" id="name" maxlength="100" placeholder="Nombre(s)" required>

                <input type="text" name="surname" id="surname" maxlength="100" placeholder="Apellidos" required>

                <input type="email" name="mail" id="mail"  maxlength="200" placeholder="Correo Electronico" required>

                <input type="text" name="phone" id="phone" maxlength="12" placeholder="Número de telefóno" pattern="[0-9]+" title="Solo números" required>

                <input type="text" name="userName" id="userAlias" maxlength="100" id="usname" placeholder="Nombre de Usuario" required>

                <input type="password" name="passw" id="pass1" placeholder="Contraseña" maxlength="20" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[\W_])\S{8,20}$" title="Debe contener una mayúscula, una minúscula, un número y un carácter especial. De 8 a 20 caracteres" required>

                <input type="password" maxlength="20" id="pass2" placeholder="Confirmar Contraseña" required>

                <h2>Imagen de perfil:</h2>

                <input class="button btn btn-secondary my-2 my-sm-0" type="file" name="image" id="image" accept ="image/png, image/jpeg" required> 
                
                <div style="min-height: 10px"></div>

                <button class="button btn btn-secondary my-2 my-sm-0" type="button" id="sub"> Registrarse </button>

                <input type="submit" id="subm">

            </form>
            <a class="link"  href="./login.php">¿Ya tienes una cuenta? Inicia sesión</a>
            <label>¿Deseas registrarte como reportero? Contactate a placeholder@hotmail.com</label>
        </div>
    </section>
<?php include('./template/footer.php') ?>