<?php
    function kiemtra_don($kiemtra){
        $sql = "SELECT * FROM dathang WHERE 1";
        if ($kiemtra != "") {
            $sql .= " AND `madh` LIKE '%$kiemtra%'";
        }
        $sql .= " ORDER BY name";
        $kiemtra_don = pdo_query($sql);
        return $kiemtra_don;
    }
    
?>