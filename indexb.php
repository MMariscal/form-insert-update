<?php
	require('conexion.php');

	$query="SELECT * FROM PIEZA";

	$resultado=$mysqli->query($query);

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

            <!--<nav class="top_menu">
                <ul>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
            </nav>-->



        <div id="menu">
            <ol class="lista">
                <ul>idPIEZA</ul>
                <ul>MODELO</ul>
                <ul>MEDIDAS</ul>
                <ul>USO</ul>
                <ul>SERIE</ul>
                <ul>COLOR</ul>
                <ul>APLICACION</ul>
                <ul>ESTILO</ul>
                <ul>IMAGEN</ul>
                <ul>OTROS</ul>
                <ul>MODIFICAR</ul>
                <ul>ELIMINAR</ul>
                <!--<ul>
                    <ol>
                        <ul>Curve</ul>
                        <ul>Minimal</ul>
                        <ul>Circle</ul>
                        <ul>Classic</ul>
                    </ol>
				</ul>-->
            </ol>
            <?php while($row=$resultado->fetch_assoc()){ ?>
                <ol class="lista">
                    <ul><?php echo $row['idPIEZA'];?></ul>
					<ul><?php echo $row['MODELO'];?></ul>
					<ul><?php echo $row['MEDIDAS'];?></ul>
					<ul><?php echo $row['USO'];?></ul>
                    <ul><?php echo $row['SERIE'];?></ul>
					<ul><?php echo $row['COLOR'];?></ul>
					<ul><?php echo $row['APLICACION'];?></ul>
					<ul><?php echo $row['ESTILO'];?></ul>
					<ul><?php echo $row['IMAGEN'];?></ul>
					<ul><?php echo $row['OTROS'];?></ul>
					<ul><a href="modificar.php?idPIEZA=<?php echo $row['idPIEZA'];?>">Modificar</a></ul>
				    <ul><a href="eliminar.php?idPIEZA=<?php echo $row['idPIEZA'];?>">Eliminar</a></ul>
				</ol>
            	<?php } ?>
        </div>

		<table id="registros" border="1">
			<thead>
				<tr>
					<td>
					    <b>idPIEZA</b>
				    </td>
					<td>
					    <b>MODELO</b>
				    </td>
				    <td>
					    <b>MEDIDAS</b>
				    </td>
				    <td>
					    <b>USO</b>
				    </td>
				    <td>
					    <b>SERIE</b>
				    </td>
				    <td>
					    <b>COLOR</b>
				    </td>
				    <td>
					    <b>APLICACION</b>
				    </td>
				    <td>
					    <b>ESTILO</b>
				    </td>
				    <td>
					    <b>IMAGEN</b>
				    </td>
				    <td>
					    <b>OTROS</b>
				    </td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['idPIEZA'];?></td>
							<td><?php echo $row['MODELO'];?></td>
							<td><?php echo $row['MEDIDAS'];?></td>
							<td><?php echo $row['USO'];?></td>
							<td><?php echo $row['SERIE'];?></td>
							<td><?php echo $row['COLOR'];?></td>
							<td><?php echo $row['APLICACION'];?></td>
							<td><?php echo $row['ESTILO'];?></td>
							<td><?php echo $row['IMAGEN'];?></td>
							<td><?php echo $row['OTROS'];?></td>
							<td>
								<a href="modificar.php?idPIEZA=<?php echo $row['idPIEZA'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?idPIEZA=<?php echo $row['idPIEZA'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>









