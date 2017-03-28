



    var app =   angular.module('myApp',[],function ($interpolateProvider)
    {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');

    });
    app.controller('myCtrl',function ($scope,$http,$window,$location)
    {
        $scope.comments =  '';



        //GET ALL REMINDERS





            $http.get('getComments').success(function (data) {
                $scope.comments = data;

            });


        // POST COMMENT
        $scope.postComment = function ()
        {


            $window.location.reload(true);
            var data = $.param({

               body : $scope.body


            });
            window.location.reload(true);


            var config = {
                headers : {

                    'Content-Type' : 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };
            $http.post('api/cApp',data,config).success(function (data)
            {
                $scope.name  = data;

                $window.location.reload(true);


            });


            $window.location.reload(true);

        };

        // DELETE REMINDER

        $scope.deleteComment = function (id)
        {


            $http.delete('api/cApp/' + id).success(function ()
            {
                $window.location.reload(true);

            });



        };

        // DATE

        var y = new Date().toDateString();

        $scope.today = y;

        //LOGOUT USER
        $scope.logoutUser = function ()
        {
            alert('log out user');

        }
    });