<?php include ('./template/header.php')?>
<script type="text/javascript">
    document.title = "Administrar Noticias";
    document.getElementById('CreateNotice').style.display = 'block';
    document.getElementById('profile').style.display = 'block';
</script>
<section class="post-list">
    <div class="content">
        <article class="post">
            <div class="post-header">
                <img class="post-img-1" src="./resources/img/HombrePajaro.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2020 | Ciencia</span>
                <h3>Hombre pájaro avistado</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dignissimos nisi magnam. Atque
                    doloremque minus aut eius totam enim quisquam.</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
            </div>
            <div class="post-admin">
                <a id="" class="btn btn-primary" href="#" role="button">Modificar</a>
                <a id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                <a id="" class="btn btn-success disabled" href="#" role="button">Publicada</a>
            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-2" src="./resources/img/UANL.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2020 | Deportes</span>
                <h3>Cuotas de rectoria pagaran el estadio dice la UANL</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, dolore reprehenderit? Incidunt
                    recusandae nemo delectus magnam commodi veniam, perferendis inventore!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
            </div>
            <div class="post-admin">
                <a id="" class="btn btn-primary" href="#" role="button">Modificar</a>
                <a id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                <a id="" class="btn btn-success disabled" href="#" role="button">Publicada</a>
            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-3" src="./resources/img/covid.png" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2020 | Salud</span>
                <h3>Se descubre variante de Covid-24</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestias, veniam quam deleniti
                    doloremque dolores harum provident aspernatur accusantium aperiam!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
            </div>
            <div class="post-admin">
                <a id="" class="btn btn-primary" href="#" role="button">Modificar</a>
                <a id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                <a id="" class="btn btn-success disabled" href="#" role="button">Publicada</a>
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
                    <a id="" class="btn btn-primary" href="#" role="button">Modificar</a>
                    <a id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                    <a id="" class="btn btn-info disabled" href="#" role="button">En Redaccion</a>
                </div>
            </div>
        </article>
    </div>
</section>
<?php include('./template/footer.php') ?>