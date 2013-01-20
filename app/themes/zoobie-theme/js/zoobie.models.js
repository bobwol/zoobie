
//     zoobie.models.js

jQuery(function($) {


    // Initial Setup
    // -------------

    window.Zoobie = window.Zoobie || {
        Models: {},
        Collections: {},
        Views: {}
    };


    // TodoItem
    // --------

    // Our basic **TodoItem** model has `title` and `completed` attributes.
    Zoobie.Models.TodoItem = Backbone.Model.extend({

        // Default attributes
        defaults: {

            title: '',
            completed: false
        },

        // Toggle the `completed` state of this _todo item
        toogle: function() {

            this.set( 'completed', !this.get('completed' ));
        }
    });

});
