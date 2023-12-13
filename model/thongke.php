<?php
function load_all_sanphambanchay() {
    $sql = "SELECT * FROM san_pham ORDER BY view DESC LIMIT 10";
    $listsanphambanchay = pdo_query($sql);
    return $listsanphambanchay;
}
function load_doanhthu($ngay) {
    $sql = "SELECT giohang.id, 
        giohang.id_dathang, 
        giohang.id_sanpham, 
        giohang.soluong, 
        giohang.gia, 
        giohang.tensanpham, 
        giohang.img, 
        giohang.color,
        dathang.madh, 
        dathang.tongdonhang, 
        dathang.pttt, 
        dathang.id_user, 
        dathang.name, 
        dathang.address, 
        dathang.email, 
        dathang.tel, 
        dathang.status, 
        dathang.ngay_dat
        FROM giohang
        INNER JOIN dathang ON giohang.id_dathang = dathang.id
        WHERE dathang.status = 'Đã Hoàn Thành' ";

    if ($ngay != "") {
        // Chuyển đổi định dạng ngày từ yyyy-mm-dd về yyyy-mm-dd
        $ngay = date('d-m-Y', strtotime($ngay));
        $sql .= " AND dathang.ngay_dat = '$ngay'";
    }

    $loadoanhso = pdo_query($sql);
    return $loadoanhso;
}

?>

