
//     zoobie.collections.js

jQuery(function($) {


    // Initial Setup
    // -------------

    window.Zoobie = window.Zoobie || {
        Models: {},
        Collections: {},
        Views: {}
    };


    // TodoItems
    // ------------

    // Our basic **TodoItems** Collection.
    Zoobie.Collections.TodoItems = Backbone.Collection.extend({

        model: Zoobie.Models.TodoItem,


        // Filter down the list of all todoItems that are finished.
        completed: function() {

            return this.filter( function( todo ) {

                return todo.get( 'completed' );
            });
        },


        // Filter down the list to only todoItems that are still not finished.
        remaining: function() {

            return this.without.apply( this, this.completed() );
        }

    });

});
