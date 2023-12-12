<?php
function load_all_sanphambanchay() {
    $sql = "SELECT * FROM san_pham ORDER BY view DESC LIMIT 10";
    $listsanphambanchay = pdo_query($sql);
    return $listsanphambanchay;
}
function load_doanhthu(){
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
        dh.status = 'Đã Hoàn Thành'
    ORDER BY  sp.view AND dh.tongdonhang DESC";
    
    $loadoanhso = pdo_query($sql);
    return $loadoanhso;
}

// bộ lọc 
function bo_loc_theo_ngay($ngayFilter) {
    $sql = "SELECT * FROM `dathang` WHERE 1";

    if ($ngayFilter > 0) {
        $sql .= " AND DATE(ngay_dat) = $ngayFilter";
    }
    $bolocngay = pdo_query($sql);
    return $bolocngay;
}
?>
