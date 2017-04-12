<?php 
include_once 'ApiCalling.php';
class AddUserData
{
	/*
	 * Call user Register API
	 * 
	 */
	public function addUser($BASE_URL,$apikey,$userId,$body)
	{
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$body,"user".'/'.$userId);
		return $response;
	}
	
}

?>