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
	height: auto;
	min-height:1000px;
}
img{
    max-width:140px;
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
	         <img src="<?php echo $product['image']; ?>" width="15%" class=" img-fluid-cart" />
			 <div class="col-xs-5 breaker"> <?php echo $product['name']; ?>
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
	                    <div class="btn btn-danger btn-cart float-sm-right">Remove</div>
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
					</div> 
									</div> 
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
				<!-- PHP MAGIC MARTINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN -->
				<dt>Hej "namn" </dt>
					<br>
					swisha till <font color="blue">0767888844</font><br>
				<!-- PHP MAGIC MARTINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN -->
					denna summa pengar "summa"<br>
				<!-- PHP MAGIC MARTINNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN -->
					På meddelande skriv denna kod: <mark><abbr title="Ditt kundnummer så vi vet att de är din betalning">07685932GHWT</abbr></mark><br>
					<br>
					<h5>Viktigt!</h5><br>
					<font color="red">Klicka sedan på ready på våran hemsida och vänta i 10 sekunder och sedan skicka iväg din swish</font></p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">avbryt</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">ready</button>
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