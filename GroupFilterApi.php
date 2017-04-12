<?php 

include_once 'GroupFilterData.php';
include_once 'ApiCalling.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class GroupFilterApi
{
	/*
	 * Call group predict with filters
	 */
	public function predictFilterData( $BASE_URL,$apikey,$Filter,$useId,$sort,$product,$groupId)
	{
		$content=new GroupFilterData();
		$content->addPredict($Filter,$useId,$sort,$product,$groupId);
		echo json_encode($content);
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$content,"groupPredictFilter/details");
		return $response;
	}
	
}


?>