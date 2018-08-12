<?php
  include_once "header.php";
?>

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


if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<div class="container" style="max-width:100% !important;">
    <div class="container-fluid maggeonly">
            <div class="row" style="margin-top:10px; background-color:lavender;">

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
                           <img style="margin-top: 10px" src="<?php echo $product['image']; ?>" class="img-fluid" />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4> <?php echo $product['price']; ?>kr +pant</h4>
                          <p class="text-grey">Warning this product barely increase mental or pysical preformance. This product can also cause harm to your health</p>
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
</div>
</div>
</div>

        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>  
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['quantity']; ?></td>  
           <td>$ <?php echo $product['price']; ?></td>  
           <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="index.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">$ <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="#" class="button">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div>
        </div>
</body>
</html>
