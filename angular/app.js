
var app	= angular.module('stores',[]);
	app.controller('StoreController',function(){
		this.products =gems;
	});
	app.controller('StoreController1',function(){
		this.products =gems;
	});
	app.controller('PanelController',function(){
		this.tab =1;
		this.selectTab =function(setTab){
			this.tab =setTab;
		};
		this.isSelected =function(checkTab){
			return this.tab === checkTab;
		};
	});
	
	app.controller('ReviewController',function(){
		this.product ={name:"food",price:'50.40',description:'dfdsfdsfds',canPurchase:true,outOfStock:true,reviews:[{stars:4,body:'bodytext',author:'senthilnadhanr@gmail.com'}]};
		this.addReview=function(product){alert('fdsfds');};
	});
	var gems = [
	            {name:"food",price:'50.40',description:'dfdsfdsfds',canPurchase:true,outOfStock:true,reviews:[{stars:4,body:'bodytext',author:'senthilnadhanr@gmail.com'}]},
	            {name:"food1",price:'55.40',description:'aaaaaaaaa',canPurchase:false,outOfStock:false,reviews:[{stars:3,body:'bodytext',author:'senthilnadhanr@gmail.com'}]},
	            {name:"food2",price:'59.40',description:'bbbbbbbbb',canPurchase:true,outOfStock:false,reviews:[{stars:1,body:'bodytext',author:'senthilnadhanr@gmail.com'}]},
			   ];