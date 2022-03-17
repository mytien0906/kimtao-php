<link href="css/css_form_dat_tour.css" rel="stylesheet" />
<script>
	$(document).ready(function(e) {
		$('.click_dangky').click(function(){
			if(isEmpty($('#txt_hoten').val(), "<?=_nhaphoten?>"))
			{
				$('#txt_hoten').focus();
				return false;
			}
			if(isEmpty($('#txt_dienthoai').val(), "<?=_nhapsodienthoai?>"))
			{
				$('#txt_dienthoai').focus();
				return false;
			}
			if(isEmpty($('#txt_email').val(), "<?=_nhapdiachi?>"))
			{
				$('#txt_email').focus();
				return false;
			}
			if(isEmail($('#txt_email').val(), "<?=_emailkhonghople?>"))
			{
				$('#txt_email').focus();
				return false;
			}
			if(isEmpty($('#trea_loinhan').val(), "<?=_nhapnoidung?>"))
			{
				$('#trea_loinhan').focus();
				return false;
			}
			$.ajax({
				type:'post',
				url:$("#datxe_form").attr('action'),
				data:$("#datxe_form").serialize(),
				dataType:'json',
				beforeSend: function() {
					$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');     
				},
				error: function(){
					add_popup('<?=_hethongloi?>');
				},
				success:function(kq){
					
					add_popup(kq.thongbao);
					if(kq.nhaplai=='nhaplai')
					{
						$("#datxe_form")[0].reset();
					}
				}
			});
		});    
    });
</script>
<div style="display:none">
	<form id="datxe_form" name="datxe_form" method="post" action="ajax/dangky_tour.php" class="datxe_form" enctype="multipart/form-data">
    	<div class="tieude_form"><?=_thongtindangky?></div>
		<p id="login_error">Please, enter data</p>
        <input class="txt_input" type="text" id="txt_hoten" name="txt_hoten" placeholder="<?=_nhaphoten?>" />
        <input class="txt_input" type="text" id="txt_dienthoai" name="txt_dienthoai" placeholder="<?=_dienthoai?>" />
        <input class="txt_input" type="text" id="txt_email" name="txt_email" placeholder="Email" />
        <textarea class="trea_loinhan" name="txt_loinhan" placeholder="<?=_noidung?>" ></textarea>
        <input type="button" class="click_dangky btn_gui_datxe" value="<?=_dangky?>" />
	</form>
</div>