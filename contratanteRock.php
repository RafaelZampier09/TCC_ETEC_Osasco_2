<!doctype html>
<html>
	<head>
		<title> CADASTRAR CONTRATO </title>
		<meta charset="utf-8">
	</head>
	
	<body>
	    <div>
		<form name="evento" method="post" action="cadastradoRock.php">
		<a>logo do site</a><a>______________________________________________________________CADASTRAR
	_______________________________________________________________</a><a>logo do site</a><br><br><br>
	    <h2>CADASTRE SUAS INFORMAÇÕES</h2><br>
		<h4>Nome: <input type="text" name="nome" required></h4>
		<h4>Estado: <input type="text" name="estado" required></h4>
		<h4>Cidade: <input type="text" name="cidade" required></h4>
		<h4>Bairro: <input type="text" name="bairro" required></h4>
		<h4><label for="instrumentos">Instrumento que toca:</label>
		<select name="instrumento" id="instrumentos" required>
			<option value="baixo">Baixo</option>
			<option value="bateria">Bateria</option>
			<option value="guitarra">Guitarra</option>
			<option value="teclado">Teclado</option>
			<option value="violao">Violão</option>
			<option value="vocal">Vocal</option>
		</select></h4>
		<h4>Email: <input type="email" name="email" required></h4>
		<h4><label for="tele">Telefone:</label>
		<input type="tel" id="tele" name="tele" placeholder="(11)55555-5555" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required></h4>
		<h4> Qual o valor do aluguel (hora):<input type="text" name="valor" required></h4>
		<h4>Senha do cadastrante: <input type="password" name="senha" required></h4>
		<h4>Confirme sua senha: <input type="password" name="senha2" required></h4>
		<h4><label for="story" required>Faça uma descrição sobre você:</label></h4>
		<textarea id="story" name="story" rows="5" cols="33"></textarea><br>
		<h4>Coloque um video seu para demonstração:</h4>
		<h4><label for="myfile" required>Envie aqui:</label>
		<input type="file" id="myfile" name="myfile" multiple></h4><br>
		<input type="submit" value="PROXIMO">
		</form>
		</div>
	</body>

</html>