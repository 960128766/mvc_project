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
    </style>
</head>
<body style="font-family: 'Vazir' ">
<!-- make cms in the project -->
<section class="container-fluid">

    <?php require 'view/admin/menu.php' ?>

    <section class="container" style="background-color: #daed43; padding-left: 0; padding-right: 0">
        <?php
        $meta = $data['meta'];
        // print_r($meta);
        ?>
        <table class="table table-hover" style="margin-bottom: 0">
            <tr style="background-color: aquamarine">
                <td>id</td>
                <td>title</td>
                <td>author</td>
                <td>delete</td>
            </tr>
            <?php foreach ($meta as $item) { ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['title'] ?></td>
                    <td><?php echo $item['author'] ?></td>
                    <td><a href="<?php echo URL ?>Admin/deleteSettingAdmin/<?php echo $item['id'] ?>"><i
                                    class="material-icons"
                                    style="font-size: 24px">delete</i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
</section>
<!-- end make cms in the project -->

</body>
</html>