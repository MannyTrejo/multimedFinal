<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Register New Student</title>
</head>

<body>
	<div class="container" style="width:400px;">
		<div class="row">
			<div class="col-sm">
				<div class="card bg-info">
					<div class="card-body">
<form action="save.php" method="post">
	<br />Register New Student<br />
	<p> </p>
	<p class="auto-style2"> Name:
	<input name="Name" style="width: 222px" type="text" /> <br /><br /> User:
	<input class="auto-style1" name="User" style="width: 217px" type="text" />
	<br />
	<br />Sexo: <select name="Sex" class="auto-style4">
				<option value="1">Masculino</option>
				<option value="2">Femenino</option>
			</select> Edad:<input name="Age" type="text" maxlength="2" style="width: 30px;"/></p>
	<p class="auto-style2">Carrera:  <select name="Carrera" >
	<option value="1">Ing. en Videojuegos</option>
	<option value="2">Medios Interactivos</option>
	<option value="3">Psicologia</option>
	<option value="4">Filosofia</option>
	<option value="5">Biologia</option>
	<option value="6">Medicina</option>
	</select> </p>
	<p class="auto-style2"> Horas Totales:
	<input name="Hours" type="text" style="width: 60px;" /><br />
	<br />
	Dias de Clase
	<br />
	Lunes: <input name="Days" type="checkbox" value="Lunes" /> <br />
	Martes:<input name="Days" type="checkbox" value ="Martes"/>

	<br />
	Miercoles:<input name="Days" type="checkbox" value="Miercoles" /> <br />
	Jueves:<input name="Days" type="checkbox"  value="Jueves"/> <br />
	Viernes:<input name="Days" type="checkbox" value="Viernes" />
	
</br><input name="Ingresa" style="width: 142px" class="btn btn-primary" type="submit" value="Ingresa" /></p>
	</form>
	</body>
	</html>