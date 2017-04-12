<?php 
include_once  'ApiCalling.php';
class GetMetaApi
{
	/*
	 *  Call user Register API
	 */
	public function getMetaData($BASE_URL,$apikey)
	{
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response = $calling->apiCalling(1,"","getclient/metadata");
		
		
		
		return $response;
	}
	
}

?>