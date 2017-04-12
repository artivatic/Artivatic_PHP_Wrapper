<?php 

include_once  'FilterData.php';
include_once'ApiCalling.php';

class FilterApiCalling
{
	/*
	 * Call predict with filters
	 */
	
	public function predictFilter( $Filter,$useId,$sort,$product,$BASE_URL,$apikey)
	{
		
		$content=new FilterData();
		
		$content->addPredictData($Filter,$useId,$sort,$product);
		$data= $content->jsonSerialize();
		
		echo  json_encode($data);
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
	$response=$calling->apiCalling(0,$data,"predictFilter/details");
	return $response;
	}
}


?>