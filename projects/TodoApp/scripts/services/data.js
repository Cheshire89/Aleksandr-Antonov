'use strict';

angular.module('todoListApp').service('dataService',function($http){
	this.getTodos = function(callback){
		$http.get('mock/todos.json')
	.then(callback)
	};

	this.deleteTodo = function(todo){
		console.log("The " + todo.name + " has been deleted!");
		//other logic
	};

	this.saveTodos = function(todo){
		console.log("The "+ todo.name + " was saved!");
		//other logic
	};
	
});