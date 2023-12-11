<?php
    include 'view/header.php';
?>
<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Hoá đơn</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page"> id Đơn hàng <?php echo isset($_SESSION['id_dathang']) ? $_SESSION['id_dathang'] : ''; ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Checkout Section:::... -->

<div class="checkout-section">
    <div class="container">
        <div class="row">
            <!-- User Quick Action Form -->
            <div class="col-12">
                <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '';
                        } else {
                            echo '';
                        }
                    ?>
                </div>
            </div>  
            <!-- User Quick Action Form -->
            <!-- Start User Details Checkout Form -->
        </div>

        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <?php 
                if(isset($_SESSION['id_dathang']) && ($_SESSION['id_dathang'] > 0)) {
                    $getshowinfor = getshowinfor($_SESSION['id_dathang']);
                    if (isset($getshowinfor) && count($getshowinfor) > 0) {
            ?>
                    <h3>Chi tiết hoá đơn</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Tên của bạn*</label>
                                <input type="text" placeholder="tên của bạn" value="<?php echo $getshowinfor[0]['name']; ?>">
                            </div>
                        </div>                          
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Địa Chỉ của bạn<span>*</span></label>
                                <input placeholder="địa chỉ chi tiết của bạn" type="text" value="<?php echo $getshowinfor[0]['address']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label>Số điện thoại của bạn<span>*</span></label>
                                <input type="text" placeholder="số điện của bạn" value="<?php echo $getshowinfor[0]['tel']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label> Email <span>*</span></label>
                                <input type="text" placeholder="email của bạn" value="<?php echo $getshowinfor[0]['email']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Hình thức thanh toán<span>*</span></label>
                                <input placeholder="Hình thức vận chuyển của bạn là" type="text" value="<?php echo $getshowinfor[0]['pttt']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                        </div>
            <?php 
                    }
                } 
            ?>
    
 
    </div>
</div>

            <div class="col-lg-6 col-md-6">
                <h3>Đơn hàng của bạn</h3>
                <div class="order_table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Số Tiền</th>
                            </tr>
                        </thead>
                        <?php
                            if(isset($_SESSION['id_dathang']) && ($_SESSION['id_dathang'] > 0)) {
                                $getshowmuahang = getshowmuahang($_SESSION['id_dathang']);
                                
                                $ship = 30;

                                if ((isset($getshowmuahang)) && (count($getshowmuahang) > 0)) {
                                    echo '<tbody>'; // Mở tbody ở đây để chỉ có một tbody cho tất cả các sản phẩm
                                    foreach ($getshowmuahang as $item) {
                                        $thanhtien = $item['soluong'] * $item['gia'];
                                        $tongphu = $thanhtien;
                                        echo '<tr>
                                                <td>' . $item['tensanpham'] . '</td>
                                                <td><strong> × ' . $item['soluong'] . '</strong></td>
                                                <td> ' . $thanhtien . ' VNĐ</td>
                                            </tr>';
                                    }

                                    echo '</tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Tổng Phụ</th>
                                            <td></td>
                                            <td colspan="3">' . $tongphu . '</td>
                                        </tr>
                                        <tr>
                                            <th>Phí Ship</th>
                                            <td></td>
                                            <td><strong>' . $ship . ' VNĐ</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Tổng số tiền</th>
                                            <td></td>
                                            <td><strong>' . ($tongphu + $ship) . ' VNĐ</strong></td>
                                        </tr>
                                    </tfoot>';
                                }
                            } else {
                                echo 'Giỏ Hàng Trống . Quay lại <a href="index.php">Trang Chủ</a> để mua hàng';
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<br><!--  như thế nào
