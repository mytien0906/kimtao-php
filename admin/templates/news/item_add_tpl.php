<script language="javascript">	
		
	function select_onchange()
	{				
		var a=document.getElementById("id_danhmuc");
		window.location ="index.php?com=news&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?><?php if($_REQUEST['type']!='') echo"&type=".$_REQUEST['type']; ?>&id_danhmuc="+a.value;	
		return true;
	}
	function select_onchange1()
	{				
		var a=document.getElementById("id_danhmuc");
		var b=document.getElementById("id_list");
		window.location ="index.php?com=news&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?><?php if($_REQUEST['type']!='') echo"&type=".$_REQUEST['type']; ?>&id_danhmuc="+a.value+"&id_list="+b.value;	
		return true;
	}	

</script>
<?php
	function get_main_danhmuc()
		{
			$sql_huyen="select * from table_news_danhmuc where type='".$_REQUEST['type']."' order by stt,id desc ";
			$result=mysql_query($sql_huyen);
			$str='
				<select id="id_danhmuc" name="id_danhmuc" onchange="select_onchange()" class="main_select select_danhmuc">
				<option value="0">Chọn danh mục</option>
				';
			while ($row_huyen=@mysql_fetch_array($result)) 
			{
				if($row_huyen["id"]==(int)@$_REQUEST["id_danhmuc"])
					$selected="selected";
				else 
					$selected="";
				$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten"].'</option>';			
			}
			$str.='</select>';
			return $str;
		}
	function get_main_list()
	{
		$sql="select * from table_news_list where id_danhmuc=".$_REQUEST['id_danhmuc']."  order by stt";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_list" name="id_list" onchange="select_onchange1()" class="main_select select_danhmuc">
			<option>Chọn danh mục</option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)@$_REQUEST["id_list"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	$d->reset();
	$sql_images="select * from #_hinhanh where id_hinhanh='".$item['id']."' and type='".$_GET['type']."' order by stt, id desc ";
	$d->query($sql_images);
	$ds_photo=$d->result_array();
?>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	            <li><a href="index.php?com=news&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>bài viết</span></a></li>
                                    <li class="current"><a href="#" onclick="return false;">Thêm</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
				$('#validate').submit();		
	}
	
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=news&act=save&curPage=<?=$_REQUEST['curPage']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
	

     <div class="widget">
         <div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
            <h6>Nhập dữ liệu</h6>
        </div>
       <ul class="tabs">
           
           <li>
               <a href="#info">Thông tin chung</a>
           </li>
           <?php foreach ($config['lang'] as $key => $value) { ?>
           <li>
               <a href="#content_lang_<?=$key?>"><?=$value?></a>
           </li>
           <?php } ?>


       </ul>

       <div id="info" class="tab_content">
          <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
          <?php if($_GET['type']=='san-pham-dich-vu' || $_GET['type']=='bat-dong-san' || $_GET['type']=='du-an'  ) { ?>  
		<div class="formRow">
			<label>Chọn danh mục cấp 1</label>
			<div class="formRight">
			<?=get_main_danhmuc()?>
			</div>
			<div class="clear"></div>
		</div>
  <?php } ?>
        
        <div class="formRow none">
			<label>Chọn danh mục cấp 2</label>
			<div class="formRight">
			<?=get_main_list()?>
			</div>
			<div class="clear"></div>
		</div>
         
        <div class="formRow">
			<label>Tải hình ảnh:</label>
			<div class="formRight">
            	<input type="file" id="file" name="file" />
				<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
				<div class="note"> Height:380px | Width: 300px  <?=_format_duoihinh_l?> </div>
			</div>
			<div class="clear"></div>
		</div>
         <?php if($_GET['act']=='edit'){?>
		<div class="formRow">
			<label>Hình Hiện Tại :</label>
			<div class="formRight">
			
			<div class="mt10"><img src="<?=_upload_tintuc.$item['thumb']?>"  width="100px" alt="NO PHOTO" /></div>

			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
        
        <?php if($_GET['type']=='congtrinh' or $_GET['type']=='du-an') { ?>
        	<div class="formRow">
              <label>Hình ảnh kèm theo: width:1200px - height:500px </label>
               <?php if($act=='edit'){?>
               <div class="formRight">
              <?php if(count($ds_photo)!=0){?>       
                    <?php for($i=0;$i<count($ds_photo);$i++){?>
                      <div class="item_trich trich<?=$ds_photo[$i]['id']?>" id="<?=md5($ds_photo[$i]['id'])?>">
                           <img class="img_trich" width="100px" height="80px" src="<?=_upload_hinhthem.$ds_photo[$i]['photo']?>" />
                         <input data-val0="<?=$ds_photo[$i]['id']?>" data-val2="table_hinhanh" data-val3="stt" onblur="stt(this);" type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS" />
                         <a style="cursor:pointer" class="remove_images" data-id="<?=$ds_photo[$i]['id']?>"><i class="fa fa-trash-o"></i></a>
                      </div>
                    <?php }?>
                
              <?php }?>
                </div>
            <?php }?>
              <div class="formRight">
                  <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><i class="fa fa-paperclip"></i> Thêm ảnh</a>                
        
              </div>
                  <div class="clear"></div>
                </div>
        <?php } ?>
        
 	<div class="formRow">
            <label>Title</label>
            <div class="formRight">
                <input type="text" value="<?=@$item['title']?>" name="title" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Thẻ tag:</label>
            <div class="formRight">
                <textarea rows="8" cols="" title="Mỗi thẻ tag cách nhau bởi dấu , " class="tipS description_input" name="tag"><?=@$item['tag']?></textarea>
                <b>(Mỗi thẻ tag cách nhau bởi dấu , )</b>
            </div>
            <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Từ khóa</label>
            <div class="formRight">
                <input type="text" value="<?=@$item['keywords']?>" name="keywords" title="Từ khóa chính cho bài viết" class="tipS" />
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
            <label>Description:</label>
            <div class="formRight">
                <textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS description_input" name="description"><?=@$item['description']?></textarea>
                <b>(Tốt nhất là 68 - 170 ký tự)</b>
            </div>
            <div class="clear"></div>
        </div>
        
        <div class="formRow">
          <label>Nổi bật : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>

         <div class="formRight">
            <input type="checkbox" name="noibat" id="check1" <?=(!isset($item['noibat']) || $item['noibat']==1)?'checked="checked"':''?> />
            </div>
			<div class="clear"></div>
          </div>
          
        <div class="formRow">
          <label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
          <div class="formRight">
         
            <input type="checkbox" name="hienthi" id="check1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
             <label>Số thứ tự: </label>
              <input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" original-title="Số thứ tự của danh mục, chỉ nhập số">
          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
            <div class="formRight">
                
                <input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
                <a href="index.php?com=news&act=man<?php if($_REQUEST['curPage']!='') echo'&curPage='.$_REQUEST['curPage'];?><?php if($_REQUEST['type']!='') echo'&type='.$_REQUEST['type'];?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>
            </div>
            <div class="clear"></div>
        </div>

       </div>
       <!-- End info -->
        <?php foreach ($config['lang'] as $key => $value) {
        ?>

       <div id="content_lang_<?=$key?>" class="tab_content">        
            <div class="formRow">
            <label>Tên bài viết</label>
            <div class="formRight">
                <input type="text" name="ten<?=$key?>" title="Nhập tên bài viết" id="ten<?=$key?>" class="tipS" value="<?=@$item['ten'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div>  
        <?php if($_GET['type']=='du-an') { ?>
          <div class="formRow">
            <label>Ngành nghề</label>
            <div class="formRight">
                <input type="text" name="nganhnghe<?=$key?>" title="Nhập ngành nghề bài viết" id="nganhnghe<?=$key?>" class="tipS" value="<?=@$item['nganhnghe'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div>  
          <div class="formRow">
            <label>Vị Trí</label>
            <div class="formRight">
                <input type="text" name="vitri<?=$key?>" title="Nhập vị trí bài viết" id="vitri<?=$key?>" class="tipS" value="<?=@$item['vitri'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div>  
          <div class="formRow">
            <label>Chủ đầu tư</label>
            <div class="formRight">
                <input type="text" name="chudautu<?=$key?>" title="Nhập chủ đầu tư bài viết" id="chudautu<?=$key?>" class="tipS" value="<?=@$item['chudautu'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div>  
          <div class="formRow">
            <label>Tổng thầu</label>
            <div class="formRight">
                <input type="text" name="tongthau<?=$key?>" title="Nhập tổng thầu bài viết" id="tongthau<?=$key?>" class="tipS" value="<?=@$item['tongthau'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div>  
          <div class="formRow">
            <label>Quy mô</label>
            <div class="formRight">
                <input type="text" name="quymo<?=$key?>" title="Nhập quy mô bài viết" id="quymo<?=$key?>" class="tipS" value="<?=@$item['quymo'.$key]?>" />
            </div>
            <div class="clear"></div>
        </div> 
        <?php } ?> 

        <div class="formRow">
            <label>Mô tả ngắn:</label>
            <div class="formRight">
                <textarea  rows="8" cols="" title="Viết mô tả ngắn bài viết" class="tipS" name="mota<?=$key?>" id="mota<?=$key?>"><?=@$item['mota'.$key]?></textarea>
            </div>
            <div class="clear"></div>
        </div>  

            <div class="formRow">
            <label>Nội dung chính: <img src="./images/question-button.png" alt="Chọn loại"  class="icon_que tipS" original-title="Viết nội dung chính"> </label>
            <div class="formRight"><textarea class="ck_editor" name="noidung<?=$key?>" id="noidung<?=$key?>" rows="8" cols="60"><?=@$item['noidung'.$key]?></textarea>
</div>
            <div class="clear"></div>
        </div>

        <div class="formRow">
            <div class="formRight">
            	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
                <input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
                <input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            </div>
            <div class="clear"></div>
        </div>

       </div><!-- End content <?=$key?> -->
      
     <?php } ?>
 

    </div> 
</form> 
<script type="text/javascript">
		$('.remove_images').click(function(){
			var id=$(this).data("id");
			$.ajax({
				type: "POST",
				url: "ajax/xuly_admin_dn.php",
				data: {id:id, act: 'remove_image'},
				success:function(data){
					$jdata = $.parseJSON(data);					
					$("#"+$jdata.md5).fadeOut(500);
					setTimeout(function(){
						$("#"+$jdata.md5).remove();
					}, 1000)
				}
			})
		})
	
</script>
<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" />\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
  });
</script>
