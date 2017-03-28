/**
 * Created by satindergill on 8/2/17.
 */
var app = angular.module('myApp',['ngRoute','ngResource']);

app.controller('mainCtrl',function ($scope,cityService)
{
    $scope.city = cityService.city;
   $scope.$watch('city',function ()
   {
       cityService.city = $scope.city;

   })

});

app.controller('secondCtrl',function ($scope,cityService,$resource)
{
     $scope.city = cityService.city  ;
     $scope.weatherAPI = $resource("http://api.openweathermap.org/data/2.5/forecast",
         {callback: "JSON_CALLBACK"},{get : {method : "JSONP"}});

     $scope.weatherResult = $scope.weatherAPI.get({ q : $scope.city ,cnt :5,  appid : "40660b7e0c16582f7908f3dad629b17b" });

     $scope.conver = function (degK)
     {

       var  x =  Math.round((1.8 * (degK - 273)) + 32) ;
         var y = Math.round((x - 32) * 5/6);
         return y;

     }

     $scope.converDate = function (dt)
     {
         return new Date(dt * 1000);


     }


});


app.config(function ($routeProvider)
{
    $routeProvider
        .when('/',{
            templateUrl : 'main.php',
            controller : 'mainCtrl'
          })
    .when('/second',{
        templateUrl : 'second.php',
        controller : 'secondCtrl'
    })

});


app.service('cityService',function ()
{
    this.city  = "Melbourne , AUS";



});