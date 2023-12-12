<?php
    function insert_voucher($voucher ,$khuyenmai,$ngaybd){
        $sql = "INSERT INTO `voucher`(`ma_voucher`,`khuyen_mai`,`ngay_bd`) VALUES ('$voucher','$khuyenmai','$ngaybd')";
        pdo_execute($sql);
    }
    function load_all_voucher(){
        $sql = "SELECT * FROM `voucher`ORDER BY `id` DESC";
        $listvoucher = pdo_query($sql);
        return $listvoucher;
    }
    function check_voucher($ma_voucher){
        $sql = "SELECT * FROM `voucher` WHERE `ma_voucher` = '$ma_voucher'";
        $voucher = pdo_query_one($sql);
        return $voucher;
    }

?>