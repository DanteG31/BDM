<?php include ('./template/header.php')?>
<script src="./js/like.js"></script>
<script type="text/javascript">
    document.title = "Cuotas de rectoria pagaran el estadio dice la UANL";
    document.getElementById('ReporterView').style.display = 'block';
    document.getElementById('EditorView').style.display = 'block';
    document.getElementById('Btnregistro').style.display = 'block';
</script>
<section class="notice">
    <div class="noticeContent">
        <article class="post">
            <div class="notice-header">
                <h1>Cuotas de rectoria pagaran el estadio dice la UANL</h1>
                <h5>20 de Febrero, 2022 | 11:23 | Deportes | Ciudad Universitaria, San Nicolás de los Garza, N.L.</h5>
                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit dignissimos nisi magnam. Atque
                    doloremque minus aut eius totam enim quisquam.</h6>
                <img class="notice-img" src="./resources/img/UANL.jpg" alt="No se encontro">
            </div>
            <div class="notice-body">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel cumque sunt aliquam, molestiae laboriosam
                eaque illo minima suscipit eos animi, officiis ad commodi modi omnis enim consequuntur est. Qui, sit.
                Necessitatibus tempore illum aut error, minus numquam harum impedit veritatis. Quas consequatur amet
                magnam cupiditate! Repellendus quas alias sint enim!
                <br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi illo modi eius praesentium nihil
                officiis natus quibusdam, aperiam quod, aspernatur hic temporibus fuga omnis, illum obcaecati provident.
                Perspiciatis, sapiente nostrum!
                <br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic possimus nulla et perferendis sit?
                Eligendi excepturi iusto tempore in quis cum veritatis natus officia illum enim nihil, impedit eveniet
                possimus quas, sequi, fuga ipsa. Maxime sunt neque nulla laudantium temporibus?
                <br><br>
                <h6 class="firma">23 de Febrero de 2022 | 12:05 | Cristopher Jared Mendoza Moreno</h6>
                <br>
                <div class="galeria">
                    <h3>Galeria de Imagenes y videos<h3>
                            <div class="Images">
                                <img class="notice-img-2" src="./resources/img/TigresEstadio.jpeg" alt="No se encontro">
                                <video class="notice-video" width="320" height="240" controls>
                                    <source src="./resources/video/UANLEstadio.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <a href="./gallery.php">
                                <h5>Ver Galeria Completa</h5>
                            </a>
                </div>
                <br>
                <button class="like__btn">
                    <span id="icon"><i class="far fa-thumbs-up"></i></span>
                    <span id="count">0</span> Like
                </button>
                <form action="" class="form-comentarios">
                    <textarea name="comentarios" id="comentarios" placeholder="Escribe un comentario"></textarea>
                    <button id="BtnComment" class="btn btn-primary my-2 my-sm-0">Comentar</button></a>
                </form>

                <div class="media">
                    <div class="media-body">
                        <img class="user-img" src="./resources/img/Kingpin.png" width="64" height="64"
                            alt="No se encontro">
                        <p class="nombre">Kingpin <span>12:42 pm, Hoy</span></p>
                        <p class="coment">Pero para cobrar si son buenos</p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<?php include ('./template/footer.php')?>