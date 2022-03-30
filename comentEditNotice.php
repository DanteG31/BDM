<?php include ('./template/header.php')?>
    <script type="text/javascript">
        document.title = "Comentarios";
        document.getElementById('ReporterView').style.display = 'none';
    </script>
    <section class="post-list">
        <div class="formulario bg-primary">
            <h2>Comentarios al reportero</h2>
            <form action="./editorNotice.php" method="POST" enctype="multipart/form-data">
                    
                <input type="hidden" name="action" value="check">
                
                    
                <h6>El Limón esta bien caro</h6>
                
                <textarea id="comments" placeholder = "Comentarios" requiered></textarea>

                <input class="button btn btn-secondary my-2 my-sm-0" type="submit" value="Enviar comentarios">

            </form>
        </div>
    </section>
<?php include('./template/footer.php') ?>