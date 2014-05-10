define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  
  return Backbone.View.extend({
    initialize : function() {
    },
    
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