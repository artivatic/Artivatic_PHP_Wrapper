<?php 
class TypeValue
{
public $type_value = "";
public $collumn_name = "";
public $value = "";
public function filterDataList($type_value,$collumn_name,$value)
{
	$this->type_value=$type_value;
	$this->collumn_name=$collumn_name;
	$this->value=$value;
	return $this;	
	
}
/**
 * @param attributeName name of product attribute for filtering
 * @param value value field should match
 * */
public function addFilterColumnEquals($attributeName,  $value){
	$this->filterDataList("EQUALS",$attributeName,$value);
}
/**
 * @param attributeName name of product attribute for filtering
 * @param value value attribute should be less than
 * */
public function addFilterCollumnLessThan($attributeName,$value){
	$this->filterDataList("LESS_THAN",$attributeName,$value);
}
/**
 * @param attributeName name of product attribute for filtering
 * @param value value attribute should be greater than
 * */
public function addFilterCollumnGreaterThan($attributeName, $value){
	$this->filterDataList("GREATER_THAN",$attributeName,$value);
}
/**
 * @param attributeName name of product attribute for filtering
 * @param value value attribute should be less than
 * */
public function addFilterCollumnLessThanEquals( $attributeName, $value){
	$this->filterDataList("LESS_THAN_EQUALS",$attributeName,$value);
}
/**
 * @param attributeName name of product attribute for filtering
 * @param value value attribute should be greater than
 * */
public function addFilterCollumnGreaterThanEquals($attributeName, $value){
	$this->filterDataList("GREATER_THAN_EQUALS",$attributeName,$value);
}
}


?>