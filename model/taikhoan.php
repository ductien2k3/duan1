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

function load_one_taikhoan($id){
    $sql = "SELECT * FROM `san_pham` WHERE id = $id";
    $tk = pdo_query_one($sql);
    return $tk;
}
?>