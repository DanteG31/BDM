<?php include ('./template/header.php')?>
<?php include ('./includes/reports-inc.php')?>
    <script src="./js/sigin.js"></script>
    <script type="text/javascript">
        document.title = "Likes por noticia";
        document.getElementById('EditorView').style.display = 'block';
    </script>
    <section class="main">
            <h2>Reporte de likes por noticia&nbsp&nbsp</h2><br>
            <form>
                <select id="sectioncombo" name="section">
                    <option>Todas</option>
                    <option>Nacional</option>
                    <option>Entretenimiento</option>
                    <option>Ciencia</option>
                    <option>Deportes</option>
                    <option>Economía</option>
                </select>   
                <label>Desde:</label>
                <input type="date" onfocus = "this.max = new Date().toISOString().split('T')[0]" id="idate" name="idate">
                <label>Hasta:</label>
                <input type="date" onfocus = "this.max = new Date().toISOString().split('T')[0]" id="fdate" name="fdate">
                <input class="button btn btn-secondary my-2 my-sm-0" type="submit" value="Generar">
                <a style="display:inline" name="sectionReport" class="button btn btn-secondary my-2 my-sm-0" href="./sectionReport.php" role="button">Reporte por secciones</a>
            </form>
            <table class="table1" cellpading="0" cellspacing="0">
                <tr>
                    <th style="width:10%;">Sección</th>
                    <th style="width:10%;">Fecha</th>
                    <th style="width:60%;">Noticia</th>
                    <th style="width:10%;">Likes</th>
                    <th style="width:10%;">Comentarios</th>
                </tr>
                <?php
                if(isset($rep)){ 
                    if(count($rep) > 0){
                        foreach($rep as $val){?>
                <tr>
                    <td><?php echo $val["Sección"] ?></td>
                    <td><?php echo $val["Fecha"] ?></td>
                    <td><?php echo $val["Noticia"] ?></td>
                    <td><?php echo $val["Likes"] ?></td>
                    <td><?php echo $val["Comentarios"] ?></td>
                </tr>
                <?php
                        }
                    }
                }
                ?>
                
            </table>
    </section>
<?php include('./template/footer.php') ?>