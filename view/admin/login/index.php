<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="public/css/custom.css">
    <title>صفحه ورود به مدیریت</title>
</head>

<?php

    if (Model::getSession('wrong')) { ?>
        <h1><?php echo Model::getSession('wrong') ?></h1>
        <?php
    }
?>
<?php
if (Model::getSession('admin')){
    Model::header('Admin/index');
}
?>

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div class="box">
                <div class="shape1"></div>
                <div class="shape2"></div>
                <div class="shape3"></div>
                <div class="shape4"></div>
                <div class="shape5"></div>
                <div class="shape6"></div>
                <div class="shape7"></div>
                <div class="float">
                    <form class="form" method="post" action="<?php echo URL ?>Login/checkAdmin">
                        <div class="form-group">
                            <label for="username" class="text-white">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Password:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>