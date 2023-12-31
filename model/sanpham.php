<?php
    function insert_sanpham($tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc){
        $sql = "INSERT INTO `san_pham`(`name`, `price`, `giam_gia`, `image`, `mo_ta`, `bao_hanh`, `ma_sp`, `ngay_dang`, `so_luong`, `id_danhmuc`) VALUES ('$tensanpham','$giasanpham','$giamgia','$anhsanpham','$motasanpham','$baohanhsanpham','$masanpham','$ngaydangsanpham','$soluongsanpham','$iddanhmuc')";
        pdo_execute($sql);
     }
    function delete_sanpham($id){
        $sql = " delete from san_pham where id = " .$id ;
        pdo_execute($sql);
    }
    function load_all_sanpham($kyw,$iddanhmuc){      
        $sql = "SELECT * FROM san_pham WHERE 1";
        if ($kyw != "") {
            $sql .= " AND `name` LIKE '%$kyw%'";
        }
        if ($iddanhmuc > 0) {
            $sql .= " AND id_danhmuc = $iddanhmuc";
        }
        $sql .= " ORDER BY name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_one_sanpham($id){
        $sql = "SELECT * FROM `san_pham` WHERE id = $id";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($idsanpham,$tensanpham,$giasanpham,$giamgia,$anhsanpham,$motasanpham,$baohanhsanpham,$masanpham,$ngaydangsanpham,$soluongsanpham,$iddanhmuc){
        if($anhsanpham!=""){
            $sql = "UPDATE `san_pham` SET `name`='$tensanpham',`price`='$giasanpham',`giam_gia`='$giamgia',`image`='$anhsanpham',`mo_ta`='$motasanpham',`bao_hanh`='$baohanhsanpham',`ma_sp`='$masanpham',`ngay_dang`='$ngaydangsanpham',`so_luong`='$soluongsanpham',`id_danhmuc`='$iddanhmuc' WHERE id = '$idsanpham'";
        } else {
            $sql = "UPDATE `san_pham` SET `name`='$tensanpham',`price`='$giasanpham',`giam_gia`='$giamgia',`mo_ta`='$motasanpham',`bao_hanh`='$baohanhsanpham',`ma_sp`='$masanpham',`ngay_dang`='$ngaydangsanpham',`so_luong`='$soluongsanpham',`id_danhmuc`='$iddanhmuc' WHERE id = '$idsanpham'";
        }
        pdo_execute($sql);
    }
    function kiemtra_sanpham($tensanpham,$iddanhmuc){
        $sql = "SELECT * FROM `san_pham` WHERE `name` = '$tensanpham'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_all_sanpham_home(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_all_sanphambanchay_home(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY view DESC ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_one_home($id){
        $sql = "SELECT * FROM `san_pham` WHERE id = $id";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($iddanhmuc ,$id){
        $sql = "SELECT * FROM `san_pham` WHERE id_danhmuc = $iddanhmuc AND id <> $id";
        $sp = pdo_query($sql);
        return $sp;
    }

    function load_all_sanpham_theo_danhmuc($kyw,$iddm){      
        $sql = "SELECT * FROM san_pham WHERE 1";
        if ($kyw != "") {
            $sql .= " AND `name` LIKE '%$kyw%'";
        }
        if ($iddm > 0) {
            $sql .= " AND id_danhmuc = $iddm";
        }
        $sql .= " ORDER BY name";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_tendanhmuc($iddm){
        if($iddm >0 ){
        $sql = "SELECT * FROM `danh_muc` WHERE id = $iddm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
        } else {
            return "";
        }
        
    }
    
?>