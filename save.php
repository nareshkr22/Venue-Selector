<?php


if(isset($_POST['count']) && $_POST['count'] > 0)
{
$count = $_POST['count'];
$venue = $_POST['venue'];
$file = 'venue'.$venue.'.txt';
$current = file_get_contents($file);
$current = $count;
file_put_contents($file, $current,LOCK_EX);
$response_array['status'] = 'success';  
}
else
{
	 $response_array['status'] = 'error';  
}  


header('Content-type: application/json');
echo json_encode($response_array);

?>