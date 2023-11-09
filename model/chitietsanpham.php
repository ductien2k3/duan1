<?php
    function insert_chitietsanpham($idsanpham,$color,$size,$soluong){
        $sql = "INSERT INTO `chi_tiet_sp`(`id_sp`, `color`, `size`, `so_luong`) VALUES ('$idsanpham','$color','$size','$soluong')";
        pdo_execute($sql);
     }
?>