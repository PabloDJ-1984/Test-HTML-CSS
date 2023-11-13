<html>
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="crud.css" rel="stylesheet" type="text/css" >
	<title>Editar blindados</title>
</head>

<body>
		
	<div class="container">
	
		<?php
		include_once("config.php");
		
		if(isset($_POST['update']))
		{	
		
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			
			$Nombre = mysqli_real_escape_string($mysqli, $_POST['Nombre']);
			$Tipo = mysqli_real_escape_string($mysqli, $_POST['Tipo']);
			$Tier = mysqli_real_escape_string($mysqli, $_POST['Tier']);	
			
			if(empty($Nombre) || empty($Tipo) || empty($Tier)) {	
					
				if(empty($Nombre)) {
					echo "<div class=\"alert alert-danger\" role=\"alert\">Nombre vacío</div>";
				}
				
				if(empty($Tipo)) {
					echo "<div class=\"alert alert-danger\" role=\"alert\">Tipo vacío.</div>";
				}
				
				if(empty($Tier)) {
					echo "<div class=\"alert alert-danger\" role=\"alert\">Tier vacío.</div>";
				}	
			} else {	
				echo "UPDATE $tabla SET Nombre='$Nombre',Tipo='$Tipo',Tier='$Tier' WHERE id=$id";
				$result = mysqli_query($mysqli, "UPDATE $tabla SET Nombre='$Nombre',Tipo='$Tipo',Tier='$Tier' WHERE id=$id");
				
				header("Location: index.php");
			}
		}
		?>

		<?php
		
		$id = $_GET['id'];
		
		$result = mysqli_query($mysqli, "SELECT * FROM $tabla WHERE id=$id");
		
		while($res = mysqli_fetch_array($result))
		{
			$Nombre = $res['Nombre'];
			$Tipo = $res['Tipo'];
			$Tier = $res['Tier'];
		}
		?>

		<a class="btn btn-primary" href="index.php">Inicio</a>
			
		<form action="edit.php" method="post" name="form1">
			
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" id="Nombre" name="Nombre" class="form-control"  value="<?php echo $Nombre; ?>">
			</div>
			
			<div class="form-group">	
				<label for="Tipo">Tipo</label>
				<input type="text" id="Tipo" name="Tipo" class="form-control" value="<?php echo $Tipo; ?>">
			</div>
			
			<div class="form-group">
				<label for="Tier">Tier</label>
				<input type="text" id="Tier" name="Tier" class="form-control" value="<?php echo $Tier; ?>">
			</div>
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			<button class="btn btn-primary" type="submit" name="update">Modificar</button>

		</form>
	</div>
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
