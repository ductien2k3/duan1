<?php
    include 'view/header.php';
?>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Login</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">Login</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login">
        <div class="container">
            <div class="row">
               
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Đăng Nhập</h3>
                        <form action="index.php?act=dangnhap" method="POST">
                            <div class="default-form-box">
                                <label>Tên đăng nhập <span>*</span></label>
                                <input type="text" name="tendangnhap">
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="matkhau">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover" type="submit" name="dangnhap">Đăng nhập</button>
                            </div>
                            <?php
                                if(isset($thongbao) && ($thongbao!="")) {
                                    echo $thongbao;
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->
