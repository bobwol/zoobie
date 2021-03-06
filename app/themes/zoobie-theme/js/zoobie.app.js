
//  zoobie.app.js


// The Application
// ---------------

jQuery(function($) {


    var todoItems = new Zoobie.Collections.TodoItems([
        {
            title: 'Go to the store',
            completed: true
        },
        {
            title: 'Buy the milk',
            completed: false
        },
        {
            title: 'Call Fabiana',
            completed: false
        },
        {
            title: 'Finish a WordPress Theme',
            completed: false
        }
    ]);


    var todoItemsView = new Zoobie.Views.TodoItems({
        collection: todoItems
    });

    todoItemsView.render();
    todoItemsView.addAll();

});
