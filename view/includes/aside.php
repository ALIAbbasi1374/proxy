<?php
include "auth.php";
?>

<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">
                <div class="text-center">
                    <div class="info">
                        <h5>مدیر کل</h5>
                        <p>توسعه دهنده</p>
                    </div>
                </div>
            </li>


            <li class="active"><a href="/"><i class="fa "></i>صفحه نخست </a></li>

            <li class="treeview"><a href="#"> <i class="icon-people"></i> <span>  اعضای اپلیکیشن  </span> <span
                            class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/members"><i class="fa fa-angle-left"></i> همه </a></li>
                </ul>
            </li>

            <li>
                <a href="/admin/support">
                    <i class="icon-envelope-open"></i>
                    <span>پشتیبانی</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="icon-bag"></i>
                    <span>فروشگاه</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/shop/coin"><i class="fa fa-angle-left"></i>سکه</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-dollar ml-0"></i>
                    <span>مالی</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/admin/pay-req">
                            <i class="fa fa-angle-left"></i>خروجی
                            <span class="pull-left badge pull-left badge badge-warning"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/pay-transactions">
                            <i class="fa fa-angle-left"></i>ورودی
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="icon-gift"></i>
                    <span>جایزه‌ها</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/admin/tapsell/prize">
                            <i class="fa fa-angle-left"></i>
                            <span>نمایش ویدیو</span>
                        </a>
                    </li>

                    <li>
                        <a href="/admin/offCodes">
                            <i class="fa fa-angle-left"></i>
                            <span>کدهای تخفیف</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/redeem">
                            <i class="fa fa-angle-left"></i>
                            <span>کدهای هدیه</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="icon-settings"></i>
                    <span>تنظیمات اپلیکیشن</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li><a href="/admin/setting/automation"><i class="fa fa-angle-left"></i>اتوماسیون</a></li> -->
                    <!-- <li><a href="/admin/setting/level"><i class="fa fa-angle-left"></i>سطح سوالات</a></li> -->
                    <li><a href="/admin/setting/constant"><i class="fa fa-angle-left"></i>تنظیمات مدیریتی</a></li>
                    <!-- <li><a href="/admin/dialogList/get"><i class="fa fa-angle-left"></i>دیالوگ ها</a></li>
                    <li><a href="/admin/setting/news"><i class="fa fa-angle-left"></i>پیام ورود به اپ</a></li> -->
                    <!-- <li><a href="/admin/setting/notification"><i class="fa fa-angle-left"></i>ارسال نوتیفیکیشن</a></li> -->
                    <!-- <li><a href="/admin/setting/version"><i class="fa fa-angle-left"></i>ورژن کنترل</a></li> -->
                    <li><a href="/admin/setting/rules"><i class="fa fa-angle-left"></i>قوانین اپ</a></li>
                    <li><a href="/admin/setting/faq"><i class="fa fa-angle-left"></i>سوالات متداول</a></li>
                    <!-- <li><a href="/admin/inbox"><i class="fa fa-angle-left"></i>اطلاعیه</a></li> -->
                    <!-- <li><a href="/admin/ad"><i class="fa fa-angle-left"></i>تبلیغات</a></li> -->
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>

