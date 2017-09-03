<!DOCTYPE html>
<html lang="en" ng-app="laravelAngular">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Todos</title>
    <style>
        small {
            font-size = .8em;
            color: grey;
        }
    </style>
</head>
<body ng-controller="TodosController">

    <h1>
        My Todos
        <small ng-if="remaining()">({{ remaining() }} remaining)</small>
    </h1>

    <input type="text" placeholder="Filter todos" ng-model="search">

    <ul>
        <li ng-repeat="todo in todos | filter:search">
            <input type="checkbox" ng-model="todo.completed" ng-click="updateTodo(this.todo)">
            {{ todo.body }}
        </li>
    </ul>

    <form ng-submit="addTodo()">
        <input type="text" placeholder="Add a new todo" ng-model="newTodo">
        <button type=submit>Add</button>
    </form>
    
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>