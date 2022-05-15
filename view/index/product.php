<?php
$product = $data['product'];
?>
<section class="col 13">
    <img width="100px" height="100px" src="view/admin/product/big/<?php echo $product['imageBig'] ?>">
    <img width="50px" height="50px" src="view/admin/product/fancy/<?php echo $product['image1'] ?>">
    <img width="50px" height="50px" src="view/admin/product/fancy/<?php echo $product['image2'] ?>">
    <img width="50px" height="50px" src="view/admin/product/fancy/<?php echo $product['image3'] ?>">
    <img width="50px" height="50px" src="view/admin/product/fancy/<?php echo $product['image4'] ?>">
    <h4><?php echo $product['title'] ?></h4>
    <h4><?php echo $product['price'] ?></h4>
    <h5><?php echo $product['summary'] ?></h5>
    <h5><?php echo $product['content'] ?></h5>
</section>
