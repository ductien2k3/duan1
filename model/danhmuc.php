<?php
    function insert_danhmuc($tendanhmuc){
        $sql = "INSERT INTO `danh_muc`(`name`) VALUES ('$tendanhmuc')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "UPDATE danh_muc SET `status` = 1 WHERE id = $id";
        pdo_execute($sql);
    }
    function khoiphuc_danhmuc($id){
        $sql = "UPDATE danh_muc SET `status` = 0 WHERE id = $id";
        pdo_execute($sql);
    }
    function load_all_danhmuc() {
        $sql = "SELECT * FROM `danh_muc` ORDER BY `name` DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function load_one_danhmuc($id){
        $sql = "SELECT * FROM `danh_muc` WHERE id = $_GET[id]";
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($iddanhmuc, $tendanhmuc){
        $sql = "UPDATE `danh_muc` SET `name`='$tendanhmuc' WHERE `id` = $iddanhmuc";
        pdo_execute($sql);
    }
    function kiemtra_danhmuc($tendanhmuc){
        $sql = "SELECT * FROM `danh_muc` WHERE  name = '$tendanhmuc' ";
        $tt = pdo_query_one($sql);
        return $tt;
    }
    function load_all_home(){
        $sql = "SELECT * FROM `danh_muc` ORDER BY `id` DESC";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    
?>