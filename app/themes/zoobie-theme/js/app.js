

var todo1 = new zoobieApp.TodoItem({ title: 'Todo Item A', completed: true });
var todo2 = new zoobieApp.TodoItem({ title: 'Todo Item B' });
var todo3 = new zoobieApp.TodoItem({ title: 'Todo Item C' });
var todo4 = new zoobieApp.TodoItem({ title: 'Todo Item D' });

var todoItemList = new zoobieApp.TodoItemList([
    todo1,
    todo2,
    todo3,
    todo4
]);

console.log('completed' + todoItemList.completed());
console.log('remaining' + todoItemList.remaining());