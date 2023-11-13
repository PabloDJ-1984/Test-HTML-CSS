<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM $tabla ORDER BY id DESC");
?>

<html>
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="crud.css" rel="stylesheet" type="text/css" >
	<title>Blindados</title>
	<link href="fondo.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
<section id="cabecera" class="d-flex align-items-center">
	<div class="container-fluid">
		<img src="../imagenes/85614.jpg" class="img-fluid" alt="">
		
	</div>
</section>
	<section id="centro" class="d-flex align-items-center">
	<div class="container">
		<p></p>
		<a class="btn btn-primary" href="add.html">Añadir blindado</a>
	
		<table class="table table-striped table-dark">
	
		<tr>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Tier</td>
			<td>Modificar</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['Nombre']."</td>";
			echo "<td>".$res['Tipo']."</td>";
			echo "<td>".$res['Tier']."</td>";	
			echo "<td><a class=\"btn btn-light bnt-sm\" href=\"edit.php?id=$res[id]\">Editar</a> | <a class=\"btn btn-light bnt-sm\" href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Estás seguro?')\">Borrar</a></td>";	
		}
		?>
		</table>
	</div>
	</section>
		<section id="pie" class="d-flex align-items-center">
			<div class="container">
				<p></p>
			<img src="../imagenes/tiger.jpg" class="img-fluid" alt="">
			<p></p>
				<div class="titulo">
					<h1>
						Tipos de blindados
					</h1>
				</div>
					<div class="Ligeros">
						<h4>
							Tanques Ligeros
						</h4>
					       <p>
						   Los tanques ligeros tienen poco blindaje, pero gran un rango de visión y mucho ocultamiento. El objetivo principal de los tanques ligeros es detectar a los vehículos enemigos y brindar a los aliados información sobre sus posiciones. Pueden disparan de cerca contra enemigos lentos y poco blindados e inmovilizar a los vehículos enemigos que tienen en su rango de visión dañándoles las orugas.
							</p>
							<img src="../imagenes/AMX1375.jpeg" class="img-fluid" alt="">
							<p>AMX 13 75</p>
					</div>
					<div class="Medianos">
						<h4>
							Tanques Medianos
						</h4>
					       <p>
						   El rol de los tanques medianos en batalla depende de las características del vehículo particular de este tipo. Los tanques medianos con blindaje promedio, un buen cañón y maniobrables proveen fuego de apoyo y cubren a los aliados. Estos vehículos dañan a los enemigos que tienen en su rango de visión. En combates cercanos, estos tanques luchan contra un único objetivo en caso de que puedan flanquearlo. Debido a su maniobrabilidad y buen ocultamiento, ese tipo de tanques medianos a menudo golpean primero a sus rivales. El apoyo a la primera línea lo llevan a cabo los tanques medianos versátiles con buen blindaje frontal en su chasis o torreta y por los medianos poco maniobrables pero con buen blindaje. Los tanques de apoyo son más efectivos en distancias cortas e intermedias, donde detectan a los enemigos y los inmovilizan.
							</p>
							<img src="../imagenes/CS44.jpg" class="img-fluid" alt="">
							<p>CS44</p>
					</div>
					<div class="Pesados">
						<h4>
							Tanques Pesados
						</h4>
					       <p>
						   Los tanques pesados pelean de cerca. Debido a su confiable blindaje y sus poderosos cañones, bloquean con efectividad los proyectiles del enemigo. Estas características les permiten avanzan por las distintas líneas de ataque y resistir el avance enemigo rechazando gran parte del daño. Los tanques pesados que tienen sistemas de recarga automática se caracterizan por tener cañones mediocres pero con mucha capacidad de infligir daño. Estos factores les permiten apoyar a los aliados mientras avanzan por las líneas de ataque principales.


							</p>
							<img src="../imagenes/Type5.jpg" class="img-fluid" alt="">
							<p>Type-5 Heavy </p>
					</div>
					<div class="Cazatanques">
						<h4>
							Cazatanques
						</h4>
					       <p>
						   Los cazatanques con parámetros promedio de blindaje apoyan a los vehículos aliados. Los que tienen un gran nivel de ocultamiento, un cañón preciso y muy poco blindaje sirven como francotiradores. Estos vehículos detectan y atacan a los objetivos desde cualquier distancia y estando cubiertos. Los cazatanques con sistema de recarga automática sirven como vehículos de apoyo, mientras rechazan a las fuerzas enemigas y bloquean daño.


							</p>
							<img src="../imagenes/Controcarro.jpg" class="img-fluid" alt="">
							<p>Controcarro 3 Minotauro</p>
					</div>
					<div class="Artilleria autopropulsada">
						<h4>
							Artillería Autopropulsada
						</h4>
					       <p>
						   Las AAP son buenos vehículos de apoyo ya que disparan a los enemigos lejanos con una elevada trayectoria. Estos vehículos cuentan con un cañón poderoso, blindaje débil y poca movilidad. Las AAP son vehículos con varios roles que pueden usar distintos tipos de proyectil. Los proyectiles estándar altamente explosivos pueden dañar o aturdir a un grupo de vehículos. Los proyectiles altamente explosivos alternativos no aturden a los enemigos, pero son más que efectivos para disparar a vehículos que no tengan demasiada protección de blindaje. Las AAP también pueden dañar los módulos internos del enemigo y herir a la tripulación. Algunas AAP pueden usar proyectiles antitanque penetrantes y altamente explosivos, característica que resulta muy eficaz contra vehículos lentos y bien blindados.


							</p>
							<img src="../imagenes/Object261.jpg" class="img-fluid" alt="">
							<p>Obj. 261</p>
					</div>
			</div>
		</section>
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
