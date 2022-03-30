<?php include ('./template/header.php')?>
<script type="text/javascript">
    document.title = "Noticias Pendientes";
    document.getElementById('createReporter').style.display = 'block';
    document.getElementById('seccion').style.display = 'block';
    document.getElementById('noticeReport').style.display = 'block';
    document.getElementById('profile').style.display = 'block';
</script>
<section class="post-list">
    <div class="content">
        <article class="post">
            <div class="post-header">
                <img class="post-img-1" src="./resources/img/Tortilleria.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>22 de Febrero, 2022 | Internacional</span>
                <h3>Conflicto entre Ucrania y Rusia no afectara el precio de las tortillas en Chiapas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum eligendi quis aut animi itaque ipsa
                    vel voluptate vero perspiciatis fugiat!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
                <div class="editor">
                    <a id="validar" class="btn btn-success" href="#" role="button">Publicar</a>
                    <a id="validar" class="btn btn-warning" href="./comentEditNotice.php" role="button">Regresar</a>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-2" src="./resources/img/Ajolote.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>22 de Febrero, 2022 | Economia</span>
                <h3>El nuevo billete de ajolote esta bien bonito</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi eaque eius non cum repudiandae minus
                    deserunt est architecto, dolorem veritatis veniam eligendi eos dolor labore repellat ullam aliquid
                    fuga minima.</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
                <div class="editor">
                    <a id="validar" class="btn btn-success" href="#" role="button">Publicar</a>
                    <a id="validar" class="btn btn-warning" href="./comentEditNotice.php" role="button">Regresar</a>
                </div>
            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-3" src="./resources/img/Limon.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>22 de Febrero, 2022 | Salud</span>
                <h3>Esta bien caro el Limón</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestias, veniam quam deleniti
                    doloremque dolores harum provident aspernatur accusantium aperiam!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
                <div class="editor">
                    <a id="validar" class="btn btn-success" href="#" role="button">Publicar</a>
                    <a id="validar" class="btn btn-warning" href="./comentEditNotice.php" role="button">Regresar</a>
                </div>
            </div>
        </article>
    </div>
</section>
<?php include('./template/footer.php') ?>