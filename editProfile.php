<?php 
    include ('./template/header.php');
    include('./includes/profile-inc.php');
    if(!isset($_GET["email"])){
?>
    <script type="text/javascript">
            $(document).ready(function(){
                window.location.replace("./index.php");
            }
            );
    </script>
<?php
    }else{
        if($_GET["email"]!=$_SESSION["email"]){
?>
    <script type="text/javascript">
            $(document).ready(function(){
                window.location.replace("./index.php");
                }
            );
    </script>
<?php
        }
    }
?>
    <script src="./js/sigin.js"></script>
    <script src="./js/editProfile.js"></script>
    <script type="text/javascript">
        document.title = "Editar perfil"
        document.getElementById('EditorView').style.display = 'block';
        document.getElementById('ReporterView').style.display = 'block';
    </script>
    <section class="mainp">
        <div class="formulario bg-primary" style="display:flex; flex-direction: column; align-items:center;">
            <h2>Perfil de usuario</h2><br>
            <?php
            if(isset($_SESSION["email"])){
            ?>
            <form id="formImg" style="text-align: center; width: 80%;">

                <input type="hidden" name="action" value="editarperfil">
                
                <input type="hidden" name="id" value="">
                
                <img src="<?php if($data[0]["PROFILE_PIC"]!=null){echo $data[0]["PROFILE_PIC"];}else{echo "./Guest.png";}?>" id="imgCon" width="300px" height="300px" alt="">
                
                <br>

                <input type="hidden" name="imgaux" value="Placeholder">
                
                <label> Cambiar imagen de perfil:&nbsp </label>

                <input type="file" name="image" id="image" accept ="image/png, image/jpeg" value=""> <br>

                <input type="submit" id="subm">
                
                <br>

            </form>

            <form  id="formP" style="text-align: center; width: 80%;">  

                <input type="hidden" name="id" id="emailP" value=<?php echo '"'.$data[0]["EMAIL"].'"'?>>

                <label> Nombre de usuario: </label>
                
                <input type="text" maxlength="100" name="username" id="userAlias" value=<?php echo '"'.$data[0]["USER_ALIAS"].'"'?> placeholder="Nombre de usuario" required>
                
                <label> Nombre(s):</label>

                <input type="text" maxlength="100" name="rname" id="name" value=<?php echo '"'.$data[0]["NAME"].'"'?> placeholder="Nombre" required>

                <label> Apellido(S): </label>

                <input type="text" maxlength="100" name="surname" id="surname" value=<?php echo '"'.$data[0]["SURNAME"].'"'?> placeholder="Apellido" required>
                
                <label> Telefóno: </label>

                <input type="text" name="phone" id="phone" maxlength="12" placeholder="Número de telefóno" value=<?php echo '"'.$data[0]["PHONE"].'"'?> pattern="[0-9]+" title="Solo números" required>

                <input type="submit" id="subm">

                <button class="button btn btn-secondary my-2 my-sm-0" type="button" id="subP">Guardar cambios</button>
                
            </form>

            <br> 

            <form id="formC" style="text-align: center; width: 80%;">

                <label> Contraseña nueva: </label>

                <input type="password" name="passw" id="pass1"  maxlength="20" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[\W_])\S{8,20}$" placeholder="Contraseña nueva" title="Debe contener una mayúscula, una minúscula, un número y un carácter especial. De 8 a 20 caracteres" required>
                
                <label> Confimar contraseña: </label>

                <input type="password" maxlength="20" id="pass2" placeholder="Confirmar Contraseña" required>

                <input type="submit" id="subm">

                <button class="button btn btn-secondary my-2 my-sm-0" type="button" id="subC">Cambiar contraseña</button>

            </form>
            <?php
            }
            ?>
        </div>
    </section>
<?php include('./template/footer.php') ?>