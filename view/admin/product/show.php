<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <title>قسمت مدیریت</title>
    <style>
        @font-face {
            font-family: 'Vazir';
            src: url("public/fonts/vazir/Vazir.eot");
            src: url("public/fonts/vazir/Vazir.ttf");
            src: url("public/fonts/vazir/Vazir.woff");
        }

        .modal {
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 10px;
            display: none;
            text-align: center;
        }

        .close {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: orangered;
            top: 0;
            left: 0;
            text-align: center;
            line-height: 50px;
            color: whitesmoke;
        }
    </style>
</head>
<body style="font-family: 'Vazir' ">
<!-- make cms in the project -->
<section class="container-fluid">
    <?php require 'view/admin/menu.php' ?>
    <section class="container" style="background-color: #daed43; padding-left: 0; padding-right: 0">
        <?php
        $product = $data['product'];
        ?>
        <table class="table table-hover table-responsive" style="margin-bottom: 0">
            <tr style="background-color: aquamarine">
                <td>id</td>
                <td>title</td>
                <td>price</td>
                <td>image</td>
                <td>picture</td>
                <td>delete</td>
                <td>update</td>
            </tr>

            <?php foreach ($product as $item) { ?>

                <section class="modal">
                    <form action="<?php echo URL ?>Product/deleteProduct" method="post" class="form">
                        <input type="hidden" name="id" value="">
                        <br>
                        <input type="hidden" name="path1" value="">
                        <input type="hidden" name="path2" value="">
                        <input type="hidden" name="path3" value="">
                        <input type="hidden" name="path4" value="">
                        <input type="hidden" name="path5" value="">
                        <input type="hidden" name="categoryId" value="">
                        <input type="submit" value="تایید">
                    </form>
                    <button onclick="closeModal()">انصراف</button>
                    <section class="close" onclick="closeModal()">x</section>
                </section>

                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['title'] ?></td>
                    <td><?php echo $item['price'] ?></td>
                    <td><?php echo $item['imageBig'] ?></td>
                    <td><img src="<?php echo URL ?>view/admin/product/big/<?php echo $item['imageBig'] ?>"
                             width="50px" height="50px"></td>
                    <td>
                        <i class="material-icons" style="font-size: 24px;cursor: pointer"
                           onclick="deleteslider(<?php echo $item['id'] ?>,'view/admin/product/big/<?php echo $item['imageBig'] ?>',
                                   'view/admin/product/fancy/<?php echo $item['image1'] ?>',
                                   'view/admin/product/fancy/<?php echo $item['image2'] ?>',
                                   'view/admin/product/fancy/<?php echo $item['image3'] ?>',
                                   'view/admin/product/fancy/<?php echo $item['image4'] ?>',
                           <?php echo $item['categoryId'] ?>)">delete</i>
                    </td>
                    <td>
                        <i class="material-icons" style="font-size: 24px;cursor: pointer"
                           onclick="deleteslider(<?php echo $item['id'] ?>,'view/admin/category/images/<?php echo $item['image'] ?>')">update</i>
                    </td>

                </tr>
            <?php } ?>
        </table>
    </section>
</section>
<!-- end make cms in the project -->
<script>
    function deleteslider(id, path1, path2, path3, path4, path5,categoryId) {
        $('input[name=id]').attr('value', id);
        $('input[name=path1]').attr('value', path1);
        $('input[name=path2]').attr('value', path2);
        $('input[name=path3]').attr('value', path3);
        $('input[name=path4]').attr('value', path4);
        $('input[name=path5]').attr('value', path5);
        $('input[name=categoryId]').attr('value', categoryId);
        $('.modal').fadeIn(500);

    }

    function closeModal() {
        $('.modal').fadeOut(300);
    }
</script>
</body>
</html>