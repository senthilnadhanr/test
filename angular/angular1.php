<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<!-- <div ng-app="myApp" ng-controller="myCtrl">
  First Name:<input type="text" name="fname" ng-model="firstName">
  Last Name:<input type="text" name="lname" ng-model="lastName">
  Full Name : <p>{{fullName()}}</p>
</div>
<script src="myCtrl.js"></script> -->
<div ng-app="" ng-init="names=[{name:'senthil',country:'pakistan'},{name:'muruk',country:'india'},{name:'karthi',country:'america'},{name:'nandha',country:'japan'},{name:'saro',country:'africa'}];">
<input type="text" name="test" ng-model="test">
<ul>
<li ng-repeat="x in names | filter:test | orderBy:'country'">
{{x.name+','+x.country}}
</li>
</ul>
</div>
</body>
</html>