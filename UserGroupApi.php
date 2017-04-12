<?php
include_once  'ApiCalling.php';
class UserGroup
{
	/*
	 *  Call group list api
	 */
	public function getUserGroup($BASE_URL,$apikey,$client_user_id)
	{
		$body=array('client_user_id'=>$client_user_id);
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$body,"getUserGroups");
		return $response;
	
	}	
}


?>