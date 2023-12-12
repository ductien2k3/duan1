<?php
    include 'view/header.php';
?>                         
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <h4 class="container mt-4">Đơn hàng</h4>
    <div class="container mt-3">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>ID Đặt Hàng</th>
                    <th>ID Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Màu Sắc</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($ghnd as $dh) {
                        extract($dh);
                        echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$id_dathang.'</td>
                            <td>'.$id_sanpham.'</td>
                            <td>'.$tensanpham.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$color.'</td>   
                        </tr>';
                    }
                ?>
            </tbody>
        </table>
        <a href="index.php?act=thongtin" class="btn btn-primary">Quay lại đơn hàng của tôi</a>
        
    </div>
</div><br>
     