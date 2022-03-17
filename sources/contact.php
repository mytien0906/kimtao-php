<?php  if(!defined('_source')) die("Error");

	$title_cat = _lienhe;
	$keywords = $company_contact['keywords'];
	$description = $company_contact['description'];	

	$breadcumb ='<ul id="breadcrumb">
                <li><a href=""><span class="fa fa-home"> '._home.'</span></a></li>
               
                <li><a href="'.$com.''.$link_cat['tenkhongdau'].'.html">'.$title_link.'</a></li>
              </ul>';
	
	if(!empty($_POST)){
		$ten = trim(strip_tags($_POST['ten_lienhe']));
		$diachi = trim(strip_tags($_POST['diachi_lienhe']));
		$dienthoai = trim(strip_tags($_POST['dienthoai_lienhe']));
		$email = trim(strip_tags($_POST['email_lienhe']));
		$tieude = trim(strip_tags($_POST['tieude_lienhe']));
		$noidung = trim(strip_tags($_POST['noidung_lienhe']));
		$captcha = $_POST['g-recaptcha-response'];
		
		if(!$captcha){
			 $loicapcha = _hayxacnhancapcha;
		}else{
			//lấy IP của khach
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$remoteip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$remoteip = $_SERVER['REMOTE_ADDR'];
			}
			 
			//tạo link kết nối
			$api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
			//lấy kết quả trả về từ google
			$response = file_get_contents($api_url);
	
			if($response.success == false){
			  $loicapcha = _thulienhespam;
			}else{
			   /*-- gui mail --*/
				include_once "phpMailer/class.phpmailer.php";	
				$mail = new PHPMailer();
				$mail->IsSMTP(); 				// Gọi đến class xử lý SMTP
				$mail->Host       = $ip_host;   // tên SMTP server
				$mail->SMTPAuth   = true;       // Sử dụng đăng nhập vào account
				$mail->Username   = $mail_host; // SMTP account username
				$mail->Password   = $pass_mail;  
		
				//Thiết lập thông tin người gửi và email người gửi
				$mail->SetFrom($mail_host,$ten);
		
				//Thiết lập thông tin người nhận và email người nhận
				$mail->AddAddress($company['email'], $company['ten']);
				
				//Thiết lập email nhận hồi đáp nếu người nhận nhấn nút Reply
				$mail->AddReplyTo($email,$ten);
		
				//Thiết lập file đính kèm nếu có
				if(!empty($_FILES['file']))
				{
					$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);	
				}
				
				//Thiết lập tiêu đề email
				$mail->Subject    = $tieude." - ".$ten;
				$mail->IsHTML(true);
				
				//Thiết lập định dạng font chữ tiếng việt
				$mail->CharSet = "utf-8";	
					$body = '<table>';
					$body .= '
						<tr>
							<th colspan="2">&nbsp;</th>
						</tr>
						<tr>
							<th colspan="2">Thư liên hệ từ website <a href="'.$_SERVER["SERVER_NAME"].'">'.$_SERVER["SERVER_NAME"].'</a></th>
						</tr>
						<tr>
							<th colspan="2">&nbsp;</th>
						</tr>
						<tr>
							<th>Họ tên :</th><td>'.$ten.'</td>
						</tr>
						<tr>
							<th>Địa chỉ :</th><td>'.$diachi.'</td>
						</tr>
						<tr>
							<th>Điện thoại :</th><td>'.$dienthoai.'</td>
						</tr>
						<tr>
							<th>Email :</th><td>'.$email.'</td>
						</tr>
						
						<tr>
							<th>Tiêu đề :</th><td>'.$tieude.'</td>
						</tr>
						<tr>
							<th>Nội dung :</th><td>'.$noidung.'</td>
						</tr>';
					$body .= '</table>';
					$data1['ten'] = $_POST['ten'];
					$data1['diachi'] = $_POST['diachi'];
					$data1['dienthoai'] = $_POST['dienthoai'];
					$data1['email'] = $_POST['email'];
					$data1['tieude'] = $_POST['tieude'];
					$data1['noidung'] = $_POST['noidung'];
					$data1['stt'] = $_POST['stt'];

					$data1['ngaytao'] = time();
					$d->setTable('contact');
					$d->insert($data1);
					$mail->Body = $body;
					if($mail->Send())
						transfer(_guilienhethanhcong, "lien-he.html");
					else
						transfer(_guilienhethatbai, "lien-he.html");
			   /*-- end gui mail*/
			}
		}
	}
?>
