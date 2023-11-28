<?php
    include 'view/header.php';
?>
<div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Tài Khoản Của Tôi</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="index.php">Shop</a></li>
                                    <li class="active" aria-current="page">Tài Khoản Của Tôi</li>
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

                    <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                                               
                        ?>
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover active">Bảng Điều Khiển</a>
                            </li>
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Đơn hàng của tôi</a></li>       
                            <li><a href="#account-details" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">CẬP NHẬT TÀI KHOẢN</a>
                            </li>
                            <li><a href="index.php?act=thoat"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Đăng Xuất</a></li>
                        </ul>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Bảng Điều Khiển </h4>
                            <p>Từ trang tổng quan tài khoản của bạn. bạn có thể dễ dàng kiểm tra &amp; xem <a href="#">gần đây của bạn
                                    đơn đặt hàng</a>, quản lý <a href="#">địa chỉ giao hàng và thanh toán</a> và <a
                                    href="#">Chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</a></p>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Đơn hàng</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Đơn hàng</th>
                                            <th>Tên người đặt</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Sản Phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($dathang as $dh){

                                                extract($dh);
                                                echo '<tr>
                                            <td>'.$madh.'</td>
                                            <td>'.$name.'</td>
                                            <td><span class="success">'.$status.'</span></td>
                                            <td>'.$tongdonhang.' </td>
                                            <td><a href="index.php?act=donhangnguoidung&id_dathang='.$id.'" class="view">view</a></td>
                                        </tr>';
                                            }
                                        ?>
                                        
                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="downloads">
                            <h4>Downloads</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Downloads</th>
                                            <th>Expires</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Shopnovilla - Free Real Estate PSD Template</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="danger">Expired</span></td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                        <tr>
                                            <td>Organic - ecommerce html template</td>
                                            <td>Sep 11, 2018</td>
                                            <td>Never</td>
                                            <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h5 class="billing-address">Billing address</h5>
                            <a href="#" class="view">Edit</a>
                            <p><strong>Bobby Jackson</strong></p>
                            <address>
                                Address: Your address goes here.
                            </address>
                        </div>
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
                                                    type="submit" name="capnhat" value="cập nhật">Cập Nhật</button>
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
