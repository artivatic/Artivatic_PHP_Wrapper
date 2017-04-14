<?php 
include 'AddProductApi.php';
include 'AddUserApi.php';
include 'FilterApi.php';
include 'getMetaApi.php';
include 'GroupFilterApi.php';
include 'GroupMemberApi.php';
include 'InteractApi.php';
include 'SuggestProductApi.php';
include 'SuggestUserApi.php';
include 'UserGroupApi.php';
include 'SaveGroupApi.php';
//include_once 'GroupFilterData.php';

/*
 * AddProductData using AddProductApi.php
 */
$BaseUrl='https://demoapi.artivatic.com/';
$ApiKey='o/bsjA45eCg68wzM0WUvCg==';

//  $addProdcutObj=new AddProductDetail(); //Initiallise the class
// // add the attribute of product in arraylist send as a body.
// $body=array("category"=>"product","id"=>"f823","price"=>"3","name"=>"Cosmos Baby World Tricycle - Red and Yellow","gender"=>array("M","F"),"year"=>"3");
// // json_encode($body);
// echo $addProdcutObj->addProductData($BaseUrl,$ApiKey,"{ProductId}",$body);
 

/*
 * Add UserData using AddUserApi.php
 * 
 */

// $addUser=new AddUserData(); // intiallise the AddUserApi.class
// $userData=array("name"=>"shikha","id"=>"2","degreee"=>"btech");// Add the user attribute in array list
// echo $addUser->addUser($BaseUrl,$ApiKey,"1",$userData);

 /*
  * 
  *  Save the group Data
  */

// $saveData=new SaveGroup();  // Intiallise the SaveGroup class
// $saveData->setClientMemeberId(array("500","144")); //Add the  client_member_id
// //echo json_encode($saveData);
// $saveDetail=new SaveGroupApi(); // Intiallise the SaveGroupApi 
// echo $saveDetail->SaveGroup($BaseUrl,$ApiKey,$saveData);



/*
 * PredictFilterApi Calling FilterApi.php
 * 
 */

// $filter=new FilterData();//Initiallise the class inside FilterApi.php
// $user=new UserId("1","0.6"); //Initiallise the userId class
// //add the userId and weight (Suggested weights are 0.6 for current user and 0.4/n for n other friends for a group)
// $userid[]=$user;  //assign to arraylist
// $sort=new Sort("{$collumn_name}","{$type}"); //Adding the collumn_name and type in sort data 
// $sortdata[]=$sort; //Assign the object of sort class to arraylist
// $product=new Products("{$client_product_id}");// Add the client id in product data
// $productData[]=$product;

// $filterArray = new FilterArray("baby-gear");//adding the category of filter detail
// $filterArray->addFilterArray("type_value", "collumn_value", "valuee");  //Adding the value inside filter array list.

// $filterArray->addFilterColumnEquals("{$attributeName}","{$value}"); //Add the attributeName and value
// $filterArray->addFilterCollumnLessThan("{$attributeName}","{$value}"); //Whose column_name is Less Than
// $filterArray->addFilterCollumnGreaterThan("{$attributeName}","{$value}"); //Whose column_name is Greater Than
// $filterArray->addFilterCollumnLessThanEquals("{$attributeName}","{$value}");//Whose column_name is LessThanEquals
// $filterArray->addFilterCollumnGreaterThanEquals("{$attributeName}","{$value}");//Whose column_name is GreaterThanEquals
// $filterData[]=$filterArray;
// $filterdata=new FilterApiCalling(); //Calling the Api class
// echo $filterdata->predictFilter($filterData,$userid,[],[],$BaseUrl,$ApiKey);




/*
 * 
 * getMetaData calling getMetaApi.php
 * 
 * 
 */

// $getMeta=new GetMetaApi(); //Initiallise the getMetaData using GetMetaApi.php class
// $responsedata= $getMeta->getMetaData($BaseUrl,$ApiKey);
// echo $responsedata;

/*
 * GroupFilterData   GroupFilterApi.php
 * 
 */
// $filter=new GroupFilterData(); //Intiallise the GroupFilter class in GroupFilterData.php
// $user=new UserData("1","0.6"); //Intiallise  the usedata  //add the userId and weight
// $userdata[]=$user;
// $sort=new SortData("{$collumn_name}","{$type}");
// $sortdata[]=$sort; //asign the object of class sort to sortdata
// $product[]=new ProductId("{$client_product_id}");
// $groupFilterArray = new GroupFilterArray("food");
// $groupFilterArray->addFilter("type_value", "collumn_value", "valuee");  //Adding the value inside filter array list.
// $groupFilterArray->addFilterColumnEquals("{$attributeName}","{$value}"); //Add the attributeName and value
// $groupFilterArray->addFilterCollumnLessThan("{$attributeName}","{$value}"); //Whose column_name is Less Than
// $groupFilterArray->addFilterCollumnGreaterThan("{$attributeName}","{$value}"); //Whose column_name is Greater Than
// $groupFilterArray->addFilterCollumnLessThanEquals("{$attributeName}","{$value}");//Whose column_name is LessThanEquals
// $groupFilterArray->addFilterCollumnGreaterThanEquals("{$attributeName}","{$value}");//Whose column_name is GreaterThanEquals
// $filterData[]=$groupFilterArray;
// $groupId="";

// $datavalue=new GroupFilterApi();
//echo $datavalue->predictFilterData($BaseUrl,$ApiKey,$filterData,$userdata,$sortdata,[],$groupId);

/*
 * 
 * GroupMemeber Detail in GroupmemberApi.php
 */

// $group=new GroupMember(); //Intiallise the class of Api calling.
// //add the client_groupid
// echo $group->getGroupMember($BaseUrl,$ApiKey,"1");
/*
 * SaveGroupDetail
 */




// /*
//  * 
//  * Interect Api   
// {
// 	"level":9,
// 	"predictId":"1_oida"
			
// }
//  */

// $interct=new InterectAPiCalling();
// $userId="1";  //Add the value of userid
// $productId="f823"; // Add the value of productId}
// $interactLevel=9; //Add the value of interect level;
// //echo $interct->interectAPi($BaseUrl,$ApiKey,"{$userId}","{$productId}",$interactLevel);
// //OR
// echo $interct->interectPredictionAPi($BaseUrl,$ApiKey,"{$userId}","{$productId}",$interactLevel,"{$predictId}");



/*
 * 
 * User to product using SuggestProductAPi.php
 */

// $suggestBody=new SuggestionData(); // Initiallise the class
// $suggestBody->set_userIds(array("1","2")); //Add the arraylist of userid.
// $filterData= new TypeValue(); ////TypeValue class is the Filter class inside the SuggestionaData class
// $filterData->filterDataList("{collumn_name}","{type_value}","{value}");// AddData in filter collumn_name,type_value,value;
// // $filterData->addFilterColumnEquals($attributeName,  $value); //Add the attributeName and value
// // $filterData->addFilterCollumnLessThan($attributeName,  $value); //Whose column_name is Less Than
// // $filterData->addFilterCollumnGreaterThan($attributeName,  $value); //Whose column_name is Greater Than
// // $filterData->addFilterCollumnLessThanEquals($attributeName,  $value);//Whose column_name is LessThanEquals
// // $filterData->addFilterCollumnGreaterThanEquals($attributeName,  $value);//Whose column_name is GreaterThanEquals
// $filterDataArray[]=$filterData; //Reassign the value to arrayList.
// $suggestBody->addSuggestion($filterDataArray);//Add the value of filter to main class
// $suggestData=new SuggestProduct();// Call the class of APi response.
// //echo json_encode($suggestBody); // Print the request body of api calling
// echo $suggestion=$suggestData->suggestUsersToProduct($BaseUrl,$ApiKey,$suggestBody,"{ProductId}");


/*
 * suggest User to user in SuggestUserAPi.php
 * 
 */

// $suggestBody=new SuggestionData(); //Intiallise the class
// $suggestBody->set_userIds(array("1","2"));// Add arrayList of userid
// $filterValue=new TypeValue(); //TypeValue class is the Filter class inside the SuggestionaData class
// $filterValue->filterDataList("{collumn_name}","{type_value}","{value}");// AddData in filter collumn_name,type_value,value;
// // $filterValue->addFilterColumnEquals($attributeName,  $value); //Add the attributeName and value
// // $filterData->addFilterCollumnLessThan($attributeName,  $value); //Whose column_name is Less Than
// // $filterData->addFilterCollumnGreaterThan($attributeName,  $value); //Whose column_name is Greater Than
// // $filterData->addFilterCollumnLessThanEquals($attributeName,  $value);//Whose column_name is LessThanEquals
// // $filterData->addFilterCollumnGreaterThanEquals($attributeName,  $value);//Whose column_name is GreaterThanEquals
// $filterDataArray[]=$filterValue; // Assign the value to arrylist
// $suggestBody->addSuggestion($filterDataArray); //Add the value of filter to main class
// //echo json_encode($suggestBody); // Print the request body
// $suggestData=new SuggestUser(); //Call the class of api response.
// echo $suggestion=$suggestData->suggestUsersToUsers($BaseUrl,$ApiKey,$suggestBody,"{userId}");

/*
 * 
 */

// $user=new UserGroup();// Initiallise the class
//  // Add the data in body in form of arrayList using client_user_id
// echo $user->getUserGroup($BaseUrl,$ApiKey,"133");


?>

