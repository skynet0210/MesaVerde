<?php
include('include/function.php');
include('include/conexion.php');
abrir_conexion();//Abre la conexion a la base de datos

if (!empty($_REQUEST)) {
$product_no = $_REQUEST['item_number']; // ID del producto
$product_transaction = $_REQUEST['tx']; // ID de transacción Paypal
$product_price = $_REQUEST['amt']; // Monto recibido Paypal
$product_currency = $_REQUEST['cc']; // Moneda recibida de Paypal
$product_status = $_REQUEST['st']; // Estado del producto Paypal

$product_no = intval($product_no);
$data = array('product_id' => $product_no);
$query = Select_Record_By_One_Filter($data, 'tbl_product_detail');
$query->setFetchMode(PDO::FETCH_ASSOC);
$result = $query->fetch();
} else {
	header("location:inversors.html");
	exit;
}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pagos Pypal</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
<body>
<div class="row-fluid" id="products-columns">
		<h1 class="text-center">Mesa Verde Pagos Paypal</h1>

		<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-info">
		  <div class="panel-heading">
			<h4 class='text-center'>  Estado de pago</h4>
		  </div>
		  <div class="panel-body">
		  <?php
			if ($product_price == $result['product_price'] && $product_currency == $result['product_currency']) {
		  ?>
			<h3 class='text-success text-center'>Pago recibido exitosamente</h3>
			<p>Estado de la transacción: <?php echo $product_status;?></p>
			<p>Id de transacción: <?php echo $product_transaction;?></p>
			<p class="text-center">
				<a href="inversors.php.php" class="btn btn-primary btn-lg"> << Regresar a los productos</a>
			</p>
			<?php
			} else {
				?>
			<h3 class='text-danger text-center'>Pago falló</h3>
			<p>Estado de la transacción: Incompleto</p>
			<p>Id de transacción: <?php echo $product_transaction;?></p>
			<p class="text-center">
				<a href="inversors.php" class="btn btn-primary btn-lg"> << Regresar a los productos</a>
			</p>
				<?php
			}
			?>
		  </div>
		</div>

		</div>




</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
<?php cerrar_conexion(); ?>
