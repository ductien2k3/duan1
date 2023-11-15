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
                <div class="col-lg-6 col-md-6">
                    <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                        <h3>Đăng Ký</h3>
                        <form action="index.php?act=dangky" method="POST">
                            <div class="default-form-box">
                                <label>Tên Đăng Nhập<span>*</span></label>
                                <input type="text" name="tendangnhap" required>
                            </div>
                            <div class="default-form-box">
                                <label>Mật Khẩu <span>*</span></label>
                                <input type="password" name="matkhau" required>
                            </div>
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="default-form-box">
                                <label>Số điện thoại <span>*</span></label>
                                <input type="text" name="sodienthoai" required>
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover mb-4" type="submit" name="dangky" value="Đăng Ký">Đăng ký</button>
                                <label class="checkbox-default mb-4" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span> Nhớ mật khẩu </span>
                                </label>
                                <a href="#">Quên Mật Khẩu</a>
                                <?php
                                if(isset($thongbao) && ($thongbao!="")) {
                                    echo $thongbao;
                                }
                            ?>
                            </div>
                        </form>
                    </div>
                </div>
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
                                <button class="btn btn-md btn-black-default-hover" type="submit" name="dangnhap" value="Đăng Nhập">Đăng Nhập</button>
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
