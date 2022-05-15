<section class="row">
    <?php
    $products = $data['products'];
    foreach ($products as $item) {
        ?>
        <section style="float: left">
            <img width="100px" height="100px" src="view/admin/product/big/<?php echo $item['imageBig'] ?>">
            <h4><?php echo $item['title'] ?></h4>
            <h4><?php echo $item['id'] ?></h4>
            <a href="<?php echo URL ?>Index/Product/<?php echo $item['id'] ?>" class="btn btn-success">جزئیات بیشتر</a>
        </section>
    <?php } ?>
</section>
<br><br><br><br><br><br><br><br><br><br><br>
<br>
<br>
<ul style="list-style: none; width: 500px; margin: 50px auto">
    <?php
    $count = $data['pagination'];
    $categoryId = $data['categoryId'];
    $countP = $data['count'];
    $perv = $countP - 1;
    $next = $countP + 1;
    ?>
    <?php
    if ($perv < 1) {
        ?>
        <li style="background-color: orangered; color: black; width: 30px; height: 20px"><a>perv</a></li>
    <?php } else { ?>
        <li style="background-color: green; width: 30px; height: 20px"><a
                    href="<?php echo URL ?>Index/Products/<?php echo $categoryId ?>/<?php echo $perv ?>">perv</a></li>

    <?php } ?>
    <?php
    for ($i = 1;
         $i <= $count;
         $i++) {
        if ($i == $countP) {
            ?>
            <li style=" background-color: #4cae4c; float: left; width: 20px; height: 20px; margin-left: 20px; text-align: center;  border:1px solid darkslategray">
                <a style="color: #2e6da4; font-size: 20px "
                   href="<?php echo URL ?>Index/Products/<?php echo $categoryId ?>/<?php echo $i ?>"><?php echo $i ?></a>
            </li>
        <?php } else { ?>
            <li style="float: left; width: 20px; height: 20px; margin-left: 20px; text-align: center;  border:1px solid darkslategray">
                <a style="color: #2e6da4; font-size: 20px "
                   href="<?php echo URL ?>Index/Products/<?php echo $categoryId ?>/<?php echo $i ?>"><?php echo $i ?></a>
            </li>

            <?php
        }
    }
    ?>
    <?php
    if ($next > $count) {
        ?>
        <li style="background-color: orangered; color: black; width: 30px; height: 20px"><a>next</a></li>
    <?php } else { ?>
        <li style="background-color: green; width: 30px; height: 20px"><a
                    href="<?php echo URL ?>Index/Products/<?php echo $categoryId ?>/<?php echo $next ?>">next</a></li>

    <?php } ?>
</ul>