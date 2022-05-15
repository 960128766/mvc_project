<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>منو وب سایت</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        @font-face {
            font-family: 'Vazir';
            src: url("public/fonts/vazir/Vazir.eot");
            src: url("public/fonts/vazir/Vazir.ttf");
            src: url("public/fonts/vazir/Vazir.woff");
        }

        body {
            font-family: 'Vazir';
        }

        #showMenu {
            width: 100%;
            direction: rtl;
        }

        #showMenu ul {
            width: 100%;
            height: auto;
            list-style: none;
            padding: 10px 40px 0 0;
        }

        #showMenu ul li {
            font-family: 'Vazir';
            height: auto;
            font-size: 18px;
            padding: 10px 40px 0 0;
        }

        #showMenu ul li ul {
            list-style: none;
            height: auto;
            padding: 10px 40px 0 0;
        }

        #showMenu ul li ul li {
            padding: 10px 40px 0 0;
            height: auto;
        }
    </style>

</head>
<body>
<!-- mke menu -->
<section class="container-fluid">
    <!-- menu admin -->
    <?php require 'view/admin/menu.php' ?>
    <!-- end menu admin -->
    <br>
    <!-- make menu -->
    <?php
    //$menu = $data['menu'];
    ?>
    <section style="float: right; direction: rtl" class="col-xs-4">

        <div class="form-group">
            <label for="email">نام منو:</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="pwd">لینک:</label>
            <input type="text" name="link" class="form-control" id="link">
        </div>
        <div class="form-group" id="parent">

        </div>
        <input type="submit" id="addMenu" name="add" class="btn btn-success" value="اضافه کردن">
        <input type="submit" id="deleteMenu" name="delete" class="btn btn-danger" value="پاک کردن">

    </section>
    <section class="col-xs-8">
        <section id="showMenu">

        </section>
    </section>
    <!-- end make menu -->
</section>
<!-- end mke menu -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#parent').load('<?php echo URL . 'view/admin/menu/ajax/loadCategory.php' ?>');
        $('#showMenu').load('<?php echo URL . 'view/admin/menu/ajax/showMenu.php' ?>');
    });
    $('#addMenu').click(function () {
        var type = 'add';
        var title = $('#title').val();
        var link = $('#link').val();
        var parentId = $('#parentMenu').val();
        var url = '<?php echo URL . 'Menu/InsertMenu'?>';
        var data = {title: title, link: link, parentId: parentId, type: type};
        $.post(url, data, function (data) {
            if (data == 1) {
                $('#parent').load('<?php echo URL . 'view/admin/menu/ajax/loadCategory.php' ?>');
                $('#showMenu').load('<?php echo URL . 'view/admin/menu/ajax/showMenu.php' ?>');
                $('#title').val('');
                $('#link').val('');
                $('#parentId').val('');
                alert('ok');
            } else {
                alert('not ok');
            }
        })
    })
    $('#deleteMenu').click(function () {
        var type = 'delete';
        var url = '<?php echo URL . 'Menu/InsertMenu'?>';
        var parentId = $('#parentMenu').val();
        var data = {parentId: parentId, type: type};
        $.post(url, data, function () {
            $('#parent').load('<?php echo URL . 'view/admin/menu/ajax/loadCategory.php' ?>');
            $('#showMenu').load('<?php echo URL . 'view/admin/menu/ajax/showMenu.php' ?>');
            alert('عملیات با موفقیت انجام شد');
            var pId = $('select[name=parentId]').val('');
        })

    })
</script>
</body>
</html>