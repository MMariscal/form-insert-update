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

        <div id="menu">
            <ol id="lista">
                <ul>INFORMACIÓN GENERAL</ul>
                <ul>Series
                    <ol>
                        <ul>Curve</ul>
                        <ul>Minimal</ul>
                        <ul>Circle</ul>
                        <ul>Classic</ul>
                    </ol>
				</ul>
            </ol>
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









