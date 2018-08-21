<?php
session_start();
  include_once "header.php";
  include_once "includes/dbh.inc.php";
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
?>
<style>
.Background {
	background-color: white;
	width: 100%;
	height: 100%;
}
</style>

<div class="container background" style="max-width:100% !important; padding:10px;">
<div class="container-fluid ">
 <?php   
        if(!empty($_SESSION['shopping_cart'])){
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product):
        ?>  
	   	 	</div>
		<div class="row" style="margin-top:10px; margin-left:2px;">
	         <img src="<?php echo $product['image']; ?>" height="40%" width="15%" class="img-fluid img-fluid-cart" />
			 <div class="col-xs-5"> <?php echo $product['name']; ?>
	             </br>
				 <p><?php echo $product['quantity']; ?>/st 
	           </br>
	           <?php echo $product['price']; ?> Kr/st 
	           </br>
	           </br>
			    <?php echo $product['name']; ?> : <?php echo number_format($product['quantity'] * $product['price'], 2); ?>kr</P>
			  </div>
			  <div class="col-xs-1">
	               <a href="cashout.php?action=delete&id=<?php echo $product['id']; ?>">
	                    <div class="btn btn-danger btn-cart">Remove</div>
	               </a>
				   </div>
				   <div class="col-xs-2">
				   </div> 
	         <br>
	         <br>
	    
	    
	        <?php  
	                  $total = $total + ($product['quantity'] * $product['price']);  
	             endforeach;  
	        ?>  
			</div>
	        <tr>  
	             <td colspan="3" align="right"><h5> Total </td>  
	             <td align="right"><?php echo number_format($total, 2); ?> Kr</td>  
	             <td></td>  </h5>
	        </tr>  
	        <tr>
	            <!-- Show checkout button only if the shopping cart is not empty -->
	            <td colspan="5">
	             <?php 
	                if (isset($_SESSION['shopping_cart'])):
	                if (count($_SESSION['shopping_cart']) > 0):
	             ?>
	                <div class="modal-footer">
					<div class="btn btn-primary float-right fixed-bottom" data-toggle="modal" data-target="#bobodada"> pay & confirm order</div>

  <!-- The Modal -->
  <div class="modal fade" id="bobodada">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Instruktioner</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

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