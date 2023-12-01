<?php
// Function definition
 function taodonhang($madh, $tong, $pttt,$id_user, $user_name, $address, $email, $tel,$status)
{
    $pdo = pdo_get_connection();
    // Prepare and execute the INSERT statement using the provided PDO connection
    $stmt = $pdo->prepare("INSERT INTO `dathang`(`madh`,`tongdonhang`, `pttt`,`id_user`, `name`, `address`, `email`, `tel`,`status`) VALUES (?, ?, ?,?, ?, ?, ?, ?,?)");
    $stmt->execute([$madh, $tong, $pttt,$id_user, $user_name, $address, $email, $tel,$status]);

    // Get the last inserted ID
    $lastInsertId = $pdo->lastInsertId();

    // Do something with the last inserted ID (e.g., return it or use it in further operations)
    return $lastInsertId;
}
    // Example usage
    function addtocart($id_dathang,$id_sanpham, $soluong, $gia, $tensampham){
        $pdo = pdo_get_connection();
        $stmt = $pdo->prepare("INSERT INTO `giohang`(`id_dathang`, `id_sanpham`, `soluong`, `gia`, `tensanpham`)
        VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$id_dathang, $id_sanpham, $soluong, $gia, $tensampham]);

         // Get the last inserted ID
    }
    function getshowmuahang($id_dathang){
        $pdo = pdo_get_connection();
        $stmt = $pdo->prepare("SELECT * FROM `giohang` WHERE `id_dathang` = ?");
        $stmt->execute([$id_dathang]);
        $result = $stmt->fetchAll();
        return $result;
    }

    function getshowinfor($id_dathang){
        $pdo = pdo_get_connection();
        $stmt = $pdo->prepare("SELECT * FROM `dathang` WHERE `id` = ?");

        $stmt->execute([$id_dathang]);

        $result = $stmt->fetchAll();
        return $result;
    }
    function huydon($id, $huydon) {
        $pdo = pdo_get_connection();
            $sql = "UPDATE dathang SET `status` = :huydon WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':huydon', $huydon, PDO::PARAM_STR);
            $stmt->execute();
    }
    function hoanthanh($id,$nhanhang){
        $pdo = pdo_get_connection();
            $sql = "UPDATE dathang SET `status` = :nhanhang WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nhanhang', $nhanhang, PDO::PARAM_STR);
            $stmt->execute();
    }
    
?>