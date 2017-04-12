<?php 
     

class FilterData { 

	public $filter=array();
	public $product=array();
	public $sort=array();
	public $userIds=array();
	
	
	public $search="";
	
	public function __construct() {
		$this->filter=array();
		$this->product=array();
		$this->sort=array();
		$this->userIds=array();
		$this->groupId ="";
		return $this;

	}
	
	public function  addPredictData( $Filter,$useId,$sort,$product)
	{
		$this->filter=$Filter;
		$this->userIds=$useId;
		$this->sort=$sort;
		$this->product=$product;
// 
	return $this;
	}
	public function get_filter() {

		return $this->filter;
	}
	
	public function set_filter($filter) {
		$examp = new FilterArray($filter);
		$newFilter = $examp->addFilterArray(
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
		$data=new UserId();
		$newdata=$data->addUserId($UserID,$weight);
		$this->userIds[]=$newdata;
		json_encode($this->userIds[0]);
	}
	public function get_userIds()
	{        
		return $this->userIds;
	}
	public function set_products($productId)
	{
		$data3=new Products($productId);
		$newdata4=$data3->addProduct($productId);
		$this->product[]=$newdata4;
		json_encode($this->product[0]);
	}
	public function get_products()
	{
		return $this->product;
	}
	public function get_sort()
	{
		return $this->sort;
	}
	public function set_sort($collumn_name,$type)
	{		
		$data=new Sort($collumn_name,$type);
		$data1 = $data->addSort($collumn_name,$type);
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

class Products
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

 class UserId
 {
 public $UserID="";
 public $weight="";
 public function __construct($UserID,$weight)
 {
 	$this->UserID=$UserID;
 	$this->weight=$weight;
 	
 	return $this;
 	
 }

 public function addUserId($UserID,$weight)
 {
 	$this->UserID=$UserID;
 	$this->weight=$weight;
 
 	return $this;	
 }
 }
 
 class Sort
 {
 	public $collumn_name = "";
 	public $type = "";
 	
 	public function __construct($collumn_name,$type)
{
	$this->collumn_name=$collumn_name;
	$this->type=$type;
	return $this;
	
}
 	
 	public function addSort($collumn_name,$type)
 	{
 		$this->collumn_name=$collumn_name;
 		$this->type=$type;
 		
 		return $this;
 		
 	}
 
 }
 class FilterList
 {
 	public $type_value = "";
 	public $collumn_name = "";
 	public $value = "";
 	function __construct(){
 		return $this;
 	}
 	public function addFilterList($type_value,$collumn_name,$value)
 	{
 		$this->type_value=$type_value;
 		$this->collumn_name=$collumn_name;
 		$this->value=$value;
 		//echo json_encode($this);
 		return $this;
 		
 	}
 	
 	
 }
 class FilterArray
 {
 	public $Filter=[];
 	public $category="";
 	public function __construct($category)
 	{
 		$this->category = $category;
 		$this->Filter=[];
 		return $this;
 	}
 	
 	
 	public function addFilterArray($type_value, $collumn_name, $value) {
 
 		$childFilter=new FilterList();
 		$data = $childFilter->addFilterList($type_value, $collumn_name, $value);
 		$this->Filter[] = $data;
 		return $this;
 		
 	}
 	/**
 	 * @param attributeName name of product attribute for filtering
 	 * @param value value field should match
 	 * */
 	public function addFilterColumnEquals($attributeName,  $value){
 		$this->addFilterArray("EQUALS",$attributeName,$value);
 	}
 	/**
 	 * @param attributeName name of product attribute for filtering
 	 * @param value value attribute should be less than
 	 * */
 	public function addFilterCollumnLessThan($attributeName,$value){
 		$this->addFilterArray("LESS_THAN",$attributeName,$value);
 	}
 	/**
 	 * @param attributeName name of product attribute for filtering
 	 * @param value value attribute should be greater than
 	 * */
 	public function addFilterCollumnGreaterThan($attributeName, $value){
 		$this->addFilterArray("GREATER_THAN",$attributeName,$value);
 	}
 	/**
 	 * @param attributeName name of product attribute for filtering
 	 * @param value value attribute should be less than
 	 * */
 	public function addFilterCollumnLessThanEquals( $attributeName, $value){
 		$this->addFilterArray("LESS_THAN_EQUALS",$attributeName,$value);
 	}
 	/**
 	 * @param attributeName name of product attribute for filtering
 	 * @param value value attribute should be greater than
 	 * */
 	public function addFilterCollumnGreaterThanEquals($attributeName, $value){
 		$this->addFilterArray("GREATER_THAN_EQUALS",$attributeName,$value);
 	}
 
 }
 

 
 
 
     

 
 //echo json_encode($filter->jsonSerialize());

?>
