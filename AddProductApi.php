<?php
include_once 'ApiCalling.php';
class AddProductDetail
{
	/*
	 * Call Product Register API
	 */
	public function addProductData($BASE_URL,$apikey,$productId,$body)
	{
		$calling=new ApiCallingData();
		$calling->addApiKey($BASE_URL,$apikey);
		
		$response=$calling->apiCalling(0,$body,"product".'/'.$productId);
	    return $response;
		
	}
	
}


?>