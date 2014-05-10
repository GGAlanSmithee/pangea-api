define( function(require) {

    // Required modules
    var Backbone = require('Backbone');

    return Backbone.View.extend({
        clear : function() {
            this.undelegateEvents();
            this.$el.removeData().unbind();
            this.$el.empty();
        },

        render : function() {
            this.delegateEvents();
        }
    });
});
