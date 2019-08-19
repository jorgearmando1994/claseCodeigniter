<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial=scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=adge">
	<title>Document</title>
</head>
<body>
	 Suma de dos numeros	 
	 <form action="<?= base_url()?>index.php/suma/sumarNumeros" method="post">
		Ingrese el primer numero
		<input type="text" name="numero1" id="">
		</br>
		Ingrese el segundo numero
		<input type="text" name="numero2" id="">
		</br>
		<button type="submit">sumar</button>
		<a href="<?= base_url()?>"><button type="button">Atras</button></a>
	 </form>	 

</body>
</html> 