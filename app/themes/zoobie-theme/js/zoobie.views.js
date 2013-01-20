
//     zoobie.models.js

jQuery(function($) {


    // Initial Setup
    // -------------

    window.Zoobie = window.Zoobie || {
        Models: {},
        Collections: {},
        Views: {}
    };


    // TodoItem View
    // -------------

    // The DOM element for a TodoItem...
    Zoobie.Views.TodoItem = Backbone.View.extend({

        tagName: 'li',
        template: _.template(jQuery('#item-template').html()),

        render: function() {

            this.$el.html( this.template( this.model.toJSON() ) );
            return this;
        }

    });


    // TodoItems View
    // --------------

    // Our overall **TodoItems** is the top-level piece of UI.
    Zoobie.Views.TodoItems = Backbone.View.extend({

        el: '#todoapp',


        addOne: function( todoItem ) {

            var view = new Zoobie.Views.TodoItem({ model: todoItem });
            $( '#todo-list').append( view.render().el );
        }

    });

});
