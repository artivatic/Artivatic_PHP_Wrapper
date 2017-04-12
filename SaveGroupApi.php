<?php 
include_once 'SaveGroupDetail.php';
include_once 'ApiCalling.php';
$BaseUrl='https://demoapi.artivatic.com/';
$ApiKey='o/bsjA45eCg68wzM0WUvCg==';
class SaveGroupApi
{
	
	public function SaveGroup($BASE_URL,$apikey,$data)
	{
		
		
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$data,"saveGroupDetails");
		return $response;
	}
}


?>
