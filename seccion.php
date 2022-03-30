<?php include ('./template/header.php')?>
<script src="./js/sigin.js"></script>
<script type="text/javascript">
    document.title = "Administrar Secciones";
    document.getElementById('EditorView').style.display = 'block';
    document.getElementById('seccionReport').style.display = 'block';
</script>
<section class="main">
    <h2>Administrar Secciones</h2>
    <div class="AdminSeccion">
        <a href="./createSeccion.php" style="text-decoration: none"><button id="CreateSeccion"
                class="btn btn-secondary my-2 my-sm-0">Nueva Sección</button></a>
        <a href="./createNoticie.php" style="text-decoration: none"><button id="ModifySeccion"
                class="btn btn-secondary my-2 my-sm-0">Modificar Sección</button></a>
    </div>
    <table class="table1" cellpading="0" cellspacing="0">
        <tr>
            <th style="width:20%;">Sección</th>
            <th style="width:20%;">Orden</th>
            <th style="width:20%;">Color</th>
            <th style="width:20%;">Eliminar</th>
        </tr>
        <tr>
            <td>Nacional</td>
            <td>1</td>
            <td Style="background-color: red">Rojo</td>
            <td>Eliminar</td>   
        </tr>
        <tr>
            <td>Entretenimiento</td>
            <td>2</td>
            <td Style="background-color: blue">Azul</td>
            <td>Eliminar</td>
           
        </tr>
        <tr>
            <td>Ciencia</td>
            <td>3</td>
            <td Style="background-color: yellow">Amarillo</td>
            <td>Eliminar</td>
            
        </tr>
        <tr>
            <td>Deportes</td>
            <td>4</td>
            <td Style="background-color: green">Verde</td>
            <td>Eliminar</td>  
        </tr>

        <tr>
            <td>Economia</td>
            <td>5</td>
            <td Style="background-color: pink">Rosa</td>
            <td>Eliminar</td>      
        </tr>

        <tr>
            <td>Cultura</td>
            <td>6</td>
            <td Style="background-color: black">Negro</td>
            <td>Eliminar</td>      
        </tr>
        <tr>
            <td>Salud</td>
            <td>7</td>
            <td Style="background-color: cyan">Celeste</td>
            <td>Eliminar</td>      
        </tr>
        <tr>
            <td>Internacional</td>
            <td>8</td>
            <td Style="background-color: violet">Morado</td>
            <td>Eliminar</td>      
        </tr>
    </table>
</section>
<?php include('./template/footer.php') ?>