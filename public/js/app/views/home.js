define( function(require) {
  
  // Required modules
  var _        = require('underscore');
  var BaseView = require('views/base');
  var Template = require('text!templates/home.html');
  
  return BaseView.extend({
    
    el       : 'main',
    template : Template,
    
    initialize : function() {
      BaseView.prototype.initialize.apply(this);
    },
    
    render : function() {
      BaseView.prototype.render.apply(this);
      var html = this.template ? _.template(this.template, {}) : "Undefined template";
      
      if (this.template) {
        this.$el.html(html);
      } else {
        console.log("view template is undefined.");
      }
    }
  });
});