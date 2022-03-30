<?php include ('./template/header.php')?>
    <script type="text/javascript">
        document.title = "Registrarse";
        document.getElementById('ReporterView').style.display = 'block';
        document.getElementById('profile').style.display = 'block';
    </script>
    <section class="post-list">
        <div class="formulario bg-primary">
            <h2>Crear Noticia</h2>
            <form action="./index.php" id="form" method="POST" enctype="multipart/form-data">
                
                <input type="hidden" name="action" value="insertar">
                
                <input type="text" name="title" maxlength="100" placeholder="Titulo" required>

                <input type="text" name="location" maxlength="100" placeholder="Lugar" required>

                <input type="email" name="date" maxlength="200" placeholder="Fecha de Acontecimiento" required>

                <input type="email" name="datePublication" maxlength="200" placeholder="Fecha de Publicación" required>

                <input type="text" name="description" maxlength="200" placeholder="Descripcion" required>

                <input type="text" name="firma" maxlength="100" placeholder="Firma del reportero" required>

                <input type="text" name="clave" maxlength="100" placeholder="Palabras clave" required>

                <textarea name="texto" placeholder = "Texto" requiered></textarea>

                <h2>Imagenes de la noticia:</h2>  

                <input class="button btn btn-secondary my-2 my-sm-0" type="file" name="image" accept ="image/png, image/jpeg" required>
                
                <div style="min-height: 10px"></div>

                <h2>Videos de la noticia:</h2>  

                <input class="button btn btn-secondary my-2 my-sm-0" type="file" name="image" accept ="video/mp4, image/mov" required>

                <div style="min-height: 10px"></div>

                <input type="text" name="seccion" maxlength="100" placeholder="Seccion(es)" required>
               
            </form>
        </div>
    </section>
<?php include('./template/footer.php') ?>