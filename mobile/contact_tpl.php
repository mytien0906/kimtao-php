<div class="h1200">
    <div class="dg-d clear"><?=$breadcumb?></div>
    <div class="tieude_giua"><div class="title"><?=$title_cat?></div></div>
    <div class="content1 clearfix">
        <?=$company_contact['noidung']?>
            <p class="line_lienhe"></p>
            <div class="frm_lienhe">
                <form method="post" name="frm" class="frm" action="" enctype="multipart/form-data">
                    <div class="loicapcha thongbao"></div>
                    <?=$loicapcha?>
                    <div class="item_lienhe"><input name="ten_lienhe" type="text" id="ten_lienhe" placeholder="<?=_hovaten?>" /></div>
                    <div class="item_lienhe"><input name="diachi_lienhe" type="text" id="diachi_lienhe" placeholder="<?=_diachi?>" /></div>
                    <div class="item_lienhe"><input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" placeholder="<?=_dienthoai?>" /></div>
                    <div class="item_lienhe"><input name="email_lienhe" type="text" id="email_lienhe" placeholder="<?=_email?>" /></div>
                    <div class="item_lienhe"><input name="tieude_lienhe" type="text" id="tieude_lienhe" placeholder="<?=_chude?>" /></div>

                    <div class="item_lienhe"><textarea name="noidung_lienhe" id="noidung_lienhe" rows="5" placeholder="<?=_noidung?>"></textarea></div>
                    <div class="item_lienhe">
                    <div class="g-recaptcha" data-sitekey="<?=$site_key?>"></div>
                    </div>
                    <div class="item_lienhe">
                        <input type="button" value="<?=_gui?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                </form>
            </div><!--end frm_lienhe-->

            <div class="bando">
                  <div id="map_canvas" class="iframe_map"><?=$company['iframe_map']?></div>
            </div>
    </div>
</div>