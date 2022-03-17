<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
   <div class="content">
   		<div class="dangky">
        	<div class="dangky_frm">
        	<div class="tieude_dangky"><?=_thongtindangnhap?></div>
            <div class="frm_lienhe" style="width:100%">       	
                <form method="post" name="frm" class="frm" action="ajax/user.php" enctype="multipart/form-data">
                	<input name="act" type="hidden" id="act" value="dangnhap" />
                    <div class="loicapcha thongbao"></div>
                    <div class="item_lienhe"><p><?=_tendangnhap?>:<span>*</span></p><input name="tendangnhap" type="text" id="tendangnhap" /></div>
                    
                    <div class="item_lienhe"><p><?=_matkhau?>:<span>*</span></p><input name="matkhau" type="password" id="matkhau" /></div>
                    
                   <div class="item_lienhe">
                    	<img src="sources/captcha.php" id="hinh_captcha" style="float:left;">
                        <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    </div>
                    <div class="clear"></div>
                    <div class="item_lienhe"><input name="capcha" type="text" id="capcha" /></div>
                    <div class="item_lienhe">
                        <input type="button" value="<?=_dangnhap?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                    <div class="item_lienhe clear">
                       <a id="facebook" onClick="loginFb('dangnhap')"></a>
                    <a class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-onload="false"></a>
                    </div>
                </form>
            </div><!--.frm_lienhe--> 
            </div><!--.dangky_frm--> 
        </div>  <!--.dangky-->      
      
        <div class="dangnhap">      
                <div class="tieude_dangnhap"><?=_khachhangchuacotaikhoan?></div>
                <?=$tintuc_detail['noidung']?>
                <div class="item_lienhe">
                    <a href="dang-ky.html" class="btn_dangnhap"><?=_dangky?></a>
                </div>
                <div class="clear"></div>
        </div><!--.dangnhap-->          
   </div><!--.content--> 
</div><!--.box_container--> 