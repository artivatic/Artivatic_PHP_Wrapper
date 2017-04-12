<?php 
include_once 'ApiCalling.php';
class GroupMember
{
	/*
	 *  Call group details api
	 */
	public function getGroupMember($BASE_URL,$apikey,$client_groupid)
	{
		$body=array('client_group_id'=>$client_groupid);
		//echo json_encode($body);
		
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		$response=$calling->apiCalling(0,$body,"getGroupMembers");
		return $response;
	}
}

?>