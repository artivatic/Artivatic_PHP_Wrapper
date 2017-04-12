<?php 
include 'SuggestionDataModel.php';
include_once  'ApiCalling.php';
class SuggestProduct
{
	/*
	 * Call user to product suggestion api
	 */
	public function  suggestUsersToProduct($BASE_URL,$apikey,$data1,$productId)
	{
		
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$data1,"suggestUsersToProduct/ids/".$productId);
		return $response;
		
	}
	
}

?>