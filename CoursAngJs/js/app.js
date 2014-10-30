(function(){
	var app = angular.module('store', [ ]);

	app.controller('StoreController', function(){
		this.products = gems;
	});

	var gems = [
		{
			name: 'Dodecahedron',
			price: 2.95,
			description: 'Mot Mot Mot Virgule Mot Mot Mot Mot Point' ,
			canPurchase: true,
			soldOut: false,
		},
		{
			name: 'Pentagonal Gem',
			price: 5.95,
			description: 'Mot Mot Mot Virgule Mot Mot Mot Mot Point' ,
			canPurchase: false,
			soldOut: false,
		}
	]

})();