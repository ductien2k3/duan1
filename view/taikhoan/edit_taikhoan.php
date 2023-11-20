<?php
    include 'view/header.php';
?>
<div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">                    
                            <li><a href="#account-details" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">CẬP NHẬT TÀI KHOẢN</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                       
                        <div class="tab-pane fade" id="account-details">
                            <h3> Chi tiết tài Khoản </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <?php
                                            if(isset($_SERVER['user']) && (is_array($_SERVER['user']))){
                                                extract($_SERVER['user']);
                                            }
                                        ?>
                                        <form action="index.php?act=edit_taikhoan" method="POST" enctype="multipart/form-data">
                                            <p>Bạn đã có tài khoản?<a href="index.php?act=dangky">Hãy đăng nhập để thay thế </a></p>
                                            <div class="default-form-box mb-20">
                                                <label>Tên Đăng Nhập</label>
                                                <input type="text" name="user_name" value="<?=$user_name?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Mật Khẩu</label>
                                                <input type="password" name="pass_word" value="<?=$pass_word?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?=$email?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Số Điện Thoại</label>
                                                <input type="text" name="tel" value="<?=$tel?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Địa Chỉ</label>
                                                <input type="text" name="address" value="<?=$address ?>">
                                            </div>
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <span class="example">
                                                (E.g.: ngõ ? đường ? phường ? quận ? tỉnh ? )
                                            </span>
                                            <br>
                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Nhận Ưu Đãi Từ Các Đối Tác Của Chúng Tôi</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Đăng Ký Nhận Bản Tin Của Chúng Tôi<br><em>Bạn Có Thể Hủy Đăng Ký Bất Cứ Lúc Nào. Vì Mục Đích Đó, Vui Lòng Tìm Thông Tin Liên Hệ Của Chúng Tôi Trong Thông Báo Pháp Lý.
                                                </em></span>
                                            </label>
                                            <div class="save_button mt-3">
                                                <button class="btn btn-md btn-black-default-hover"
                                                    type="submit" name="capnhat" value="cập nhật">cập nhật</button>
                                            </div>
                                            <?php
                                                if(isset($thongbao) && ($thongbao!="")) {
                                                echo $thongbao;
                                                }
                                            ?> 
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
