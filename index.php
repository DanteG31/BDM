<?php include ('./template/header.php') ?>
    <?php
        if(isset($_SESSION["type"])){
            if($_SESSION["type"]==1){
    ?>
        <script type="text/javascript">
            $(document).ready(function(){
                window.location.replace("./editorNotice.php");
            }
            );
        </script>
    <?php
            }
    ?>
    <?php
            if($_SESSION["type"]==2){
    ?>
        <script type="text/javascript">
            $(document).ready(function(){
                window.location.replace("./adminNotice.php");
            }
            );
        </script>
    <?php
            }
        }
    ?>
    <script type="text/javascript">
        document.title = "Noticias24";
        document.getElementById('ReporterView').style.display = 'block';
        document.getElementById('EditorView').style.display = 'block';
        document.getElementById('Btnregistro').style.display = 'block';
    </script>
    <section class="post-list">
    <div class="content">
        <article class="post">
            <div class="post-header">
                <img class="post-img-1" src="./resources/img/HombrePajaro.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2022 | Ciencia</span>
                <h3>Hombre pájaro avistado</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dignissimos nisi magnam. Atque
                    doloremque minus aut eius totam enim quisquam.</p>
                <a href="notice.php" class="post-link">Leer Más...</a>

            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-2" src="./resources/img/UANL.jpg" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2022 | Deportes</span>
                <h3>Cuotas de rectoria pagaran el estadio dice la UANL</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, dolore reprehenderit? Incidunt
                    recusandae nemo delectus magnam commodi veniam, perferendis inventore!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
            </div>
        </article>
        <article class="post">
            <div class="post-header">
                <img class="post-img-3" src="./resources/img/covid.png" alt="No se encontro">
            </div>
            <div class="post-body">
                <span>20 de Febrero, 2022 | Salud</span>
                <h3>Se descubre variante de Covid-24</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestias, veniam quam deleniti
                    doloremque dolores harum provident aspernatur accusantium aperiam!</p>
                <a href="notice.php" class="post-link">Leer Más...</a>
            </div>
        </article>
    </div>
</section>
<?php include('./template/footer.php') ?>