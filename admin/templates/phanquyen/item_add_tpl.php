<script type="text/javascript">
	$(document).ready(function(e) {
        if($("#full").is(":checked")){
			$('#full').click(function()
			{
				var status=this.checked;
				
				$("input[name='them']").each(function(){this.checked=status;})
				$("input[name='sua']").each(function(){this.checked=status;})
				$("input[name='xoa']").each(function(){this.checked=status;})
				$("input[name='none']").filter(':checkbox').prop('checked',!status);
			}
			);
		}
		
    });
</script>
<h3>Quản lý phân quyền</h3>
<form name="frm" method="post" action="index.php?com=phanquyen&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu">	 
    <b>Tên:</b> <input type="text" name="ten" value="<?=$item['ten']?>" class="input" /><br /> 
    <b>Com:</b> <input type="text" name="biencom" value="<?=$item['com']?>" class="input" /><br />  
	<b>Thêm</b> <input type="checkbox" name="them" id="them" <?=(!isset($item['them']) || $item['them']==1)?'checked="checked"':''?>><br /><br />
	<b>Sửa</b> <input type="checkbox" name="sua" id="sua" <?=(!isset($item['sua']) || $item['sua']==1)?'checked="checked"':''?>><br /><br />
	<b>Xóa</b> <input type="checkbox" name="xoa" id="xoa" <?=(!isset($item['xoa']) || $item['xoa']==1)?'checked="checked"':''?>><br /><br />
	<b>Tất cả</b> <input type="checkbox" name="full" id="full" <?=(!isset($item['full']) || $item['full']==1)?'checked="checked"':''?>><br /><br />
	<b>Không cho thực thi</b> <input type="checkbox" name="none" <?=(!isset($item['none']) || $item['none']==1)?'checked="checked"':''?>><br /><br />
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=phanquyen&act=man'" class="btn" />
</form>