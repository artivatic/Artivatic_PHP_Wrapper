<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class SaveGroup
{
	public  $client_user_id="";
	public $client_member_id =array();
	public  $client_group_id = "";
	public  $group_name = "";
	public $av_group_id = "";
	
	
	public function addSaveData($client_user_id,$client_member_id,$client_group_id,$group_name,$av_group_id)
	{
		$this->client_user_id=$client_user_id;
		$this->client_member_id=$client_member_id;
		$this->client_group_id=$client_group_id;
		$this->group_name=$group_name;
		$this->av_group_id=$av_group_id;
		
		
	}
	
	public function __construct()
	{
		return $this;
		//return $this;
	}
	
	public function setClientUserId($client_user_id) {
		$this->client_user_id= $client_user_id;
		
	}
	public function getClientUserId() {
		return $this->client_user_id;
	}
	
	public function setClientMemeberId($client_member_id) {
		$this->client_member_id= $client_member_id;
		
	}
	public function getClientMemberId() {
		return $this->client_member_id;
	}
	
	public function getClientGroupId() {
		return $this->client_group_id;
	}
	public function setClientGroupId($client_group_id) {
		$this->client_group_id= $client_group_id;
		
	}
	public function getGroupName() {
		return $this->group_name;
	}
	public function setGroupName($group_name) {
		$this->group_name= $group_name;
		
	}
	
	public function setAvGroupId($av_group_id) {
		$this->av_group_id= $av_group_id;
		
	}
	public function getAvGroupId() {
		return $this->av_group_id;
	}
	
	public function jsonSerialize() {
		$getter_names = get_class_methods(get_class($this));
		$gettable_attributes = array();
		foreach ($getter_names as $key => $value) {
			if(substr($value, 0, 4) === 'get_') {
				$gettable_attributes[substr($value, 4, strlen($value))] = $this->$value();
			}
		}
		return $gettable_attributes;
	}
	
	
}
// $save=new SaveGroup();
// $save->setClientUserId("104");
// $save->setAvGroupId("455");
// //$save->setClientMemeberId(array("144","500"));
// echo json_encode($save);
?>
