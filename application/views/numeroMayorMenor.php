<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial=scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=adge">
	<title>Document</title>
</head>
<body>
	 numero mayor y menor de 10 numeros	 
	 <form action="<?= base_url()?>index.php/numeromayormenor/verificarmayormenor" method="post">
		Ingrese el primer numero
		<input type="text" name="numero1" id="">
		</br>
		Ingrese el segundo numero
		<input type="text" name="numero2" id="">
		</br>
		Ingrese el tercer numero
		<input type="text" name="numero3" id="">
		</br>
		Ingrese el cuarto numero
		<input type="text" name="numero4" id="">
		</br>
		Ingrese el quinto numero
		<input type="text" name="numero5" id="">
		</br>
		Ingrese el sexto numero
		<input type="text" name="numero6" id="">
		</br>
		Ingrese el septima numero
		<input type="text" name="numero7" id="">
		</br>
		Ingrese el octavo numero
		<input type="text" name="numero8" id="">
		</br>
		Ingrese el noveno numero
		<input type="text" name="numero9" id="">
		</br>
		Ingrese el decimo numero
		<input type="text" name="numero10" id="">
        </br> 
		<button type="submit">hallar numero mayor y menor</button>
		<a href="<?= base_url()?>"><button type="button">Atras</button></a>
	 </form>	 

</body>
</html> 