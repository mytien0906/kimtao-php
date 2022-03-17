<div class="tieude_giua">
    <?=_thanhtoan?>
</div>
<div class="box_container">
    <div class="content">
        <div class="frame_thanhtoan">
            <div class="tieude_thanhtoan"><?=_xacnhandonhang?></div>
            <table id="giohang" border="0" cellpadding="5px" cellspacing="1px" style="color:#000000; background:#ECEAEA; width:100%;">
                <?php
            if(is_array($_SESSION['cart'])){
                $max=count($_SESSION['cart']);
                for($i=0;$i<$max;$i++){
                    $pid=$_SESSION['cart'][$i]['productid'];
                    $q=$_SESSION['cart'][$i]['qty'];
                    $pmasp=get_code($pid);
                    $size=$_SESSION['cart'][$i]['size'];
                    $mausac=$_SESSION['cart'][$i]['mausac'];                    
                    $pname=get_product_name($pid);
                    $pphoto=get_product_photo($pid);
                    if($q==0) continue;
            ?>
                    <tr bgcolor="#FFFFFF" style="color:#000000;">
                        <td width="4%" align="center">
                            <?=$i+1?>
                        </td>

                        <td width="20%">
                            <p class="ten_sp_gh">
                                <?=$pname?>
                            </p>
                        </td>
                        <td width="5%">
                            <p class="ten_sp_gh">
                                <?=$size?>
                            </p>
                        </td>
                        <td width="5%">
                            <p class="ten_sp_gh"><span style="height:20px; width:20px; background:<?=$mausac?>; vertical-align:top;display:inline-block"></span></p>
                        </td>
                        <td width="17%" align="center">
                            <?=number_format(get_price($pid),0, ',', '.')?> VND</td>
                        <td width="8%" align="center">
                            <?=$q?>
                        </td>
                        <td width="10%" align="center" class="gh_an">
                            <?=number_format(get_price($pid)*$q,0, ',', '.') ?> VND</td>
                        <?php /*?>
                        <td width="5%" align="center"><a href="javascript:del(<?=$pid?>,'<?=$size?>','<?=$mausac?>')"><img src="images/delete.gif" border="0" /></a></td>
                        <?php */?>
                    </tr>
                    <?php                   
                }
            ?>
                        <tr class="tr_giohang" height="40px">

                            <td colspan="8">
                                <p class="tonggia_gh"><?=_tongtien?>: <span><?=number_format(get_order_total(),0, ',', '.')?>&nbsp;VND</span></p>
                            </td>
                        </tr>
                        <?php
            }
            else{
                echo "<tr bgColor='#FFFFFF'><td>"._khongcosanpham."</td>";
            }
        ?>
            </table>
            <input type="hidden" name="next" class="btn_thanhtoan" value="Đặt hàng" />
            <!-- img chuyen hang -->
            <div class="bg_chuyenhang"></div>
            <!-- end -->
        </div>

        <div class="frm_lienhe">
            <div class="tieude_thanhtoan">
                <?=_thongtinkhachhang?>
            </div>
            <form method="post" name="frm_order" id="frm_order" action="" enctype="multipart/form-data" onsubmit="return check();">

                <div class="item_lienhe">
                    <p class="no">
                        <?=_hinhthucthanhtoan?>:<span>*</span></p>
                    <select name="httt" id="httt">
                <option value=""><?=_chonhinhthucthanhtoan?></option>
                <?php for($i = 0, $count_hinhthuc_tt = count($hinhthuc_tt); $i < $count_hinhthuc_tt; $i++){ ?>
                    <option value="<?=$hinhthuc_tt[$i]['id']?>"><?=$hinhthuc_tt[$i]['ten']?></option>
                <?php } ?>
            </select>
                </div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_hovaten?>:<span>*</span></p><input name="hoten" type="text" id="hoten" value="<?php if($_POST['hoten']!='')echo $_POST['hoten'];else echo $info_user['ten']?>" /></div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_dienthoai?>:<span>*</span></p><input onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" name="dienthoai" id="dienthoai" value="<?php if($_POST['dienthoai']!='')echo $_POST['dienthoai'];else echo $info_user['dienthoai']?>" type="text" /></div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_tinhthanhpho?>:<span>*</span></p>
                    <select name="thanhpho" id="thanhpho">
                    <option value=""><?=_chontinhthanhpho?></option>
                    <?php for($i = 0, $count_place_city = count($place_city); $i < $count_place_city; $i++){ ?>
                        <option value="<?=$place_city[$i]['id']?>"><?=$place_city[$i]['ten']?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_quanhuyen?>:<span>*</span></p>
                    <select name="quan" id="quan"></select>
                </div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_diachi?>:<span>*</span></p><input name="diachi" type="text" id="diachi" value="<?php if($_POST['diachi']!='')echo $_POST['diachi'];else echo $info_user['diachi']?>" /></div>

                <div class="item_lienhe">
                    <p class="no">E-mail:</p><input name="email" type="text" id="email" value="<?php if($_POST['email']!='')echo $_POST['email'];else echo $info_user['email']?>" /></div>

                <div class="item_lienhe">
                    <p class="no">
                        <?=_ghichu2?>:</p><textarea name="noidung" cols="50" rows="4"><?=$_POST['noidung']?></textarea></div>

                <div class="clear"></div>
                <div>
                    <input title='<?=_hoantatdathang?>' type="button" class="click_ajax" value="<?=_hoantatdathang?>" />
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>