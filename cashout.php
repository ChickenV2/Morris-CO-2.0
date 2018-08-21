<?php
session_start();
  include_once "header.php";
  include_once "includes/dbh.inc.php";

?>
<style>
.Background {
	background-color: white;
	width: 100%;
	height: 100%;
}

</style>


 <?php   
        if(!empty($_SESSION['shopping_cart'])){
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product):
        ?>  
	   <div class="Background">   	 	
	              <div class="container" style="max-width:100% !important;">
	    <div class="container-fluid">
	    <div class="row" style="margin-top:5px">
	           <img src="<?php echo $product['image']; ?>" height="20%" width="8%" class="img-fluid img-fluid-cart" />
	           <div class="col-md-3"> <?php echo $product['name']; ?> 
	             </br>
	           <?php echo $product['quantity']; ?>/st 
	           </br>
	           <?php echo $product['price']; ?> Kr/st
	           </br>
	           </br>
	          <?php echo $product['name']; ?> : <?php echo number_format($product['quantity'] * $product['price'], 2); ?>kr
	           </div> 
	           <div class="col-md-2">
	               <a href="index.php?action=delete&id=<?php echo $product['id']; ?>">
	                    <div class="btn btn-danger btn-cart">Remove</div>
	               </a>
	         <br>
	         <br>
	         </div>
	         </div>
	         </div>
	         </div>
	        <?php  
	                  $total = $total + ($product['quantity'] * $product['price']);  
	             endforeach;  
	        ?>  
	        <tr>  
	             <td colspan="3" align="right">Total</td>  
	             <td align="right"><?php echo number_format($total, 2); ?> Kr</td>  
	             <td></td>  
	        </tr>  
	        <tr>
	            <!-- Show checkout button only if the shopping cart is not empty -->
	            <td colspan="5">
	             <?php 
	                if (isset($_SESSION['shopping_cart'])):
	                if (count($_SESSION['shopping_cart']) > 0):
	             ?>
	                <div class="modal-footer">
	          <button type="button" class="btn btn-primary" data-dismiss="checkout">Proceed to checkout</button>
	         

	            </div>
	             <?php endif; endif; ?>
	            </td>
	        </tr>
	        <?php  
	        } else {
	          ?>
	          <p class="Empty-Cart-Text">Your Shopping cart is empty!</p>
	          <?php
	        }
	        ?>  
	</div>  
</body>
</html>
