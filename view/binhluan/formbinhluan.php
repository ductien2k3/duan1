<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    
    $id_sanpham = $_REQUEST['id_sanpham']; 
    $dsbl = load_all_binhluan_home($id_sanpham);
?>
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/style.min.css">

<div class="tab-pane" id="review">
                                    <div class="single-tab-content-item">
                                        <!-- Start - Review Comment -->
                                        <?php
    foreach ($dsbl as $bl){
        extract($bl);
        echo '<ul class="comment">
                                        
        <!-- Start - Review Comment list-->
        <li class="comment-list">
            <div class="comment-wrapper">
                <div class="comment-img">
                    <img src="assets/images/user/image-1.png" alt="">
                </div>
                <div class="comment-content">
                    <div class="comment-content-top">
                        <div class="comment-content-left">
                            <h6 class="comment-name">'.$id_user.'</h6><h6 >'.$ngay_bl.'</h6>
                            <ul class="review-star">
                                <li class="fill"><i class="ion-android-star"></i>
                                </li>
                                <li class="fill"><i class="ion-android-star"></i>
                                </li>
                                <li class="fill"><i class="ion-android-star"></i>
                                </li>
                                <li class="fill"><i class="ion-android-star"></i>
                                </li>
                                <li class="empty"><i class="ion-android-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-content-right">
                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                        </div>
                    </div>

                    <div class="para-content">
                        <p>'.$noi_dung.'</p>
                    </div>
                </div>
            </div>
            
               
        </li> <!-- End - Review Comment list-->
    </ul>';

    }
    ?>
                                    
                                    <div class="review-form">
    <div class="review-form-text-top">
        <h5>THÊM BÌNH LUẬN</h5>
        <p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
    </div>

    <?php
    if (!isset($_SESSION['user'])) {
        echo '<p>Bạn phải đăng nhập để bình luận.</p>';
    } else {
    ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="default-form-box">
                        <label for="comment-review-text"> Bình Luận của bạn <span>*</span></label>
                        <textarea id="comment-review-text" placeholder="Viết đánh giá" required name="noi_dung"></textarea>
                        <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-md btn-black-default-hover" type="submit" name="guibinhluan" value="Gửi">GỬI</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noi_dung = $_POST['noi_dung'];
            $id_user = $_SESSION['user']['id'];
            $id_sanpham = $_POST['id_sanpham'];
            $ngay_bl = date('h:i:sa d/m/y');
            insert_binhluan($id_user, $id_sanpham, $noi_dung, $ngay_bl);
             // Thêm exit() để đảm bảo không có mã nào được thực thi sau hàm header()
            header("location: {$_SERVER['HTTP_REFERER']}");
            
        }
    }
    ?>
</div>

                                    </div>
                                