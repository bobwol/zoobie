
/* ---------------------------------------------------------------------------------
 * -- App Namespace Support
 * ---------------------------------------------------------------------------------
 *
 */
var zoobieApp = zoobieApp || {};


/* ---------------------------------------------------------------------------------
 * -- TodoItem Collection
 * ---------------------------------------------------------------------------------
 *
 * Our basic **TodoItemList** Collection.
 *
 */
zoobieApp.TodoItemList = Backbone.Collection.extend({

    // Reference to this collection's model.
    model: zoobieApp.TodoItem,


    // Filter down the list of all todoItems that are finished.
    completed: function() {

        return this.filter(function( todo ) {

            return todo.get('completed');
        });
    },


    // Filter down the list to only todoItems that are still not finished.
    remaining: function() {

        return this.without.apply(this, this.completed());
    }

});

