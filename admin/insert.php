<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- JS -->
	<script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
	<script type="text/javascript">
		tinymce.init({
		  selector: '#basic-conf',
		  width: 600,
		  height: 300,
		  plugins: [
		    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
		    'table emoticons template paste help'
		  ],
		  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
		    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
		    'forecolor backcolor emoticons | help',
		  menu: {
		    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
		  },
		  menubar: 'favs file edit view insert format tools table help',
		  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
		});
	</script>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<!-- BootStrap -->
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<title>Upload de imagens</title>
</head>
<body>
	<main>
		<div class="container">
			<form class="row g-3" action="envia.php" method="POST" enctype="multipart/form-data">
			  <div class="col-md-4">
			    <label for="validationServer01" class="form-label">Título</label>
			    <input type="text" name="title" class="form-control" id="validationServer01" required>
			    <div class="invalid-feedback">
			      Entre com um título.
			    </div>
			  </div>
			  <div class="col-md-4">
			    <label for="validationServer02" class="form-label">Data</label>
			    <input type="date" name="date" class="form-control" id="validationServer02" required>
			    <div class="invalid-feedback">
			      Selecione a data.
			    </div>
			  </div>
			  <div class="mb-3">
			    <label for="validationTextarea" class="form-label">Descrição</label>
			    <textarea name="description" class="form-control" id="validationTextarea" placeholder="Digite o Texto Aqui." required></textarea>
			    <div class="invalid-feedback">
			      Entre um texto descritivo da imagem.
			    </div>
			  </div>
			  <div class="mb-3">
			    <input type="file" name="image" class="form-control" aria-label="file example" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image" required>
			    <div class="invalid-feedback">Selecione uma imagem</div>
			  </div>
			  <div class="col-12">
			    <button class="btn btn-primary" type="submit">Enviar</button>
			  </div>
			</form>
		</div>
	</main>
</body>
</html>