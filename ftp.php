<?php
 function ftp_upload($file){
	 $ftp_server="bordon.xicp.net"; 
	 $ftp_user_name="upload"; 
	 $ftp_user_pass="upload"; 
	 $local_file='/var/www/html/phpcms/uploadfile/video/org/'.$file;
	 // set up basic connection 
	 $conn_id = ftp_connect($ftp_server); 

	 // login with username and password 
	 $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 
	  // upload a file 
	 ftp_put($conn_id, $file, $local_file, FTP_BINARY);

	 // close the connection 
	 ftp_close($conn_id); 	
	}
ftp_upload('test.mp4');
?>

