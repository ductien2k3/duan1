<?php
if (isset($tt) && is_array($tt)) {
    extract($tt);
} 
?>

<div class="tieude">
    <h2>Cập nhật Trạng Thái Đơn Hàng</h2>
    <form class="form" enctype="multipart/form-data" method="post" action="index.php?act=capnhattrangthai"> 
        <input type="hidden" name="id" value="<?php if(isset($id) &&($id>0)) echo $id?>" >
        <label class="form-label">Cập Nhật Trạng Thái</label>

        <select name="trangthai" class="">
            <option value="0" selected disabled hidden>Chọn trạng thái</option>
            <?php
            $statusOptions = ['Chờ xác nhận', 'Đã Nhận Đơn Hàng', 'Đang Giao Hàng', 'Đã Hoàn Thành'];
            foreach ($statusOptions as $option) {
                echo '<option value="' . $option . '"';
                if (isset($status) && $status == $option) {
                    echo ' selected';
                }
                echo '>' . $option . '</option>';
            }
            ?>
        </select>
        <input type="submit" class="dongy" value="Cập Nhật Đơn hàng" name="capnhat">
        <button class="ratranglist"><a href="index.php?act=donhang">Danh Sách</a></button>
        <?php
            if(isset($thongbao) && ($thongbao!="")) {
                echo $thongbao;
            }
        ?>
    </form>
</div>
