<?php include ('./template/header.php')?>
    <script type="text/javascript">
        document.title = "Crear Sección";
        document.getElementById('EditorView').style.display = 'block';
        document.getElementById('seccion').style.display = 'block';
    </script>
    <section class="post-list">
        <div class="formulario bg-primary">
            <h2>Crear Sección</h2>
            <form action="./seccion.php" method="POST" enctype="multipart/form-data">
                    
                <input type="hidden" name="action" value="check">
                    
                <input type="text" maxlength="100" name="SeccionName" placeholder="Nombre de la Seccion" required>
                
                <input type="text" maxlength="20" name="SeccionColor" placeholder="Color de la Seccion" required>

                <input class="button btn btn-secondary my-2 my-sm-0" type="submit" value="Crear Sección">
            </form>
        </div>
    </section>
<?php include('./template/footer.php') ?>