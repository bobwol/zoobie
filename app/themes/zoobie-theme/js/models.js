
/* ---------------------------------------------------------------------------------
 * -- App Namespace Support
 * ---------------------------------------------------------------------------------
 *
 */
var zoobieApp = zoobieApp || {};


/* ---------------------------------------------------------------------------------
 * -- TodoItem Model
 * ---------------------------------------------------------------------------------
 *
 * Our basic **TodoItem** model has `title` and `completed` attributes.
 *
 */
zoobieApp.TodoItem = Backbone.Model.extend({

    // Default attributes
    defaults: {

        title: '',
        completed: false
    },

    // Toggle the `completed` state of this _todo item
    toogle: function() {

        this.set('completed', !this.get('completed'));

//        this.save({
//
//            completed: !this.get('completed')
//        });
    }
});
