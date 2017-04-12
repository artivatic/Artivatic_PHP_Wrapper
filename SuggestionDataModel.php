<?php 
//include 'FilterData.php';
include 'TypeValueFilter.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class SuggestionData
{
public $filter=[];
public	$userIds=array();

public function addSuggestion($filter)
{
 $this->filter=$filter;
 
}

public function __construct()
{
	return $this;
}
public function  set_userIds($userIDs)
{
	$this->userIds=$userIDs;
}
public function get_userIds()
{
	
	return $this->userIds;
	
}

public function set_Filter($type_value,$collumn_name,$value) {
	
	$examp = new TypeValue();
	$newFilter = $examp->newFilt($type_value,$collumn_name,$value);
	$this->filter =$newFilter;
	
	

}
public function get_Filter() {
	return $this->filter;
	
}
}
// $data1=new SuggestionData();
// // $data2=new TypeValue();
// $data1->set_Filter("jkjk","jjkjkk","jkjkj");

// $data1->set_userIds(array("1","2"));
// echo json_encode($data1);
// class Filter4
// {
// 	public $type_value = "";
// 	public $collumn_name = "";
// 	public $value = "";
// 	public function newFilt($type_value,$collumn_name,$value)
// 	{
// 		$this->type_value=$type_value;
// 		$this->collumn_name=$collumn_name;
// 		$this->value=$value;
// 		return $this;
		
// 	}
	

// }

?>