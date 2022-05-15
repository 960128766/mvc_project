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
        $slider = $data['slider'];
        // print_r($meta);
        ?>
        <table class="table table-hover" style="margin-bottom: 0">
            <tr style="background-color: aquamarine">
                <td>id</td>
                <td>caption</td>
                <td>link</td>
                <td>image</td>
                <td>delete</td>
                <td>update</td>
            </tr>

            <?php foreach ($slider as $item) { ?>

                <section class="modal">
                    <form action="<?php echo URL ?>SliderRevolution/deleteSlider" method="post" class="form">
                        <input type="hidden" name="id" value="">
                        <br>
                        <input type="hidden" name="path" value="">
                        <input type="submit" value="تایید">
                    </form>
                    <button onclick="closeModal()">انصراف</button>
                    <section class="close" onclick="closeModal()">x</section>
                </section>

                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['caption'] ?></td>
                    <td><?php echo $item['link'] ?></td>
                    <td><img src="<?php echo URL ?>view/admin/sliderRevolution/images/<?php echo $item['image'] ?>"
                             width="50px" height="50px" alt=""></td>
                    <td>

                        <i class="material-icons" style="font-size: 24px;cursor: pointer"
                           onclick="deleteslider(<?php echo $item['id'] ?>,'view/admin/sliderRevolution/images/<?php echo $item['image'] ?>')">delete</i>

                    </td>
                    <td><a href="<?php echo URL ?>SliderRevolution/index/<?php echo $item['id'] ?>/edit"><i
                                    class="material-icons">edit</i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
</section>
<!-- end make cms in the project -->
<script>
    function deleteslider(id, path) {
        $('input[name=id]').attr('value', id);
        $('input[name=path]').attr('value', path);
        $('.modal').fadeIn(500);

    }

    function closeModal() {
        $('.modal').fadeOut(300);
    }
</script>
</body>
</html>