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
    <?php
    $edit = $data['edit'];
    $slider = $data['slider'];
    if (empty($edit)) {
        ?>
        <section class="container" style="background-color:#0a5d5e ">
            <form action="<?php echo URL ?>SliderRevolution/insertSlider" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                    <input type="text" name="caption" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="pwd">link:</label>
                    <input type="text" name="link" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                    <input type="file" name="image">
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
                <br>
                <br>
            </form>
        </section>
    <?php } else { ?>
        <section class="container" style="background-color:#0a5d5e ">
            <form action="<?php echo URL ?>SliderRevolution/updatetSlider" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="email">caption:</label>
                    <input type="text" name="caption" value="<?php echo $slider['caption'] ?>" class="form-control"
                           id="email">
                </div>
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="pwd">link:</label>
                    <input type="text" name="link" value="<?php echo $slider['link'] ?>" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $slider['id'] ?>" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label style="color: whitesmoke; font-size: 30px" for="pwd">image:</label>
                    <input type="file" name="image">
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
                <br>
                <br>
            </form>
        </section>
    <?php } ?>
</section>
<!-- end make cms in the project -->

</body>
</html>