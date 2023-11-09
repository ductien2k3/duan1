<?php
function insert_taikhoan($tendangnhap,$matkhau,$email,$sodienthoai){
    $sql = "INSERT INTO `tai_khoan`(`user_name`, `pass_word`, `email`, `tel`) VALUES ('$tendangnhap','$matkhau','$email','$sodienthoai')";
    pdo_execute($sql);
}
function load_all_taikhoan($kyw){
    $sql = "SELECT * FROM `tai_khoan` WHERE 1";
    if ($kyw != "") {
        $sql .= " AND (user_name LIKE '%$kyw%' OR email LIKE '%$kyw%' OR tel LIKE '%$kyw%')";
    }
    $sql .= " ORDER BY user_name";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id){
    $sql = " DELETE FROM `tai_khoan` WHERE id = " .$id;
    pdo_execute($sql);
}
function check_tendangki($tendangnhap){
    $sql = "SELECT * FROM `tai_khoan` WHERE  user_name = '$tendangnhap' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
function check_sodienthoai($sodienthoai){
    $sql = "SELECT * FROM `tai_khoan` WHERE  tel = '$sodienthoai' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
function check_email($email){
    $sql = "SELECT * FROM `tai_khoan` WHERE  email = '$email' ";
    $tk = pdo_query_one($sql);
    return $tk;
}
function load_one_taikhoan($id){
    $sql = "SELECT * FROM `tai_khoan` WHERE id = $id";
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($idtaikhoan,$tendangnhap,$matkhau,$email,$sodienthoai,$diachi,$avatar,$vaitro){
    if($avatar!=""){
   $sql = " UPDATE `tai_khoan` SET `user_name`='$tendangnhap',`pass_word`='$matkhau',`email`='$email',`tel`='$sodienthoai',`chuc_nang`='$vaitro',`address`='$diachi',`avatar`='$avatar' WHERE id = $idtaikhoan ";
   } else {
    $sql = " UPDATE `tai_khoan` SET `user_name`='$tendangnhap',`pass_word`='$matkhau',`email`='$email',`tel`='$sodienthoai',`chuc_nang`='$vaitro',`address`='$diachi' WHERE id = $idtaikhoan ";
   }
   pdo_execute($sql);
}
?>