<?php
	$data = array(
		array('id' => 1, 'color'  => 'rgba(35,20,212,7)', 'resourceId' => 'a', 'start' => '2016-01-05T02:00:00', 'end' => '2016-01-05T07:00:00', 'title' => 'event 1'),
		array('id' => 2, 'color'  => '#000', 'resourceId' => 'b', 'start' => '2016-01-06T05:00:00', 'end' => '2016-01-06T22:00:00', 'title' => 'event 2'),
		array('id' => 3, 'color'  => '#000', 'resourceId' => 'c', 'start' => '2016-01-07T03:00:00', 'end' => '2016-01-07T08:00:00', 'title' => 'event 4'),
	);

	echo json_encode($data);
?>