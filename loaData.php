<?php
	$data = array(
		array('id' => 1, 'color'  => 'rgba(35,20,212,7)', 'resourceId' => 'a', 'start' => '2016-04-13 00:30', 'end' => '2016-04-13 02:30', 'title' => 'event 1'),
		array('id' => 2, 'color'  => '#000', 'resourceId' => 'b', 'start' => '2016-04-14 02:00', 'end' => '2016-04-14 15:00', 'title' => 'event 2'),
		array('id' => 3, 'color'  => '#000', 'resourceId' => 'c', 'start' => '2016-04-15 04:00', 'end' => '2016-04-15 11:00', 'title' => 'event 4'),
	);

	echo json_encode($data);
?>