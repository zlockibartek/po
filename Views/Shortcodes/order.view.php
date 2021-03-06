<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<form method="POST" id="orderForm" action="">
	<div class="shopping-container">
		<div class="card shopping-cart">
			<div class="card-header bg-dark text-light">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				<div class="clearfix"></div>
			</div>
			<div id="productContainer" class="card-body">

			</div>

			<div class="card-footer">
				<div class="pull-right" style="margin: 10px">
					<input type="hidden" name="price">
					<input type="hidden" name="weight">
					<input type="hidden" name="products">
					<input type="submit" id="summary" value="Podsumowanie" class="btn btn-success pull-right">
					<div class="pull-right" style="margin: 5px">
						Suma: <b id="totalPrice"></b> zł
					</div>

				</div>
				<div class="pull-left" style="margin: 5px">
					Łączna waga: <b id="totalWeight"></b> g
				</div>
			</div>
		</div>

	</div>
</form>