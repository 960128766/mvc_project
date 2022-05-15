<section class="menu">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> صفحه مدیریت
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo URL ?>Admin/showSettingAdmin">نمایش جزئیات صفحه مدیریت</a></li>
                            <li><a href="<?php echo URL ?>Admin/index">ورود اطلاعات صفحه مدیریت</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> اسلایدر خوب
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo URL ?>SliderRevolution/showSlider">نمایش جزئیات اسلایدر</a></li>
                            <li><a href="<?php echo URL ?>SliderRevolution/index">صفحه وروداطلاعات مدیریت</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">دسته بندی محصولات
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo URL ?>Category/showCategory">نمایش جزئیات دسته بندی محصولات</a></li>
                            <li><a href="<?php echo URL ?>Category/index">صفحه ورود اطلاعات دسته بندی محصولات</a></li>
                            <li><a href="<?php echo URL ?>Product/index">صفحه وروداطلاعات محصولات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo URL ?>Menu/index">نمایش منو</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?php echo URL ?>Login/logOut"><span class="glyphicon glyphicon-user"></span> خروج</a>
                    </li>
                    <li><a href="<?php echo URL ?>"><span class="glyphicon glyphicon-log-in"></span> نمایش وب سایت</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
