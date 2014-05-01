define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  
  return Backbone.Model.extend({
    urlRoot: '/api/towns',
  });
});