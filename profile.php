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
    }
?>
<?php
    if(isset($_GET["email"])){
        if($data=="NE"){
?>
    <script type="text/javascript">
            $(document).ready(function(){
                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"El usuario no existe"}).then(function(){
                    window.location.replace("./index.php");
                });
            }
            );
    </script>
<?php
        }
    }
?>
    <script src="./js/sigin.js"></script>
    <script type="text/javascript">
        document.title = "Perfil";
        document.getElementById('EditorView').style.display = 'block';
        document.getElementById('ReporterView').style.display = 'block';
    </script>
    <section class="mainp">
        <div class="formulario bg-primary" style="display:flex; flex-direction: column; align-items:center;">
            <?php
            if(isset($_SESSION["email"])){
            ?>
            <h2>Perfil de Usuario</h2><br>
            <img src="<?php if($data[0]["PROFILE_PIC"]!=null){echo $data[0]["PROFILE_PIC"];}else{echo "./Guest.png";}?>" width="300px" height="300px" alt=""><br><br>
            <label>Nombre de usuario: <?php echo $data[0]["USER_ALIAS"]?></label> <br><br>
            <label>Nombre: <?php echo $data[0]["NAME"]?></label><br><br>
            <label>Apellido: <?php echo $data[0]["SURNAME"]?></label><br><br>
            <label>Correo electronico: <?php echo $data[0]["EMAIL"]?></label><br><br>
            <label>Teléfono: <?php echo $data[0]["PHONE"]?></label><br><br>
            <?php
                if($data[0]["EMAIL"] == $_SESSION["email"]){
            ?>
            <a href=<?php echo './editProfile.php?email='.$_SESSION["email"]?>><button class="button btn btn-secondary my-2 my-sm-0">Editar perfil</button></a>
            <?php
                }
            }
            ?>
    </div>
    </section>
<?php include('./template/footer.php') ?>