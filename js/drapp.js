var drApp = angular.module('drApp',['ngRoute']);

// drApp.config(function($routeProvider){
// 	$routeProvider
//         .when('/index', {
//             controller: 'mainCtrl',
//             template: 'this is mainCtrl'
//         })
//         .when('/events_fairs', {
//           redirectTo: '/login'
//         })
//         .otherwise({
//         	redirectTo: '/'
//         });
// });
  

drApp.controller('mainCtrl', ['$scope','$location', function($scope, $location) {
  alert(1);
	// 	$scope.content = '00000';
	// $scope.selectMe = function (event){
 //   		href = $(event.target).closest('a').attr('href');
   		// return  $location.path('/events_fairs');
	// }
}]);

drApp.controller('eventsCtrl', ['$scope','$location', function($scope,$location) {
  alert(2);
	//$scope.content = '11111111';
}]);
// dreamteam.controller('stageCtrl', ['$scope','$location', function($scope,$location) {
// 	$scope.content = '222222222';
// }]);
// dreamteam.controller('eventsCtrl', ['$scope','$location', function($scope,$location) {
// 	$scope.content = '3333333';
// }]);
// dreamteam.controller('contactCtrl', ['$scope','$location', function($scope,$location) {
// 	$scope.content = '5555555';
// }]);