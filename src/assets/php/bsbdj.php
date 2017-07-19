<?php 
header('Access-Control-Allow-Origin:*');
  if(!empty($_GET['type'])){
   $type = $_GET['type'];
  }else{
    $type = 41;
  }
  if(!empty($_GET['page'])){
   $page = $_GET['page'];
  }else{
    $page = 1;
  }
$data = array("showapi_appid"=>"40563","showapi_sign"=>"983100feb3364ed7bb63bd01e653fdcd","type"=>$type,"page"=>$page);  
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
 $sFile = file_get_contents("http://route.showapi.com/255-1", false, $cxContext);  
 
 echo $sFile;  