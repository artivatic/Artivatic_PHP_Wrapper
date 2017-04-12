<?php 

 class ApiCallingData {
 	public $headers=array();
 	public $BASE_URL="";
 	public $api_key="";
 	
 
 	public function addApiKey($BASE_URL,$apikey)
 	{
 		
 		$this->BASE_URL=$BASE_URL;
 		$this->api_key=$apikey;

 	}
 	public function apiCalling($method,$postData,$addurl)
 	{
 		
 		$url=$this->BASE_URL.$addurl;
 
 		$ch = curl_init();
 		curl_setopt($ch, CURLOPT_URL, $url);
 		
 		if($method == 0)
 		
 		{
 			
 		 curl_setopt_array($ch, array(
 		    CURLOPT_POST => TRUE,
 		    CURLOPT_RETURNTRANSFER => TRUE,
 		    CURLOPT_HTTPHEADER => array(
 		    		'apikey: '.$this->api_key,
 				        'Content-Type: application/json'
 				    ),
 		    CURLOPT_POSTFIELDS => json_encode($postData)
 				));
 		}
 		
 		else if($method==1) {
 			
 			curl_setopt_array($ch, array(
 					
 					CURLOPT_HTTPHEADER => array(
 							'apikey: '.$this->api_key,
 							'Content-Type: application/json'
 					),
 					
 			));
 			
 		}
 		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; CrawlBot/1.0.0)');
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 		
 		curl_setopt($ch, CURLOPT_HEADER, false);
 		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 5);
 		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
 		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 		
 		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
 		# required for https urls
 		curl_setopt($ch, CURLOPT_MAXREDIRS, 15);
 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 		
 		$response=curl_exec($ch);
 		//  			 $response=curl_exec($ch);
 		$header= curl_getinfo($ch, CURLINFO_HTTP_CODE);
 		$data=array("status"=>$header,"body"=>$response);
 		//
 		return json_encode($data);
 		
 		
 		
 		if($response===FALSE)
 		{
 			echo "curl_error".curl_error($ch);
 		}
 		
 		
 	
 
 	}

 }




 
 
 
 
 
 

?>