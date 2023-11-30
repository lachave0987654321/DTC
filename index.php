<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include ('conexion.php');?>
    <table>
        <tr><th><hl>Listado de productos </hl></th></tr>
        <tr>
            <th>imagen</th>
            <th>id</th>
            <th>producto</th>
            <th>precio</th>
            <th>existencia</th>
            <th>accion</th>
        </tr>
<?php
$sql="select * from categorias";
$resultado=mysqli_query ($conn ,$sql);
 while ($mostrar=mysqli_fetch_array($resultado))
   {?>
    <tr>
        <td> <?php echo "<img width='80' heigth='80' src='img/".$mostrar['imagen'].".png'>"?></td>
        <td><?php echo $mostrar['imagen']?></td>
        <td><?php echo $mostrar['codigo']?></td>
        <td><?php echo $mostrar['precio']?></td>
        <td><?php echo $mostrar['existencia']?></td>
        
    </tr>
<?php
   }
?>
</table>
</body>
</html>        