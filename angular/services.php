 <!DOCTYPE html>
<html>
<head>
 <title>AngularJS Service Factory and Providers</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</head>
<body>
 <div class="container" style="padding-top:20px;">
 <div ng-app="myApp" ng-controller="myController">
 <p>From Service: {{serviceName}}</p>
 <p>From Factory: {{factoryName}}</p>
 <p>From Provider: {{providerName}}</p>
 </div>
 </div>
 
 <script>

 //defining module
 var app = angular.module('myApp',[]);
//defining service
 app.service('myService',function(){
	 this.name = '';
	 this.setName= function(newName){
		this.name = newName;
		return this.name;
		 };
	 });

//defining factory
 app.factory('myFactory',function(){
	var serviceObj = {};
	serviceObj.name='';
	serviceObj.setName = function(newName){
		serviceObj.name = newName;
		};
	return serviceObj;
	 });

//defining provider
app.provider('configurable',function(){
	var privateName = '';
	this.setName = function(newName){
		privateName = newName;
	};

	this.$get = function(){
		return {name:privateName};
		};

	
});
 
//configuring provider
app.config(function(configurableProvider){
	configurableProvider.setName('My Provider');
});
 
 app.controller('myController',function($scope,myService,myFactory,configurable){
	 $scope.serviceName = myService.setName('My service');
	 myFactory.setName('My Factory');
	 $scope.factoryName = myFactory.name;
	 $scope.providerName = configurable.name;
	 });
 
 </script>
</body>
</html>