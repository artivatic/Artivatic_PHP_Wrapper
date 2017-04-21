#    Artivatic Data labs Pvt. Ltd.



#### Features In Artivatic PHP_Wrapper

- User Registration
- Product Adding
- Adding Interactions
- Product Predictions
   - Single User among all registered products(Including Filters)
    - For Single User among specified products
     - For Groups among all registered products(Including Filters)
      - For Groups among specified products

###  User Registartion
Intialise the Base_url and apikey before proceed to registering the user by calling the following function.



```sh
$addUser=new AddUserData();
echo $addUser->addUser($BaseUrl,$ApiKey,"{userId}",array("key"=>"value");

```
Keeping track that the keys of the Map of User data are in accordance of the user Meta data provided during Artivatic Sign Up.

### Product Registration
Intialise the Base_url and apikey before proceed to registering the user by calling the following function. 
```sh
 $addProdcutObj=new AddProductDetail();
echo $addProdcutObj->addProductData($BaseUrl,$ApiKey,"{ProductId}",$body);
```
Keeping track that the keys of the Map of Product data are in accordance of the Product Meta data provided during Artivatic Sign Up.
### Adding Interactions

Interactions can be added to Artivatic using different methods. The data required to add interact are userId, productId and the level of interaction.

The level of interaction is predefined in the SDK for ease of implementation but you may choose to use your own signed integer values to represent the different levels of interaction.
#### Predefined Interaction Levels are as follows :- 

```sh
 $DISLIKE = -6;
 $NOT_INTERESTED = -3;
 $QUICK_DETAILS = 1;
 $LONG_VIEW = 2;
 $INTERESTED = 3;
 $WISHLIST = 4;
 $BOUGHT = 5;
 $LIKED = 6;
```
```sh
$interct=new InterectAPiCalling();
echo $interct->interectAPi($BaseUrl,$ApiKey,"{$userId}","{$productId}",$interactLevel);OR
echo $interct->interectPredictionAPi($BaseUrl,$ApiKey,"{$userId}","{$productId}",$interactLevel,"{$predictId}");
```
### Predict Products

Initialise the class of UserId , ProductId, CategoryFilter, and Sorts and set the value using set method of each class.
 
```sh
$filter=new FilterData();//Initiallise the class inside FilterApi.php
$user=new UserId("{userId}","{weight}"); //Initiallise the userId class
//add the userId and weight (Suggested weights are 0.6 for current user   and 0.4/n for n other friends for a group)
$userid[]=$user;  //assign to arraylist
$sort=new Sort("{$collumn_name}","{$type}"); 
$sortdata[]=$sort; //Assign the object of sort class to arraylist
$product=new Products("{$client_product_id}");
$productData[]=$product;
$filterArray = new FilterArray("{category_name}");
$filterArray->addFilterArray("{$type_value}","{$collumn_value}","{$valuee}"); 
$filterArray->addFilterColumnEquals("{$attributeName}","{$value}");
$filterArray->addFilterCollumnLessThan("{$attributeName}","{$value}"); 
$filterArray->addFilterCollumnGreaterThan("{$attributeName}","{$value}");
$filterArray->addFilterCollumnLessThanEquals("{$attributeName}","{$value}");
$filterArray->addFilterCollumnGreaterThanEquals("{$attributeName}","{$value}");
$filterData[]=$filterArray;
$filterdata=new FilterApiCalling(); //Calling the Api class
echo $filterdata->predictFilter($filterData,$userid,[],[],$BaseUrl,$ApiKey);
```

#### Group Creation
Intialise the class of GroupData and add the client_user_id, ArrayList of client_member_id, add the client_group_id , group_name and artivatic_group_id. sending the apikey and baseurl and the groupData.

```sh
$saveData=new SaveGroup();  // Intiallise the SaveGroup class
$saveData->addSaveData("{$client_user_id}", array("{$client_member_id}"), "{$client_group_id}","{$group_name}","{$av_group_id}");
$saveDetail=new SaveGroupApi(); // Intiallise the SaveGroupApi 
echo $saveDetail->SaveGroup($BaseUrl,$ApiKey,$saveData);
```
- #### User Group :
```sh
$user=new UserGroup();
echo $user->getUserGroup($BaseUrl,$ApiKey,"{client_user_id}");
```
- #### Group Members :
```sh
$group=new GroupMember(); 
echo $group->getGroupMember($BaseUrl,$ApiKey,"{client_group_id}");
```
### suggest UsersToUser
Call the Api suggest user to user
```sh
$suggestBody=new SuggestionData(); //Intiallise the class
$suggestBody->set_userIds(array({userId}));
$filterValue=new TypeValue(); //TypeValue class is the Filter class inside the SuggestionaData class
$filterValue->filterDataList("{collumn_name}","{type_value}","{value}");
$filterValue->addFilterColumnEquals($attributeName,  $value); $filterData->addFilterCollumnLessThan($attributeName,  $value); 
$filterData->addFilterCollumnGreaterThan($attributeName,  $value);
$filterData->addFilterCollumnLessThanEquals($attributeName,  $value);
$filterData->addFilterCollumnGreaterThanEquals($attributeName,  $value);
$filterDataArray[]=$filterValue; 
$suggestBody->addSuggestion($filterDataArray); 
echo json_encode($suggestBody); // Print the request body
$suggestData=new SuggestUser(); //Call the class of api response.
echo $suggestion=$suggestData->suggestUsersToUsers($BaseUrl,$ApiKey,$suggestBody,"{userId}");
```
### suggest UsersToProduct

```sh

$suggestBody=new SuggestionData(); // Initiallise the class
$suggestBody->set_userIds(array("{userId}")); //Add the arraylist of userid.
$filterData= new TypeValue(); 
$filterData->filterDataList("{collumn_name}","{type_value}","{value}");
$filterData->addFilterColumnEquals($attributeName,  $value); 
$filterData->addFilterCollumnLessThan($attributeName,  $value); 
 $filterData->addFilterCollumnGreaterThan($attributeName,  $value);
$filterData->addFilterCollumnLessThanEquals($attributeName,  $value);
$filterData->addFilterCollumnGreaterThanEquals($attributeName,  $value);
$filterDataArray[]=$filterData; //Reassign the value to arrayList.
$suggestBody->addSuggestion($filterDataArray);
$suggestData=new SuggestProduct();// Call the class of APi response.
echo json_encode($suggestBody); // Print the request body of api calling
echo $suggestion=$suggestData->suggestUsersToProduct($BaseUrl,$ApiKey,$suggestBody,"{productId}");
```
