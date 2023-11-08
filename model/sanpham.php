<?php
    function insert_sanpham($tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc){
        $sql = "INSERT INTO `san_pham`(`name`, `price`, `giam_gia`, `image`, `mo_ta`, `bao_hanh`, `ma_sp`, `ngay_dang`, `so_luong`, `id_danhmuc`) VALUES ('$tensanpham','$giasanpham','$giamgia','$anhsanpham','$motasanpham','$baohanhsanpham','$masanpham','$ngaydangsanpham','$soluongsanpham','$iddanhmuc')";
        pdo_execute($sql);
     }
    function delete_sanpham($id){
        $sql = "DELETE FROM `san_pham` WHERE id =$_GET[id]";
        pdo_execute($sql);
    }
    function load_all_sanpham($kyw,$iddanhmuc){
        $sql = "SELECT * FROM san_pham WHERE 1";
        if ($kyw != "") {
            $sql .= " AND name LIKE '%$kyw%'";
        }
        if ($iddanhmuc > 0) {
            $sql .= " AND id_danhmuc = $iddanhmuc";
        }
        $sql .= " ORDER BY name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_one_sanpham($id){
        $sql = "SELECT * FROM `san_pham` WHERE id = $_GET[id]";
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_sanpham($idsanpham, $tensanpham){
        $sql = "UPDATE `san_pham` SET `name`='$tensanpham' WHERE `id` = $idsanpham";
        pdo_execute($sql);
    }
?>