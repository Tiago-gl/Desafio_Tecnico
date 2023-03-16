<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Candidato</title>
    <style>
        html, body {
            background-color: #98e9dec2;
            color: #859197;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
                height: 100vh;
            }

        .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

        .position-ref {
                position: relative;
            }

        .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

        .content {
                text-align: center;
            }

        .title {
                font-size: 84px;
            }
    </style>
</head>

<body>
	<h1>Cadastro de Candidato</h1>
	<form action="processa_cadastro.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br><br>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="telefone">Telefone:</label>
		<input type="text" id="telefone" name="telefone" required><br><br>

		<label for="habilidades">Habilidades:</label>
		<textarea id="habilidades" name="habilidades" required></textarea><br><br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html><?php /**PATH C:\tuto\resources\views/candidatos.blade.php ENDPATH**/ ?>