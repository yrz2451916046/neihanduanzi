<?php 
header('Access-Control-Allow-Origin:*');
  if(!empty($_GET['id'])){
   $id = $_GET['id'];
  }else{
    $id = -102;
  }
$data = array("webp"=>"1","essence"=>"1","content_type"=>$id,"message_cursor"=>"-1","count"=>"50","double_col_mode"=>"0","ac"=>"wifi","aid"=>"7","app_name"=>"joke_essay","ssmix"=>"a");  
 $data = http_build_query($data);  
 $opts = array(  
   'http'=>array(  
     'method'=>"POST",  
     'header'=>"Content-type: application/x-www-form-urlencoded\r\n".  
               "Content-length:".strlen($data)."\r\n" . 
               // "Accept-Encoding:gzip, deflate,utf-8".
               "Cookie: foo=bar\r\n" .   
               "\r\n",  
     'content' => $data,  
   )  
 );  
 $cxContext = stream_context_create($opts);  
 // echo "$cxContext";
 $sFile = file_get_contents("http://ic.snssdk.com/neihan/video/playback/?video_id=7352a3ad45d244ac960c2fc8e18ceb10&quality=480p&line=0&is_gif=0&device_platform=.mp4", false, $cxContext);  
 
 echo $sFile;  