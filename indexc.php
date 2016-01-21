<?php
	require('conexion.php');
    $mensaje = '';
	/*$query="SELECT * FROM PIEZA";

	$resultado=$mysqli->query($query);*/

    $cant_reg = 13;
    $num_pag = $_GET['pagina'];

    if (!$num_pag){
        $comienzo = 0;
        $num_pag = 1;
    }else{
        $comienzo = ($num_pag-1)*$cant_reg;
    }

    $link = mysqli_connect("localhost", "user", "123456", "NTCSerie2");

    $result = mysqli_query($link, "SELECT * FROM PIEZA");
    $total_registros = mysqli_num_rows($result);

    $result = mysqli_query($link, "SELECT idPIEZA, MODELO, MEDIDAS, USO, SERIE, COLOR, APLICACION, ESTILO,                                      IMAGEN, OTROS FROM PIEZA ORDER BY idPIEZA LIMIT $comienzo, $cant_reg");
    $total_paginas = ceil($total_registros/$cant_reg);

    while ($row = mysqli_fetch_array($result)){
        $idPIEZA = $row['idPIEZA'];
        $modelo =$row['MODELO'];
        $medidas =$row['MEDIDAS'];
        $uso =$row['USO'];
        $serie =$row['SERIE'];
        $color =$row['COLOR'];
        $aplicacion =$row['APLICACION'];
        $estilo =$row['ESTILO'];
        $imagen =$row['IMAGEN'];
        $otros =$row['OTROS'];

        $mensaje .='
            <ul>
                <li><a class="active" style="width:50px">'.$idPIEZA.'</a></li>
                <li><a href="#" style="width:250px">'.$modelo.'</a></li>
                <li><a href="#" style="width:75px">'.$medidas.'</a></li>
                <li><a href="#" style="width:125px">'.$uso.'</a></li>
                <li><a href="#" style="width:100px">'.$serie.'</a></li>
                <li><a href="#" style="width:150px">'.$color.'</a></li>
                <li><a href="#" style="width:234px">'.$aplicacion.'</a></li>
                <li><a href="#" style="width:100px">'.$estilo.'</a></li>
                <li><a href="#" style="width:250px">'.$imagen.'</a></li>
                <li><a href="#" style="width:48px">'.$otros.'</a></li>
                <li><a href="modificar.php?idPIEZA='.$idPIEZA.'" style="width:55px">Modificar</a></li>
                <li><a href="eliminar.php?idPIEZA='.$idPIEZA.'" style="width:55px">Eliminar</a></li>
            </ul>
        ';
    }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulario NATUCER</title>
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script src="node_modules/jquery/dist/jquery.js"></script>
	</head>
	<body>

		<center><h1>LISTADO PIEZAS NATUCER</h1></center>

		<a href="nuevo.php">Nuevo registro</a>
		<p></p>

        <ul>
            <li><a class="active" style="width:50px">idPIEZA</a></li>
            <li><a href="#" style="width:250px">MODELO</a></li>
            <li><a href="#" style="width:75px">MEDIDAS</a></li>
            <li><a href="#"style="width:125px">USO</a></li>
            <li><a href="#"style="width:100px">SERIE</a></li>
            <li><a href="#"style="width:150px">COLOR</a></li>
            <li><a href="#"style="width:234px">APLICACION</a></li>
            <li><a href="#"style="width:100px">ESTILO</a></li>
            <li><a href="#"style="width:250px">IMAGEN</a></li>
            <li><a href="#"style="width:48px">OTROS</a></li>
            <li><a href="#"style="width:55px">MOD.</a></li>
            <li><a href="#"style="width:55px">DEL.</a></li>
        </ul>
        <?php echo $mensaje; ?>
    </body>
</html>
