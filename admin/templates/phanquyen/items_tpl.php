<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
<?php
	$d->query("select * from #_group order by stt, id desc");
	$user = $d->result_array();
?>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="#"><span>Quản lý phân quyền thành viên</span></a></li>
        	
        </ul>
        <div class="clear"></div>
    </div>
</div>
<div class="widget">
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
    <thead>
      <tr>
        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>           
        <td>Tên tài khoản </td>
		<td>Phân quyền </td>
      </tr>
    </thead>

    <tbody>
         <?php for($i=0, $count=count($user); $i<$count; $i++){?>
       <tr>
        <td align="center">
            <?=($i+1)?>
        </td> 

        <td class="title_name_data">
            <?=$user[$i]['ten_vi']?>
        </td>
		<td class="title_name_data">
            <a href="" class="set-per cls_<?=$user[$i]['id']?>" data-id="<?=$user[$i]['id']?>">Phân quyền</a>
        </td>
      </tr>
         <?php } ?>
    </tbody>
  </table>
</div>

<input type="hidden" id="c_id">
<!--<a href="#add-role" class="btn btn-success" id="btn-add">Thêm quyền</a>-->
<div id="permission-draw">
</div>
<div class="hide">
	<div id="add-form">
	
	</div>

</div>

<script>
	$().ready(function(){
		$("#btn-add").fancybox({beforeLoad:function(){
			if($("#form-add-role").find("input[name=id]").val()!=""){
				$("#form-add-role").find("button").html('Sửa');
			
			}else{
				$("#form-add-role").find("button").html('Thêm');
			}
		
		
		}});
		$("#add-role-btn").click(function(){
			$.ajax({
				url:base_url+"/admin/index.php?com=phanquyen&act=add-role",
				data:$("#form-add-role").serialize(),
				type:"post",
				dataType:"json",
				success:function(data){
					console.log(data);
					if(data.stt){
						$.fancybox.close();
						$(".cls_"+$("#c_id").val()).click();
						$("#form-add-role input").val("");
						
					
					}else{
						alert("Có lỗi");
					
					}
					
					console.log(data);
				}
			
			})
			return false;
		})
		$(".set-per").click(function(){
			$("#c_id").val('');
			$id = $(this).data("id");
			$("#c_id").val($id);
			$.ajax({
				url:"index.php?com=phanquyen&act=load",
				data:{id:$id},
				type:'post',
				
				success:function(data){	
					
					$("#permission-draw").html(data);
					//console.log(data);
					return false;
				
				
				}
			
			})
			return false;
		
		})
	
	})


</script>
<div class="hide" style="display: none">
	<div id="add-role" style="width:400px" class="">
	
	<form class="form-horizontal" role="form" id="form-add-role">
  <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="exampleInputPassword1">Name</label>
	<div class="col-sm-10">
    <input type="text" class="form-control input-sm" id="exampleInputPassword1" name="role[name]" placeholder="Tên">
	</div>
  </div>

  <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="exampleInputPassword1">Com</label>
	<div class="col-sm-10">
    <input type="text" class="form-control input-sm" id="exampleInputPassword1" name="role[com]" placeholder="Com">
	</div>
  </div>
		<div class="form-group form-group-sm">
		<label class="col-sm-2 control-label" for="exampleInputPassword1">Xem</label>
		<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1" name="role[man_exec]" placeholder="Xem">
		</div>
	  </div>
	   <div class="form-group form-group-sm">
		<label class="col-sm-2 control-label" for="exampleInputPassword1">Thêm</label>
		<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1" name="role[add_exec]" placeholder="Thêm">
		</div>
	  </div>
	   <div class="form-group form-group-sm">
		<label class="col-sm-2 control-label" for="exampleInputPassword1">Xóa</label>
		<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1"  name="role[delete_exec]" placeholder="Xóa">
		</div>
	  </div>
	

   <div class="form-group form-group-sm">
    <label class="col-sm-2 control-label" for="exampleInputPassword1">Sửa</label>
	<div class="col-sm-10">
    <input type="text" class="form-control input-sm" id="exampleInputPassword1"  name="role[edit_exec]" placeholder="Sửa">
	</div>
  </div>
  <div class="form-group form-group-sm">
	<label class="col-sm-2 control-label" for="exampleInputPassword1">ID</label>
	<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1"  name="role[id_exec]" placeholder="ID">
	</div>
  </div>
  <div class="form-group form-group-sm">
	<label class="col-sm-2 control-label" for="exampleInputPassword1">ID</label>
	<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1"  name="role[id_exec]" placeholder="ID">
	</div>
  </div>
  <div class="form-group form-group-sm">
	<label class="col-sm-2 control-label" for="exampleInputPassword1">More fuction</label>
	<div class="col-sm-10">
		<input type="text" class="form-control input-sm" id="exampleInputPassword1"  name="role[act_exec]" placeholder="ID">
	</div>
  </div>
  <div class="form-group form-group-sm">
	<label class="col-sm-2 control-label" for="exampleInputPassword1">&nbsp;</label>
  <input type="hidden" class="form-control" id="exampleInputPassword1"  name="id" >
  <div class="col-sm-10">
	<button type="submit" class="btn btn-default" id="add-role-btn">Thêm</button>
  </div>
  </div>
</form>
</div>

</div>