<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class GroupFilterData {
	
	public $filter=array();
	public $product=array();
	public $sort=array();
	public $userIds=array();
	public $groupId="";
	public $search="";
	
	public function __construct() {
		$this->filter=[];
		$this->product=array();
		$this->sort=array();
		$this->userIds=array();
		$this->groupId ="";
		$this->search="";
		return $this;
		
	}
	public function  addPredict($Filter,$useId,$sort,$product,$groupId)
	{
		$this->filter=$Filter;
		$this->userIds=$useId;
		$this->sort=$sort;
		$this->product=$product;
		$this->groupId=$groupId;

		return $this;
		
	}
	public function setGroupId($groupId)
	{
		
		$this->groupId=$groupId;
		
	}
	public function getGroupId()
	{
		return $this->groupId;
	}
	
	public function get_filter() {
		
		return $this->filter;
	}
	
	public function set_filter($category) {
		$examp = new GroupFilterArray($category);
		$newFilter = $examp->addFilter(
				$type_value,$collumn_name,$value);
		$this->filter[] = $newFilter;
		
	}
	
	
	
	public function set_search($search) {
		$this->search = $search;
		
	}
	public function get_search() {
		return $this->search;
	}
	public function set_userIds($UserID,$weight)
	{
		$data=new UserData($UserID,$weight);
		$newdata=$data->addUser($UserID,$weight);
		$this->userIds[]=$newdata;
		json_encode($this->userIds[0]);
	}
	public function get_userIds()
	{
		return $this->userIds;
	}
	public function set_productId($productId)
	{
		$data3=new ProductId($productId);
		$newdata4=$data3->addProduct($productId);
		$this->product[]=$newdata4;
		json_encode($this->product[0]);
	}
	public function get_ProductId()
	{
		return $this->product;
	}
	public function get_sort()
	{
		return $this->sort;
	}
	public function set_sort($collumn_name,$type)
	{
		$data=new SortData($collumn_name,$type);
		$data1 = $data->addSortData($collumn_name,$type);
		$this->sort = array($data1);
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

class ProductId
{
	public $client_product_id = "";
	public function __construct($client_product_id)
	{
		$this->client_product_id=$client_product_id;
		return $this;
		
	}
	public function addProduct($client_product_id)
	{
		$this->client_product_id=$client_product_id;
		return $this;
		
	}
	
}

class UserData
{
	public $UserID="";
	public $weight="";

	public function __construct($UserID,$weight)
	{
		
		$this->UserID=$UserID;
		$this->weight=$weight;
		
		return $this;
	}
	
	public function addUser($UserID,$weight)
	{
		$this->UserID=$UserID;
		$this->weight=$weight;
		
		return $this;
	}
}

class SortData
{
	public $collumn_name = "";
	public $type = "";
	
	public function __construct($collumn_name,$type)
	{
		
		$this->collumn_name=$collumn_name;
		$this->type=$type;
		
		return $this;
	}
	
	public function addSortData($collumn_name,$type)
	{
		$this->collumn_name=$collumn_name;
		$this->type=$type;
		
		return $this;
		
	}
	
}
class GroupFilterList
{
	public $type_value = "";
	public $collumn_name = "";
	public $value = "";
	public function addFilterList($type_value,$collumn_name,$value)
	{
		$this->type_value=$type_value;
		$this->collumn_name=$collumn_name;
		$this->value=$value;
		//echo json_encode($this);
		return $this;
		
	}
	
}
class GroupFilterArray
{
	public $Filter=[];
	public $category="";
	public function __construct($category)
	{
		$this->category = $category;
		$this->Filter=[];
	}
	
	
	public function addFilter($type_value, $collumn_name, $value) {
		
		$childFilter=new GroupFilterList();
		$data = $childFilter->addFilterList($type_value, $collumn_name, $value);
		$this->Filter[] = $data;
		//echo "valueee".json_encode($this);
		return $this;
		
	}
	/**
	 * @param attributeName name of product attribute for filtering
	 * @param value value field should match
	 * */
	public function addFilterColumnEquals($attributeName,  $value){
		$this->addFilter("EQUALS",$attributeName,$value);
	}
	/**
	 * @param attributeName name of product attribute for filtering
	 * @param value value attribute should be less than
	 * */
	public function addFilterCollumnLessThan($attributeName,$value){
		$this->addFilter("LESS_THAN",$attributeName,$value);
	}
	/**
	 * @param attributeName name of product attribute for filtering
	 * @param value value attribute should be greater than
	 * */
	public function addFilterCollumnGreaterThan($attributeName, $value){
		$this->addFilter("GREATER_THAN",$attributeName,$value);
	}
	/**
	 * @param attributeName name of product attribute for filtering
	 * @param value value attribute should be less than
	 * */
	public function addFilterCollumnLessThanEquals( $attributeName, $value){
		$this->addFilter("LESS_THAN_EQUALS",$attributeName,$value);
	}
	/**
	 * @param attributeName name of product attribute for filtering
	 * @param value value attribute should be greater than
	 * */
	public function addFilterCollumnGreaterThanEquals($attributeName, $value){
		$this->addFilter("GREATER_THAN_EQUALS",$attributeName,$value);
	}
}
// $filter=new GroupFilterData();
// echo json_encode($filter);


?>
