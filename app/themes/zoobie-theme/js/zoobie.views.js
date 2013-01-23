
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

        events: {
            'click .toggle':  'toggleCompleted'
        },


        initialize: function() {

            this.model.on( 'change', this.render, this );
            this.model.on( 'destroy', this.remove, this );
        },

        render: function() {

            this.$el.html( this.template( this.model.toJSON() ) );
            return this;
        },

        toggleCompleted: function() {

            this.model.toggle();
        }

    });


    // TodoItems View
    // --------------

    // Our overall **TodoItems** is the top-level piece of UI.
    Zoobie.Views.TodoItems = Backbone.View.extend({

        el: '#todoapp',
        statsTemplate: _.template( $('#stats-template').html() ),


        events: {

            'keypress #new-todo': 'createOnEnter',
            'click #clear-completed': 'clearCompleted',
            'click #toggle-all': 'toggleAllComplete'
        },


        initialize: function() {

            this.input = this.$( '#new-todo' );
            this.allCheckbox = this.$( '#toggle-all' )[0];
            this.$main = this.$( '#main' );
            this.$footer = this.$( '#footer' );

            this.collection.on( 'add', this.addOne, this );
            this.collection.on( 'reset', this.addAll, this );
            this.collection.on( 'all', this.render, this );

            this.collection.on( 'all', this.render, this );
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

            this.allCheckbox.checked = !remaining;

            return this;
        },


        addOne: function( todoItem ) {

            var view = new Zoobie.Views.TodoItem({ model: todoItem });
            $( '#todo-list' ).append( view.render().el );
        },


        addAll: function() {

            this.$('#todo-list').html('');
            this.collection.each(this.addOne, this);
        },


        createOnEnter: function( e ) {

            var ENTER_KEY = 13;
            var todoTitle = this.input.val().trim();

            if ( e.which !== ENTER_KEY || !todoTitle ) {

                return;
            }

            this.input.val( '' );
            this.collection.create( {
                title: todoTitle,
                completed: false
            });
        },


        clearCompleted: function() {

            _.each( this.collection.completed(), function( todo ) {

                todo.destroy();
            });

            console.log(this.collection);

            return false;
        },


        toggleAllComplete: function() {

            var completed = this.allCheckbox.checked;

            this.collection.each(function( todo ) {

                todo.set( 'completed', completed );
            });
        }

    });

});
