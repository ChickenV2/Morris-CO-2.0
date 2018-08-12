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
media screen and (min-width: 76px) and  (max-width: 768px) {
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

  </style>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
          <!-- Brand/logo -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
       
          <a class="navbar-brand" style="margin-right: 10px" href="#">   <img src="icononly.png" width="30" height="30" class="d-inline-block align-top" alt=""> Morris & co shop</a>
          
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
          <button type="button" class="btn btn-primary">Gå till kassan</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal when you press on cart -->

<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <!-- Product #2 -->
        <div class="item">
          <div class="image">
            <img src="item-2.png" alt=""/>
          </div>
  
          <div class="description">
            <span>Maison Fortinis</span>
            <span>ortens Sneakers</span>
          </div>
  
          <div class="quantity">
            <button class="plus-bnt" type="button" name="button">
              <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-bnt" type="button" name="button">
              <img src="minus.svg" alt="" />
            </button>
          </div>
          <div class="buttons1">
              <span class="delete-btn1"></span>
            </div>
          <div class="total-price">$870</div>
        </div>
  
        <!-- Product #3 -->
        <div class="item">

  
          <div class="image">
            <img src="item-3.png" alt="" />
          </div>
  
          <div class="description">
            <span>Morrans Legacy</span>
            <span>Brushed Scarf</span>
          </div>
  
          <div class="quantity">
            <button class="plus-bnt" type="button" name="button">
              <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-bnt" type="button" name="button">
              <img src="minus.svg" alt="" />
            </button>
          </div>
          <div class="buttons1">
              <span class="delete-btn1"></span>
            </div>
          <div class="total-price">$349</div>
        </div>
      </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">fortsätt handla</button>
          <button type="button" class="btn btn-primary">Gå till kassan</button>

        </div>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">
  $('.minus-bnt').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value > 1) {
      value = value - 1;
    } else {
      value = 0;
    }

    $input.val(value);

  });

  $('.plus-bnt').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value < 100) {
      value = value + 1;
    } else {
      value =100;
    }

    $input.val(value);
  });
</script>
</body>
</html>

