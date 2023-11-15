<?php
    function load_all_binhluan(){
        $sql = "SELECT * FROM binh_luan ORDER BY `id` DESC ";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql = "DELETE FROM `binh_luan` WHERE id = $id";
        pdo_execute($sql);
    }
    function load_one_binhluan($id){
        $sql = "SELECT * FROM `binh_luan` WHERE id = $id";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    
    function update_binhluan($idbinhluan, $noidung){
        $sql = "UPDATE `binh_luan` SET `noi_dung`='$noidung' WHERE `id`='$idbinhluan'";
        pdo_execute($sql);
    }
    

?>