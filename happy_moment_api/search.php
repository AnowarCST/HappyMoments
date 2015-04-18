<?php

require_once 'db.php';
require_once 'helper.php';
//$user_id = $_POST['user_id'];
//$user_id = 1;
$conn = new mysqli($servername, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    $data['msg'] = "Connection failed: " . $conn->connect_error;
} else {
	if(isset($_REQUEST['page'])){
		switch($_REQUEST['page']){
			case 'category':
				$sql = "SELECT id,title FROM category where status='1'";
			break;
			case 'image':
				if(isset($_REQUEST['category_id'])){
					$sql = "SELECT id,title,image
					FROM gallery 
					WHERE category_id= $_REQUEST[category_id] LIMIT 10";
				}else{
					response_exit('Search with right parameter');
				}
			break;
			default:
				response_exit('Search with right parameter');
				
			break;
		}
	}else{
		response_exit('Search with right parameter');
	}
	
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$data['response'][] = $row;
		}
		$data['dataset'] = $result->num_rows;
    } else {
		$data['response'] = 'no data found';
        $data['dataset'] = 0;
    }
}
$conn->close();

echo json_encode($data);