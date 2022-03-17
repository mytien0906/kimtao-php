<div class="tieude_giua"><div><?=$title_cat?></div><span></span></div>
<div class="box_container">
   <div class="content">
   		<div class="dangky">
        	<div class="dangky_frm">
        	<div class="tieude_dangky"><?=_thongtindangky?></div>
            <div class="frm_lienhe frm_dangky">       	
                <form method="post" name="frm" class="frm" action="ajax/user.php" enctype="multipart/form-data">
                	<input name="act" type="hidden" id="act" value="dangky" />
                    <div class="loicapcha thongbao"></div>
                    <div class="item_lienhe"><p><?=_tendangnhap?>:<span>*</span></p><input name="tendangnhap" type="text" id="tendangnhap" /></div>
                    
                    <div class="item_lienhe"><p><?=_matkhau?>:<span>*</span></p><input name="matkhau" type="password" id="matkhau" /></div>
                    
                    <div class="item_lienhe"><p><?=_nhaplaimatkhau?>:<span>*</span></p><input name="nhaplaimatkhau" type="password" id="nhaplaimatkhau" /></div>
                    
                    <div class="item_lienhe"><p><?=_hovaten?>:<span>*</span></p><input name="ten_lienhe" type="text" id="ten_lienhe" /></div>

                    <div class="item_lienhe"><p><?=_dienthoai?>:<span>*</span></p>
                    <input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" /></div>
                    
                    <div class="item_lienhe"><p>Email:<span>*</span></p><input name="email_lienhe" type="text" id="email_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_diachi?>:</p><input name="diachi_lienhe" type="text" id="diachi_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_gioitinh?>:</p>
                    <select name="gioitinh_lienhe" id="gioitinh_lienhe">
                    	<option value=""><?=_luachon?></option>
                        <option value="Nam"><?=_nam2?></option>
                        <option value="Nữ"><?=_nu?></option>
                    </select>
                    </div>
                    <div class="item_lienhe"><p><?=_ngaysinh?>:</p><input name="ngaysinh_lienhe" type="text" id="ngaysinh_lienhe" class="date" readonly="readonly" /></div>
                    <div class="item_lienhe">
                    	<img src="sources/captcha.php" id="hinh_captcha" style="float:left;">
                        <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><i class="fa fa-refresh" aria-hidden="true"></i></a>  
                    </div>
                   
                    <div class="item_lienhe"><input name="capcha" type="text" id="capcha" /></div>
    
                 
                    <div class="item_lienhe">
                        <input type="button" value="<?=_dangky?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                </form>
            </div><!--.frm_lienhe--> 
            </div><!--.dangky_frm--> 
        </div>  <!--.dangky-->      
      
        <div class="dangnhap">      
                <div class="tieude_dangnhap"><?=_khachhangdadangky?></div>
                <?=$tintuc_detail['noidung']?>
                <div class="item_lienhe">
                    <a href="dang-nhap.html" class="btn_dangnhap"><?=_dangnhap?></a>
                </div>
                <div class="clear"></div>
        </div><!--.dangnhap-->          
   </div><!--.content--> 
</div><!--.box_container--> 