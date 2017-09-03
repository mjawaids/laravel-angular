angular.module('laravelAngular', []).controller('TodosController', function($scope, $http) {

    $http.get('/todos').then(
        function(todos) {
            $scope.todos = todos.data;
        }
    );

    $scope.remaining = function() {
        var count = 0;

        angular.forEach($scope.todos, function(todo) {
            count += todo.completed? 0 : 1;
        });

        return count;
    }

    $scope.addTodo = function() {
        var todo = { body: $scope.newTodo, completed: false };
        $scope.todos.push(todo);
        $http.post('/todos', todo);
        $scope.newTodo = "";        
    }

    $scope.updateTodo = function(todo) {
        $http.post('/todos', todo);
    }
});