<?php
    function load_all_chitietsanpham($id_sp) {
        $sql = "SELECT * FROM `chi_tiet_sp` WHERE `id_sp` = $id_sp ORDER BY `id` DESC";
        $listctsp = pdo_query($sql);
        return $listctsp;
    }
    function insert_chitietsanpham($color, $size, $soluong, $id_sp) {
        $sql = "INSERT INTO `chi_tiet_sp` (`color`, `size`, `so_luong`, `id_sp`) VALUES ('$color', '$size', '$soluong', '$id_sp')";
        pdo_execute($sql);
    }
    
    
    
    
    
    
?>