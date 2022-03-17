<?php
if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
        remove_product($_REQUEST['pid'],$_REQUEST['size'],$_REQUEST['mausac']);
    }
    else if($_REQUEST['command']=='clear'){
        unset($_SESSION['cart']);
    }
    else if($_REQUEST['command']=='update'){
        $max=count($_SESSION['cart']);
        for($i=0;$i<$max;$i++){
            $pid=$_SESSION['cart'][$i]['productid'];
            $size=$_SESSION['cart'][$i]['size'];
            $mausac=$_SESSION['cart'][$i]['mausac'];
            $q=intval($_REQUEST['product'.$pid.$size.$mausac]);
            
            if($q>0 && $q<=99999){
                $_SESSION['cart'][$i]['qty']=$q;
            }
            else{
                $msg='Some proudcts not updated!, quantity must be a number between 1 and 99999';
            }
        }
    }
?>
    <script language="javascript">
        function del(pid, size, mausac) {
            if (confirm('Do you really mean to delete this item')) {
                document.form1.pid.value = pid;
                document.form1.size.value = size;
                document.form1.mausac.value = mausac;
                document.form1.command.value = 'delete';
                document.form1.submit();
            }
        }

        function clear_cart() {
            if (confirm('This will empty your shopping cart, continue?')) {
                document.form1.command.value = 'clear';
                document.form1.submit();
            }
        }

        function update_cart() {
            document.form1.command.value = 'update';
            document.form1.submit();
        }

        function quaylai() {
            history.go(-1);
        }
    </script>

    <div class="tieude_giua">
        <?=_giohang?>
    </div>
    <div class="box_container">
        <div class="content">
            <form name="form1" method="post">
                <input type="hidden" name="pid" />
                <input type="hidden" name="size" />
                <input type="hidden" name="mausac" />
                <input type="hidden" name="command" />
                <table id="giohang" border="0" cellpadding="5px" cellspacing="1px" style="color:#000000; background:#ECEAEA; width:100%;">
            <?php
                 if(is_array($_SESSION['cart'])){
                    echo "<tr bgcolor='#535353' height='25px' style='font-weight:bold;color:#FFF' class='tr_giohang'>
                        <td align='center'>".STT."</td>
                        <td align='center'>"._ten."</td>
                        <td align='center'>"._gia."</td>
                        <td align='center'>"._soluong."</td>
                        <td align='center' class='gh_an'>"._tonggia."</td>
                        <td align='center'>"._xoa."</td>
                    </tr>";
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
                                <p class="giohang_img"><img src="<?=_upload_sanpham_l.$pphoto?>" style="max-height:70px;" /></p>
                                <p class="ten_sp_gh">
                                    <?=$pname?>
                                </p>
                                <p class="masp_sp_gh">Mã SP:
                                    <?=$pmasp?>
                                </p>
                                <p>size:
                                    <?=$size?>
                                </p>
                                <p>
                                    <?=_mausac?>: <span style="height:20px; width:20px; background:<?=$mausac?>; vertical-align:top;display:inline-block"></span></p>
                                <div class="clear"></div>
                            </td>
                            <td width="17%" align="center">
                                <?=number_format(get_price($pid),0, ',', '.')?> VND</td>
                            <td width="8%" align="center"><input onblur="update_cart()" type="text" name="product<?=$pid?><?=$size?><?=$mausac?>" value="<?=$q?>" maxlength="5" size="2" style="text-align:center; border:1px solid #F0F0F0" />&nbsp;</td>
                            <td width="10%" align="center" class="gh_an">
                                <?=number_format(get_price($pid)*$q,0, ',', '.') ?> VND</td>
                            <td width="5%" align="center"><a href="javascript:del('<?=$pid?>','<?=$size?>','<?=$mausac?>')"><img src="images/delete.gif" border="0" /></a></td>
                        </tr>
                        <?php   }?>
                            <tr class="tr_giohang" height="40px">
                                <td colspan="2">
                                </td>
                                <td colspan="4">
                                    <p class="tonggia_gh"><?=_tongtien?>: <span><?=number_format(get_order_total(),0, ',', '.')?>&nbsp;VND</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" align="right" style="background:#fff;">
                                    <input class="btn button" type="button" value="<?=_muathemsanpham?>" onclick="quaylai();" />
                                    <input class="btn button" type="button" value="<?=_xoatatca?>" onclick="clear_cart()">
                                    <input class="btn button" type="button" value="<?=_dathang?>" onclick="window.location='http://<?=$config_url?>/thanh-toan.html'">
                                </td>
                            </tr>
                           <?php   
            }
            else{
                echo "<tr bgColor='#FFFFFF'><td>"._khongcosanpham."</td>";
            }
        ?>
                </table>
            </form>
        </div>
    </div>