
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Đăng Nhập</h3>
                        <form action="index.php?act=dangnhap" method="POST">
                            <div class="default-form-box">
                                <label>Tên đăng nhập <span>*</span></label>
                                <input type="text" name="tendangnhap">
                            </div>
                            <div class="default-form-box">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="matkhau">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover" type="submit" name="dangnhap">Đăng nhập</button>
                            </div>
                            <?php
                                if(isset($thongbao) && ($thongbao!="")) {
                                    echo $thongbao;
                                }
                            ?>
                        </form>
                    </div>
                </div>
