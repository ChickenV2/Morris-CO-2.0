<?php
session_start();
  include_once "header.php";
  include_once "includes/dbh.inc.php";

?>
<div class="container" style="max-width:100% !important;">
    <div class="container-fluid maggeonly">
            <div class="row" style="margin-top:5px">

<?php
  $query = 'SELECT * FROM products ORDER by id ASC';
  $result = mysqli_query($conn, $query);
  //img-fluid
  if ($result):
    if(mysqli_num_rows($result)>0):
      while($product = mysqli_fetch_assoc($result)):
        ?>
        <div class="col-md-6 col-lg-4 col-xl-3" style="padding:7px;">
                    <form method="post" action="index.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $product['image']; ?>" class="img-fluid" />
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4> <?php echo $product['price']; ?>kr +pant</h4>
                          <p class="text-grey">Warning this product barely increase mental or pysical preformance. This product can also cause harm to your health</p>
                              <select name="quantity" class="form-control" value="1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3<option>
                              </select>
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                             <input type="hidden" name="image" value="<?php echo $product['image']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Add to Cart" />
                                   <a href="info/<?php echo $product['info'];?>" class="btn btn-primary" style="margin-top:5px;">product info</a>
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

</body>
</html>
