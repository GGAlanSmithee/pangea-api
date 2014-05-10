define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
                 
  var Race = Backbone.Model.extend({
    urlRoot: '/api/races',
    
    initialize : function() {
      
      var self = this;
      this.fetch({ success : function() {
        self.trigger('fetched'); }
      });
      
      this.on('fetched', function() {
        this.set('isFetched', true);
      });
      
    },
    
    isFetched : function() {
      return this.get('isFetched');
    }
    
  });
  
  return Race;
});