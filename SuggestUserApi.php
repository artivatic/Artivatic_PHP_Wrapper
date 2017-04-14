<?php 
include_once 'SuggestionDataModel.php';
include_once  'ApiCalling.php';
class  SuggestUser
{
	/*
	 *  Call user suggestion api
	 */
	public function  suggestUsersToUsers($BASE_URL,$apikey,$data1,$userId)
	{
		/*
		 * Call the Api
		 */
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
	
		$response=$calling->apiCalling(0,$data1,"suggestUsersToUser/details/".$userId);
		return $response;
		
	}
}


?>