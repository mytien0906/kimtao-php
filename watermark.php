<?php
	session_start();
	$session=session_id();
  
function imagecreatefromfile($image_path) {

    // retrieve the type of the provided image file
    list($width, $height, $image_type) = getimagesize($image_path);

    // select the appropriate imagecreatefrom* function based on the determined
    // image type
    switch ($image_type)
    {
      case IMAGETYPE_GIF: return imagecreatefromgif($image_path); break;
      case IMAGETYPE_JPEG: return imagecreatefromjpeg($image_path); break;
      case IMAGETYPE_PNG: return imagecreatefrompng($image_path); break;
      default: return ''; break;
    }
}
	
	
	@define ( '_lib' , './admin/lib/');	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	$d->reset();
	$sql = "select photo from table_background where type='condau' ";
	$d->query($sql);
	$condau = $d->fetch_array();
	
	
  // Lấy kích thước hình ảnh
  $image = imagecreatefromfile('upload/sanpham/'.$_GET['image']);
  if(!$image) die('Unable to open image');
  
  $info = getimagesize('upload/sanpham/'.$_GET['image']);
  $arr_w = explode(' ',$info[3]);
  $w_hinh = preg_replace('/[^0-9]/','',$arr_w[0]);

  if($w_hinh > 400)
  {
	  $img_watermark = 'upload/hinhanh/'.$condau['photo'];
  }
  else
  {
	  $img_watermark = 'upload/hinhanh/'.$condau['photo'];
  }
  // Lấy kích thước hình ảnh

  // load watermark to memory
  $watermark = imagecreatefromfile($img_watermark);
  if (!$image) die('Unable to open watermark');

  // calculate the position of the watermark in the output image (the
  // watermark shall be placed in the lower right corner)
  $watermark_pos_x = imagesx($image) - imagesx($watermark) - 8;
  $watermark_pos_y = imagesy($image) - imagesy($watermark) - 10;

  // merge the source image and the watermark
  imagecopy($image, $watermark,  $watermark_pos_x, $watermark_pos_y, 0, 0,
    imagesx($watermark), imagesy($watermark));

  // output watermarked image to browser
  header('Content-Type: image/jpeg');
  imagejpeg($image);  // use best image quality (100)

  // remove the images from memory
  imagedestroy($image);
  imagedestroy($watermark);

?>