<?php 


function response_exit($msg=''){
	if($msg){
		$data['response'] = $msg;
	}else{
		$data['response'] = 'request error';
	}
	echo json_encode($data);
	
	exit();
}