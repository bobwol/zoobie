
//     zoobie.models.js


// Initial Setup
// -------------

var zoobieApp = zoobieApp || {};


// TodoItem
// --------

// Our basic **TodoItem** model has `title` and `completed` attributes.
zoobieApp.TodoItem = Backbone.Model.extend({

    // Default attributes
    defaults: {

        title: '',
        completed: false
    },

    // Toggle the `completed` state of this _todo item
    toogle: function() {

        this.set('completed', !this.get('completed'));
    }
});
