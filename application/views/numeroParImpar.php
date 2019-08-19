<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device=width, initial=scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=adge">
	<title>Document</title>
</head>
<body>
	 numero par e impar 	 
	 <form action="<?= base_url()?>index.php/numeroparimpar/verificarParImpar" method="post">
		Ingrese el numero
		<input type="text" name="numero" id="">
        </br> 
		<button type="submit">verificar par o impar</button>
		<a href="<?= base_url()?>"><button type="button">Atras</button></a>
	 </form>	 

</body>
</html> 