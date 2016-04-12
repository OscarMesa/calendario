<?php 

	$data = $_POST['event'];
	$data['id'] = uniqid();

	echo json_encode($data);

?>