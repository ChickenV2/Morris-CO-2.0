<?php
	include_once "includes/dbh.inc.php";
	session_start();
	//session_destroy();
	$product_ids = array();

	//Kollar ifall Add to cart knabben har blivit tryckt
	if(filter_input(INPUT_POST, 'add_to_cart')){
		//Ifall det redan fins en shopping cart
		if(isset($_SESSION['shopping_cart'])){
			//Keep track utav hur många saker som finns i shopping cart ,en
			$count = count($_SESSION['shopping_cart']);

			//För att matcha product id med array key
			$product_ids = array_column($_SESSION['shopping_cart'], 'id');

			if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
				$_SESSION['shopping_cart'][$count] = array(
				'id' => filter_input(INPUT_GET, 'id'),
				'name' => filter_input(INPUT_POST, 'name'),
				'price' => filter_input(INPUT_POST, 'price'),
				'quantity' => filter_input(INPUT_POST, 'quantity')
			);
			} else { //Produkt finns redan läg då på i cart
				// matchar arry ken till id på produkten som ska läggas i cart
				for ($i = 0; $i < count($product_ids); $i++){
					if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
					// Lägger till antal till den redan existerande antalet
					$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
					}
				}
			}

		}else { //Ifall det inte fins någon shopping cart så gör den en
			$_SESSION['shopping_cart'][0] = array(
				'id' => filter_input(INPUT_GET, 'id'),
				'name' => filter_input(INPUT_POST, 'name'),
				'price' => filter_input(INPUT_POST, 'price'),
				'quantity' => filter_input(INPUT_POST, 'quantity'),
			);
		}
	}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	$query = 'SELECT * FROM products ORDER by id ASC';
	$result = mysqli_query($conn, $query);
	//img-fluid
	if ($result):
		if(mysqli_num_rows($result)>0):
			while($product = mysqli_fetch_assoc($result)):
				?>
				<div class="col-sm-4 col-md-3" >
                    <form method="post" action="index.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-fluid" />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4>$ <?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                        </div>
					</form>
				</div>
				<?php
			endwhile;
		endif;
	endif;

?>

</body>
</html>