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
        <form id="register" action="<?php echo URL ?>Product/insertProduct" method="post"
              enctype="multipart/form-data">
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                <input type="text" name="title" class="form-control"
                       id="email">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                <input type="text" name="price" class="form-control"
                       id="email">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                <textarea type="text" style="height: 200px" name="summary" class="form-control"
                          id="email"></textarea>
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                <textarea type="text" name="content" class="form-control"
                          id="email"></textarea>
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                <input type="file" name="imageBig">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                <input type="file" name="image1">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                <input type="file" name="image2">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                <input type="file" name="image3">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                <input type="file" name="image4">
            </div>
            <div class="form-group">
                <label style="color: whitesmoke; font-size: 30px" for="pwd">category</label>
                <select class="form-control" name="categoryId" id="">
                    <?php
                    $category = $data['category'];
                        ?>
                        <option value="<?php echo $category['id'] ?>"><?php echo $category['title'] ?></option>
                </select>
            </div>
            <a onclick="submitForm()" class="btn btn-success btn-block">ثبت</a>
            <br>
            <br>
        </form>
    </section>
</section>
<!-- end make cms in the project -->
<script>
    function submitForm() {
        $('#register').submit();
    }
</script>
</body>
</html>