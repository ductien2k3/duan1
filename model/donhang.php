<?php
    function load_all_nguoimua(){
        $sql = "SELECT * FROM `dathang` order by id desc";
        $listnguoimua = pdo_query($sql);
        return $listnguoimua;
    }
    function load_all_giohang(){
        $sql = "SELECT * FROM `giohang`";
        $listgiohang = pdo_query($sql);
        return $listgiohang;
    }
    function load_all_giohang_theo_id($id_dathang){
        $sql = "SELECT * FROM giohang WHERE id_dathang = $id_dathang ORDER BY id DESC";
        $listctgh = pdo_query($sql);
        return $listctgh;
    }
    function load_trangthai($id){
        $sql = "SELECT * FROM `dathang` where id = $id";
        $tt = pdo_query_one($sql);
        return $tt;
    }
    function capnhat_trangthai($id,$trangthai) {
        $sql = "UPDATE `dathang` SET `status`='$trangthai' WHERE `id`='$id'";
        pdo_execute($sql);
        
    }

    function load_trangthai_theo_id($id){
        $sql = "SELECT * FROM `dathang` where id = $id";
        $xemtt = pdo_query_one($sql);   
        return $xemtt;
    }
    
    





    function xoadonhang($id) {
        // Use the $id parameter to delete the order from the database
        $sql = "DELETE FROM `dathang` WHERE `id` = $id";
        pdo_execute($sql);
        // You may want to perform additional cleanup or logging here
    }
    function xoa_giohang($id_dathang){
        $sql = "DELETE FROM `giohang` WHERE `id_dathang` = $id_dathang";
        pdo_execute($sql);
    }
    // load cho người dùng
    function load_dathang_chonguoidung($id_user){   
        $sql = "SELECT * FROM dathang WHERE id_user = $id_user ";
        $kt = pdo_query($sql);
        return $kt;
    }
    function load_all_giohang_cho_nguoidung($id_dathang){
        $sql = "SELECT * FROM giohang WHERE id_dathang = $id_dathang ORDER BY id DESC";
        $ghnd = pdo_query($sql);
        return $ghnd;
    }  
?>