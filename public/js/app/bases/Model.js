define( function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    return Backbone.Model.extend({

       initialize : function() {
            this.on('fetched', function() {
                this.set('isFetched', true);
            });
        },

        // todo: change name to fetch
        fetchModel : function() {
            var self = this;
            this.fetch({
                success : function() {
                    self.trigger('fetched');
                }
            });
        },

        isFetched : function() {
            return this.get('isFetched');
        }
    });
});
