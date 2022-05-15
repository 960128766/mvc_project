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
    <link rel="stylesheet" href="public/css/style.css">
    <title>قسمت مدیریت</title>
    <style>
        @font-face {
            font-family: 'Vazir';
            src: url("public/fonts/vazir/Vazir.eot");
            src: url("public/fonts/vazir/Vazir.ttf");
            src: url("public/fonts/vazir/Vazir.woff");
        }
    </style
</head>
<body style="font-family: 'Vazir' ">
<!-- make cms in the project -->
<section class="container-fluid">

    <?php require 'view/admin/menu.php' ?>

    <section class="container" style="background-color:#0a5d5e ">
        <form action="<?php echo URL ?>Admin/insertSettingAdmin" method="post">
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="email">title:</label>
                <input type="text" name="title" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">author:</label>
                <input type="text" name="author" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">description:</label>
                <textarea style="height: 300px" type="text" name="description" class="form-control" id="pwd"></textarea>
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">keywords:</label>
                <textarea style="height: 300px" type="text" name="keywords" class="form-control" id="pwd"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block">Submit</button>
            <br>
            <br>
        </form>
    </section>
</section>
<!-- end make cms in the project -->

</body>
</html>