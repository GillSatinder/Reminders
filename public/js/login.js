    /**
     * Created by satindergill on 15/2/17.
     */
    var app = angular.module('myapp',[]);


    app.controller('myctrl',function ($scope,$http)
    {
        $scope.loginname = "";
        $scope.password = "";


        $scope.myfunc = function ()
        {
            $lname = $scope.loginname;
            $lpassword = $scope.lpassword;
            $email = $scope.lemail;


            var data = $.param(
                {

                    name: $lname,
                    password: $lpassword,
                    email : $email
                });

            var config =
                {
                    headers:
                    {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                    }
                };


            $http.post('api/login', data, config).success(function (status)
                {

                    $scope.st = status;

                });
        };



        $http.get('api/login').success(function (data)
        {
            $scope.alldata  = data;

        });


    });





