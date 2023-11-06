
<?php
    include "header.php";
    // controler

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'danhmuc':
                include "danhmuc/list.php";
                break;

            case 'sanpham':
                include "sanpham/list.php";
                break;

            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";

?>
