<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<title>Insert title here</title>
</head>
<body>
<div ng-app="stores">
	<div ng-controller="StoreController as store">
		<div ng-repeat="product in store.products" ng-hide="product.outOfStock" >
		<h1>{{product.name}}</h1>
		<h1>{{product.price}}</h1>
		<p>{{product.description}}</p>
		<button ng-show="product.canPurchase">Add to Cart</button>
		
			<section class="tab" ng-controller="PanelController as panel">
        <ul class="nav nav-pills">
          <li ng-class="{active:panel.isSelected(1)}">
            <a href ng-click="panel.selectTab(1)" >Description</a></li>
          <li ng-class="{active:panel.isSelected(2)}">
            <a href ng-click="panel.selectTab(2)">Specs</a></li>
          <li ng-class="{active:panel.isSelected(3)}">
            <a href ng-click="panel.selectTab(3)">Reviews</a></li>
        </ul>
        <div class="panel" ng-show="panel.isSelected(1)">
        <h4>Description</h4>
        {{panel.tab}}
        </div>
         <div class="panel" ng-show="panel.isSelected(2)">
         <h4>Spec</h4>
        {{panel.tab}}
        </div>
         <div class="panel" ng-show="panel.isSelected(3)">
         <h4>Review</h4>
        {{panel.tab}}       
        <form name="reviewForm" ng-controller="ReviewController as reviewCtrl" ng-repeat="review in product.reviews" novalidate="novalidate" ng-submit="reviewForm.$valid && reviewCtrl.addReview(product)">
         <blockquote >
	       <b>Stars:{{reviewCtrl.review.stars}}</b>
	       {{reviewCtrl.review.body}}
	       <cite>by:{{reviewCtrl.review.author}}</cite>
	       </blockquote>
       		<select ng-model="reviewCtrl.review.stars" required>
       		<option value="1">1</option>
       		<option value="2">2</option>
       		<option value="3">3</option>
       		<option value="4">4</option>
       		<option value="5">5</option>
       		</select>
       		<textarea rows="" cols="" ng-model="reviewCtrl.review.body" required></textarea>
       		<input type="email" ng-model="reviewCtrl.review.author" required></input>
       		<input ng-model="reviewCtrl.review.terms" type="checkbox" required> I agree
       		What colour would you like
       		<input ng-model="reviewCtrl.review.color" type="radio" value="red">red
       		<input ng-model="reviewCtrl.review.color" type="radio" value="green">green
       		<input ng-model="reviewCtrl.review.color" type="radio" value="blue">blue
       		<input type="submit" value="Submit"/>
	       <div>this is form is {{reviewCtrl.reviewForm.$valid}}</div>
	       </form>
        </div>
        </section> 
		
	       
		</div>
		 
	</div>
       
</div>
<style>.active{display:none;}</style>

</body>
</html>