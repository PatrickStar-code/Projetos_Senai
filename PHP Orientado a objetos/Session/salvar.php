<?php
include("../Header_footer/header.php");
include("../AT-05/carros.class.php");

session_start();

if (!isset($_SESSION['array'])) {
	$_SESSION['array'] = array();
}


$marca_carro = $_POST["marca"];
$ano_carro = $_POST["ano"];
$cat_carro = $_POST["cat"];
$motorizacao_carro = $_POST["motorizacao"];
$cor_carro = $_POST["cor"];
$cap_carro = $_POST["cap"];
$preco_carro = $_POST["preco"];
$carro = new carros($marca_carro, $ano_carro, $cat_carro, $motorizacao_carro, $cor_carro, $cap_carro, $preco_carro);
array_push($_SESSION['array'], $carro);
?>

<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<div class="flex items-center justify-center min-h-screen bg-gray-900">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-gray-500">
					<tr>
						<th class="p-3">Carro</th>
						<th class="p-3 text-left">Capacidade</th>
						<th class="p-3 text-left">Ano </th>
						<th class="p-3 text-left">Motorização</th>
						<th class="p-3 text-left">Preço</th>
					</tr>
				</thead>
				<tbody>
				<?php	foreach ($_SESSION['array'] as $carro) { ?>
					<tr class="bg-gray-800">	
						<td class="p-3">
							<div class="flex align-items-center">
								<img class="rounded-full h-12 w-12  object-cover" src="https://png.pngtree.com/png-vector/20190215/ourmid/pngtree-vector-car-icon-png-image_533420.jpg" alt="unsplash image">
								<div class="ml-3">
									<div class="text-gray-500"><?php echo $carro -> marca?></div>
									<div class="text-gray-500"> <?php echo$carro->cat ?></div>
								</div>
							</div>
						</td>
						<td class="p-3">
						<?php echo($carro->cap)?>
						</td>
						<td class="p-3 font-bold">
						<?php echo($carro->ano)?>
						</td>
						<td class="p-3">
						<?php echo($carro->motorizacao)?>
						</td>
						<td class="p-3 ">
						<?php echo($carro->preco)?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
				<>
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

<?php include("../Header_footer/footer.php") ?>