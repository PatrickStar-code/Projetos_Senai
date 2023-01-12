<?php
include("../CRUD/top_bot/top.php");
include("concecionaria.class.php");

session_start();
?>

<!-- component -->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
<div class="flex items-center justify-center min-h-screen bg-gray-900">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-gray-500">
					<tr>
						<th class="p-3">Carro</th>
						<th class="p-3 text-left">Capacidade</th>
						<th class="p-3 text-left">Ano</th>
						<th class="p-3 text-left">Motorização</th>
						<th class="p-3 text-left">Preço</th>
						<th class="p-3 text-left">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (isset($_SESSION['array'])) {
						foreach ($_SESSION['array'] as $posicao => $carro) {
					?>
							<tr class="bg-gray-800">
								<td class="p-3">
									<div class="flex align-items-center">
										<img class="rounded-full h-12 w-12  object-cover" src="https://images.vexels.com/media/users/3/127711/isolated/preview/384e0b3361d99d9c370b4037115324b9-icone-de-carro-vintage-plano.png" alt="unsplash image">
										<div class="ml-3">
											<div class=""><?php echo $carro->marca	?></div>
											<div class="text-gray-500"><?php echo $carro->cat	?></div>
										</div>
									</div>
								</td>
								<td class="p-3">
									<?php echo ($carro->cap) ?>
								</td>
								<td class="p-3 font-bold">
									<?php echo ($carro->ano) ?>
								</td>
								<td class="p-3">
									<?php echo ($carro->mot) ?>
								</td>
								<td class="p-3 ">
									<?php echo ($carro->preco) ?>
								</td>
								<td class="p-3 ">

									<a href="editar.php?pos=<?php echo $posicao ?>" class="text-gray-400 hover:text-gray-100  mx-2">
										<i class="material-icons-outlined text-base">edit</i>
									</a>
									<a href="apagar.php?posi=<?php echo $posicao ?>" class="text-gray-400 hover:text-gray-100  ml-2">
										<i class="material-icons-round text-base">delete_outline</i>
									</a>
								</td>
							</tr>
					<?php
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>


<?php
include("../CRUD/top_bot/bot.php");
?>