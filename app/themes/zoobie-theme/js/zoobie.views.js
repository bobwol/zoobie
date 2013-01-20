
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
        template: _.template(jQuery( '#item-template' ).html()),

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
        statsTemplate: _.template( $('#stats-template').html() ),


        initialize: function() {

            this.$main = $( '#main' );
            this.$footer = $( '#footer' );
        },


        render: function() {

            var completed = this.collection.completed().length;
            var remaining = this.collection.remaining().length;

            if ( this.collection.length ) {

                this.$main.show();
                this.$footer.show();

                this.$footer.html( this.statsTemplate( {
                    completed: completed,
                    remaining: remaining
                }) );

            } else {

                this.$main.hide();
                this.$footer.hide();
            }

            return this;
        },


        addOne: function( todoItem ) {

            var view = new Zoobie.Views.TodoItem({ model: todoItem });
            $( '#todo-list' ).append( view.render().el );
        },


        addAll: function() {

            this.$('#todo-list').html('');
            this.collection.each(this.addOne, this);
        }

    });

});
