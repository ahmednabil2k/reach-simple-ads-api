
## Brief Introduction

In this task, I followed the module based design that makes the structure of the code
and the architecture cleaner and scalable.
- [Check It out here](https://nwidart.com/laravel-modules/v6/introduction).

## Hints

- By following the module based system, Most of The code is inside on the Modules Directory
 at Ads Module.
  
- Api Url is prefixed with ```v1``` like ``` https://domain.com/api/v1/{uri}```  

- By following DRY principle, 
Created some helpful traits ```ApiResponder, ApiCrudResources``` to utilize
repeated work and used them inside the base controller that all other 
controllers inherit from ```Modules\Ads\Http\Controllers\Controller```.  

## Assumptions

- When creating a new Ads, Advertiser is not required by default because the advertiser will
be assigned on the ads later.
 
-  For tags, When creating a new Ads, I used a json column on ads table to save related tags.

- When filtering ads by tag or category , using category id in the url 
  as when it comes to a real use case the category will be selected from a dropdown.
  ex: ``` https://domain.com/api/v1/filter/ads?tag=tag-1&category=4``` 
  

