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
}


?>