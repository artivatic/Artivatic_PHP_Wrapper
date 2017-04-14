<?php 
include_once 'ApiCalling.php';
class  InterectAPiCalling
{
	public function interectAPi($BASE_URL,$apikey,$userId,$productId,$interactLevel)
{
	$urladd='interact/'.$userId.'/'.$productId;
	
	
	$arr=array('level'=>$interactLevel);
	
	$calling=new ApiCallingData();
	$calling->addApiKey($BASE_URL,$apikey);
	$response=$calling->apiCalling(0,$arr,$urladd);
	return $response;
	
	
}
public function interectPredictionAPi($BASE_URL,$apikey,$userId,$productId,$interactLevel,$predictId)
{
	$urladd='interact/'.$userId.'/'.$productId;
	
	
	$arr=array('level'=>$interactLevel,'predictId'=>$predictId);
	echo json_encode($arr);
	
	$calling=new ApiCallingData();
	$calling->addApiKey($BASE_URL,$apikey);
	echo $urladd;
	$response=$calling->apiCalling(0,$arr,$urladd);
	return $response;
	
	
}
}


?>