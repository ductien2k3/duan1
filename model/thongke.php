<?php
function load_all_sanphambanchay() {
    $sql = "SELECT * FROM san_pham ORDER BY view DESC LIMIT 10";
    $listsanphambanchay = pdo_query($sql);
    return $listsanphambanchay;
}
function load_doanhthu($ngay) {
    $sql = "SELECT
        dh.id AS ma_don_hang,
        dh.tongdonhang,
        dh.pttt,
        dh.ngay_dat,
        dh.id_user,
        dh.name AS ten_khach_hang,
        dh.address AS dia_chi_khach_hang,
        dh.email AS email_khach_hang,
        dh.tel AS so_dien_thoai_khach_hang,
        dh.status AS trang_thai_don_hang,
        gh.id_sanpham,
        gh.soluong,
        gh.gia,
        gh.tensanpham AS ten_san_pham,
        gh.img AS hinh_anh_san_pham,
        sp.id AS id_san_pham,
        sp.name AS ten_san_pham,
        sp.price AS gia_san_pham,
        sp.giam_gia,
        sp.image AS hinh_anh_san_pham,
        sp.mo_ta,
        sp.view,
        sp.bao_hanh,
        sp.ma_sp,
        sp.ngay_dang,
        sp.so_luong,
        sp.id_danhmuc
    FROM
        dathang dh
    JOIN
        giohang gh ON dh.id = gh.id_dathang
    JOIN
        san_pham sp ON gh.id_sanpham = sp.id 
    WHERE
        dh.status = 'Đã Hoàn Thành'";

    if ($ngay > 0) {
        // Thêm dấu nháy đơn cho giá trị ngày và sử dụng nó trực tiếp trong câu truy vấn
        $sql .= " AND `ngay_dat` = '$ngay'";
    }

    $sql .= " ORDER BY sp.view DESC, dh.tongdonhang DESC";

    $loadoanhso = pdo_query($sql);
    return $loadoanhso;
}

?>

