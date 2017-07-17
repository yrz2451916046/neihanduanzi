<?php 
header('Access-Control-Allow-Origin:*');
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = -101;
  }
$data = array("showapi_appid"=>"40563","showapi_sign"=>"983100feb3364ed7bb63bd01e653fdcd","type"=>"41");  
 $data = http_build_query($data);  
 $opts = array(  
   'http'=>array(  
     'method'=>"POST",  
     'header'=>"Content-type: application/x-www-form-urlencoded\r\n".  
               "Content-length:".strlen($data)."\r\n" .   
               "Cookie: foo=bar\r\n" .   
               "\r\n",  
     'content' => $data,  
   )  
 );  
 $cxContext = stream_context_create($opts);  
 // echo "$cxContext";
 // echo $id;
 $url = "http://iu.snssdk.com/neihan/stream/mix/v1/?mpic=1&webp=1&essence=1&content_type=-102&message_cursor=-1&am_longitude=110&am_latitude=120&am_city=%E5%8C%97%E4%BA%AC%E5%B8%82&am_loc_time=1463225362814&count=30&min_time=1489143837&screen_width=1450&do00le_col_mode=0&iid=3216590132&device_id=32613520945&ac=wifi&channel=360&aid=7&app_name=joke_essay&version_code=612&version_name=6.1.2&device_platform=android&ssmix=a&device_type=sansung&device_brand=xiaomi&os_api=28&os_version=6.10.1&uuid=326135942187625&openudid=3dg6s95rhg2a3dg5&manifest_version_code=612&resolution=1450*2800&dpi=620&update_version_code=6120"
 $sFile = file_get_contents($url, false, $cxContext);  
 
 echo $sFile;  