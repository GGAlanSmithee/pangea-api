define( function(require) {
    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    return Backbone.View.extend({
        fetchModel : function() {
            var self = this;
            if (this.model.isFetched()) {
                this.trigger('ready');
            } else {
                this.model.fetch({
                    success : function( ) {
                        self.trigger('ready');
                    },
                    error : function( ) {
                        self.trigger('ready');
                    }
                });
            }
        },

        render : function() {
            this.delegateEvents();
            this.$el.html(_.template(this.template, { model : this.model }));
            return this.el;
        },

        cleanUp : function() {
            this.undelegateEvents();
            this.$el.removeData().unbind();
            this.$el.empty();
        },
    });
});
