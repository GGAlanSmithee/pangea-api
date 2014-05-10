define( function(require) {

  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');


  return Backbone.Model.extend({

    initialize : function() {
      this.on('fetched', function() {
        this.set('isFetched', true);
      });
    },

    fetchModel : function() {
        var self = this;
        this.fetch({ success : function() {
                self.trigger('fetched');
            }
        });
    },

    isFetched : function() {
      return this.get('isFetched');
    }
  });
});
