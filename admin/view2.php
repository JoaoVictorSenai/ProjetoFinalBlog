<?php

include('../config/connection.php');
include('session.php');

$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<?php  include "header.php"; ?>
	<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
		<!-- nome aqui, n sei como -->
        <h2>Bem vindo</h2>
        <p><a href="?sair">Deslogar</a></p>
            <ul class="nav flex-column">
               	<li class="nav-item">
                    <a href="" class="nav-item">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-item">Inserir</a>
                </li>
            </ul>
    </nav>

	<main class="col-md-9 col-lg-10">
		<div class="container">
			<h1 id="main-title">Meus Posts</h1>
				<table class="table" id="contacts-table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Títulos</th>
							<th scope="col">Descrições</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($results as $post): ?>
							<tr>
								<td scope="row"><?=$post["id"]?></td>
								<td scope="row"><?=$post["title"]?></td>
								<td scope="row"><?=$post["description"]?></td>
								<td class="actions">
									<a href="viewBlog.php?id=<?= $post["id"] ?>">
										Ver
									</a>
									<a href="editar.php?id=<?=$post["id"]?>">
										Editar
									</a>
									<a href="delete.php?id=<?=$post["id"]?>">
										Deletar
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
<?php  include "footer.php"; ?>