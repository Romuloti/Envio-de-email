<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<form action="email.php" method="GET">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Assunto</label>
						<input type="text" name="assunto" class="form-control">
					</div>
					<div class="form-group">
						<label>Mensagem</label>
						<textarea name="mensagem" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
