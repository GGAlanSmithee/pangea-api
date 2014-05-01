define(function(require) {
  
  var Backbone = require('backbone');
  var Router   = require('router');
  
  var App = function() {
  };
  
  App.prototype.run = function() {
    console.log("running");
    
    (new Router());
    Backbone.history.start();
  };
  
  return App;
});
