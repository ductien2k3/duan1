<?php
    include 'view/header.php';
?>
<div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Kiểm Tra Đơn Hàng</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="index.php">Shop</a></li>
                                    <li class="active" aria-current="page">Đơn hàng</li>
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
                         
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Đơn hàng</a></li>                          
                        </ul>
                      
                       
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                       
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
                                            <th>Ngày Đặt</th>
                                            <th>Sản Phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            foreach ($kiemtra_don as $don) {
                                                extract($don);
                                                echo '<tr>
                                                    <td>'.$madh.'</td>
                                                    <td>'.$name.'</td>';

                                                // Kiểm tra nếu trạng thái là "Chờ xác nhận"
                                             
                                                    echo '<td><span class="success">'.$status.'</span></td>';
                                                        
                                                        
                                                    echo '<td>'.$tongdonhang.'</td>
                                                <td>'.$ngay_dat.'</td>
                                                    <td><a href="index.php?act=kiemtradonhang&id_dathang='.$id.'" class="view">view</a></td>
                                                </tr>';
                                            }
                                            ?>


              
                                    </tbody>
                                </table>
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
