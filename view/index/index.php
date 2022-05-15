<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo URL ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/slider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>صفحه اصلی سایت</title>
    <style>
        nav ul ul {
            display: none;
        }

        nav ul li:hover > ul {
            display: block;
        }
        nav ul {
            background: #efefef;
            background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);
            background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%);
            background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%);
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;
            list-style: none;
            position: relative;
            display: inline-table;
        }
        nav ul:after {
            content: ""; clear: both; display: block;
        }
        nav ul li {
            float: left;
        }
        nav ul li:hover {
            background: #4b545f;
            background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
            background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
        }
        nav ul li:hover a {
            color: #fff;
        }
        nav ul li a {
            display: block; padding: 25px 40px;
            color: #757575; text-decoration: none;
        }
        nav ul ul {
            background: #5f6975; border-radius: 0px; padding: 0;
            position: absolute; top: 100%;
        }
        nav ul ul li {
            float: none;
            border-top: 1px solid #6b727c;
            border-bottom: 1px solid #575f6a;
            position: relative;
        }
        nav ul ul li a {
            padding: 15px 40px;
            color: #fff;
        }
        nav ul ul li a:hover {
            background: #4b545f;
        }
        nav ul ul ul {
            position: absolute; left: 100%; top:0;
        }
    </style>
</head>
<body>
<?php
//$slider=$data['slider'];
?>
<!--
<div class="slideshow-container">
  <?php foreach ($slider as $item) { ?>
    <div class="mySlides fade">
        <img src="view/admin/sliderRevolution/images/<?php echo $item['image'] ?>" style="width:100%">
        <div class="text"><?php echo $item['caption'] ?></div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
<?php } ?>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

<div class="col s12 x12 m12 14">
    <div class="main-title lined">
        <h3 class="title black-text"><span class="light">دریافت خبرنامه</span></h3>
    </div>
    <div class="nav">
        <div id="subscribe-form" class="black-text rtl">
            <p>جهت دریافت اخبار جدیدترین محصولات سایت در خبرنامه اولین کالا عضو شوید</p>
            <div class="clearfix"></div>
            <br>
            <div class="form-group">
                <form action="<?php echo URL ?>Email/insertEmail" method="post" id="emailWebsite">
                    <input type="text" name="newsEmail" id="subscribe-email"
                           placeholder="آدرس ایمیل خود را وارد کنید">
                    <div class="fk-button-container left-align">
                        <button class="fk-button theme-color fk-validatesubscribeemail">تایید ایمیل</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    $('#emailWebsite').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var email = $('input[name=newsEmail]').val();
        var data = {email: email};
        $.post(url, data, function (msg) {
            if (msg == 1) {
                $('input[name=newsEmail]').val('');
                alert('شما در خبرنامه عضو شدید باتشکر');
            }
            else if(msg == 2)
            {
                $('input[name=newsEmail]').val('');
                alert('قبلا ثبت نام کردید');
            }
        else
            {
                alert('عملیات موفقیت آمیز نبود ..تلاش کن');
            }

        })
    })
</script>

<section class="row">
    <?php
$category = $data['category'];
foreach ($category as $item) {
    ?>
    <section class="col 13" >
        <img width="100px" height="100px" src="view/admin/category/images/<?php echo $item['image'] ?>">
        <h4><?php echo $item['title'] ?></h4>
        <a href="<?php echo URL ?>Index/Products/<?php echo $item['id'] ?>" class="btn btn-success">جزئیات بیشتر</a>
        <br>
        <br>
        <br>
    </section>
    <?php } ?>
</section>
-->
<?php
$menu = new Model();
$result = $menu->getMenu();
//print_r($result);
?>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Tutorials</a>
            <ul>
                <li><a href="#">Photoshop</a></li>
                <li><a href="#">Illustrator</a></li>
                <li><a href="#">Web Design</a>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Articles</a>
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">User Experience</a></li>
            </ul>
        </li>
        <li><a href="#">Inspiration</a></li>
    </ul>
</nav>

</body>
</html>

