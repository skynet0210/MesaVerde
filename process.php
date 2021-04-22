<?php
include('include/function.php');
include('include/conexion.php');
abrir_conexion();//Abre la conexion a la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$cantidad = $_POST["cantidad"];

	$product_id=base64_decode(($_POST['id']));//Descodifica la variable con base64_decode
	$product_id=intval($product_id);//Convierto el valor recibido en un entero
	//A continuacion realizar una consulta a la base de datos
	//Para verificar el valor pasado
	$data = array('product_id' => $product_id);
	$query = Select_Record_By_One_Filter($data, 'tbl_product_detail');
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$result = $query->fetch();
	$product_name = $result['product_name'];//Nombre del producto
	$product_price = $result['product_price'];//Precio del producto
	$product_currency = $result['product_currency'];//Moneda del producto
		$total = $cantidad * $product_price;
	cerrar_conexion();//Cierro la conexion a la base de datos


	//URL Paypal Modo pruebas.
	$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/websc';
	//URL Paypal para Recibir pagos
	//$paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
	//Correo electronico del comercio.
     $merchant_email = 'mauro.02.10.1994-facilitator@gmail.com';
	//Pon aqui la URL para redireccionar cuando el pago es completado
	$cancel_return = "http://localhost/mesaverde2/pagopaypal.php";
	//Colocal la URL donde se redicciona cuando el pago fue completado con exito.
	$success_return = "http://localhost/mesaverde2/success.php";
?>
<div style="margin-left: 40%"><img src="images/processing_animation.gif"/>
<form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="cancel_return" value="<?php echo $cancel_return ?>">
<input type="hidden" name="return" value="<?php echo $success_return; ?>">
<input type="hidden" name="business" value="<?php echo $merchant_email; ?>">
<input type="hidden" name="lc" value="C2">
<input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
<input type="hidden" name="item_number" value="<?php echo $product_id; ?>">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="hidden" name="currency_code" value="<?php echo $product_currency; ?>">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="quantity" value="<?php echo $cantidad; ?>">
<input type="hidden" name="no_note" value="0">
</form>
<script type="text/javascript">
document.myform.submit();
</script>
<?php

} else {
	header("location:pagopaypal.php");
	exit;
}
?>
