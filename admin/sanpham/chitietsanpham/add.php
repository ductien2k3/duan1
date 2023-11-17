<?php
if (isset($listsanphamct) && is_array($listsanphamct)) {
    foreach ($listsanphamct as $sanpham) {
        extract($sanpham);
        // ... phần còn lại của vòng lặp
    }
} else {
    $baoloi = "Không có dữ liệu sản phẩm chi tiết được tải.";
}
?>

<div class="tieude">
    <h2>Thêm chi tiết sản phẩm</h2>
    <?php
    if (isset($baoloi) && ($baoloi != "")) {
        echo $baoloi;
    }
    ?>
    <form class="form" enctype="multipart/form-data" method="post" action="index.php?act=addctsp">
        <div class="chondanhmuc">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="tendanhmuc" name="tensanpham" value="<?php if(isset($sanpham['name']) && ($sanpham['name'] != "")) echo $sanpham['name'] ?>" >

            <label class="form-label">Màu sản phẩm</label>
            <input type="text" class="tendanhmuc" name="color" required placeholder="Nhập vào màu sắc">

            <label class="form-label">Kích thước</label>
            <input type="text" class="tendanhmuc" name="size" required placeholder="Nhập vào kích thước">

            <label class="form-label">Số lượng</label>
            <input type="number" min="0" class="tendanhmuc" name="soluong" required placeholder="Nhập vào số lượng">

            <input type="hidden" name="id_sp" value="<?php echo $sanpham['id'] ?> ">
            <input type="submit" class="dongy" value="Thêm chi tiết sản phẩm" name="themmoi">
            
            <input type="reset" class="nhaplai" value="Nhập lại">
            <button class="ratranglist"><a href="index.php?act=chitietsp&id_sp=<?=$sanpham['id']?>">Quay lại trang chi tiết sản phẩm</a></button>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;

                // Kiểm tra điều kiện thành công và thiết lập đường dẫn cho nút
                if (isset($thongbao) && $thongbao != "") {
                    $listsp = "index.php?act=listsp"; // Đặt URL tùy chỉnh của bạn
                }
            ?>
            <button class="ratranglist"><a href="<?php echo $listsp; ?>">Quay ra trang sản phẩm</a></button>
            <?php
            }
            ?>
        </div>
    </form>
</div>
