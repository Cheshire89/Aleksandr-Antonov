'use strict';
angular.module('todoListApp')
.controller('mainCtrl', function($scope, dataService){
	dataService.getTodos(function(response){
		console.log(response.data);
		$scope.todos = response.data;
	});

	$scope.deleteTodo = function(todo, index){
		dataService.deleteTodo(todo);
		$scope.todos.splice(index, 1);
	}
	$scope.deleteAllTodos = function(){
		$scope.todos.length = 0;
	}
	$scope.deleteCompleted = function(){
	

		for(var i=$scope.todos.length; i--;){
		   if($scope.todos[i].completed === true){
		       $scope.todos.splice($scope.todos[i],1);
		   } 
		}

	
	}

	$scope.saveTodo = function(){
		var filteredTodos = $scope.todos.filter(function(todo){
			if(todo.edited){
				return todo;
			};
		});
		dataService.saveTodos(filteredTodos);
	}

	$scope.addTodo = function(){
		var todo = {name: "New Todo !"};
		$scope.todos.unshift(todo);
	}
});