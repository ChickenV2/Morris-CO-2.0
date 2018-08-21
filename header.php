<head>
    <title>Business Only</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icononly.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    .norder{
    margin-top:5px; 
    margin-bottom:5px; 
    margin-right:10px;
    border-style: groove;
    border-color: rgb(192, 181, 181);
}
.fonttext{
  font-size: 112%
}
@media screen and (min-width: 26px) and  (max-width: 768px) {
  body {
    background-color:red;
  
  }
  .sides{
    margin-left: 50px;
    margin-right: 50px;
  }
    .imgh{
      height: 400px;
    }
    p {
    font-size: 9px;
}
  
  }
@media screen and (min-width: 76px) and  (max-width: 768px) {
  body {
    background-color: orange;
  
  }
  .sides{
    margin-left: 50px;
    margin-right: 50px;
  }
    .imgh{
      height: 400px;
    }
  
  }
  
@media screen and (min-width: 768px) and  (max-width: 992px) {
  body {
    background-color: yellowgreen;
  }
}
@media screen and (min-width: 992px) {
  body {
    background-color: yellowgreen;
  }
}
@media screen and (min-width: 1200px) {
  body {
    background-color: yellowgreen;
  }
}
.top-cart a .cartCount {
    background: #e95144!important;
    color: #fff;
    position: absolute;
    right: 10px;
    top: 15px!important;
    line-height: 20px;
    height: 20px;
    width: 20px;
    margin:0;
    padding: 0;
    /* -webkit-border-radius: 50%; */
    border-radius: 100%;
    /* border-radius: 100%; */
}
.top-cart a .cartCount {
    top: 15px;
}
.top-cart a {
    text-align: center;
    /* position: relative; */
    /* letter-spacing: 0.02em; */
    color: #323232;
    font-size: 12px;
}
.img-fluid-cart {
  height: 20%;
}
.btn-cart {
  float: right;
}
.Empty-Cart-Text {
  font-family: ariel;
  float: center;
}
  </style>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
          <!-- Brand/logo -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
       
          <a class="navbar-brand" style="margin-right: 10px" href="index.html">   <img src="icononly.png" width="30" height="30" class="d-inline-block align-top" alt=""> Morris & co shop</a>
          
          <!-- Links -->
       
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        
          <ul class="navbar-nav">
            <li class="nav-item nav-link">
              <a class="nav-link" href="#">Energy drinks</a>
            </li>
            <li class="nav-item nav-link">
              <a class="nav-link" href="#">Noodles</a>
            </li>
            <li class="nav-item nav-link">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
          </div>
        </div>
        <form class="form-inline my-2 my-lg-0">    
               <img src="logicon.png" class="my-2 my-sm-0" style="margin-right: 15px;" width="30" height="30">
               <img src="cart.svg" class="mr-sm-2"data-toggle="modal" data-target="#myModal" width="30" height="30">
              <p class="top-cart">
                <a href="javascript:void(0)" class="cartToggle">  <!--Lägga java här-->
               <span class="cartCount"data-toggle="modal" data-target="#myModal" stlye="margin-right:10px">0</span>
                </a>
              </p>
          </div>
          </form>
        </nav>
<!-- Modal when you press add to cart -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Läs detta först</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Eftersom vi har problem med att verifera betalning kan de ta ett tag innan du får din vara. Men vi jobbar på detta problem
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fortsätt Handla</button>
           <a href="cashout.php" class="btn btn-primary" style="margin-top:5px;">Gå till kassan</a>
          <button type="button" class="btn btn-primary" >Gå till kassan</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal when you press on cart -->

<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">awerhqerh
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">shopping bag</h5>
            <button type="button1" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
<!-- Här börjar carten -->
       <?php
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
        'image' => filter_input(INPUT_POST, 'image'),
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
        'image' => filter_input(INPUT_POST, 'image'),
        'quantity' => filter_input(INPUT_POST, 'quantity')
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
        ?>
        
        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">


        <!--här börjar containern-->  
  
        
        <?php   
        if(!empty($_SESSION['shopping_cart'])){
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product):
        ?>  
              <div class="container" style="max-width:100% !important;">
    <div class="container-fluid">
    <div class="row" style="margin-top:5px">
           <img src="<?php echo $product['image']; ?>" height="130px" width="132px" class="img-fluid img-fluid-cart col-md-3" />
           <div class="col-md-6"> <?php echo $product['name']; ?> 
             </br>
           <?php echo $product['quantity']; ?>/st 
           </br>
           <?php echo $product['price']; ?> Kr/st
           </br>
           </br>
          <?php echo $product['name']; ?> : <?php echo number_format($product['quantity'] * $product['price'], 2); ?>kr
           </div> 
           <div class="col-md-3">
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
          <button type="button" class="btn btn-default" data-dismiss="modal">fortsätt handla</button>
         <a href="cashout.php" class="btn btn-primary" style="margin-top:5px;">Gå till kassan</a>

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
        </table>  
         </div>
        </div>

        
      </div>
    </div>
  </div>
</div>

</script>
</body>
</html>