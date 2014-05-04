define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var Template = require('text!townArea/views/header.html');
  
  return Backbone.View.extend({

    template : Template,
    
    initialize : function() {
    },
    
    render : function() {
      var html = _.template(this.template, { town : this.model });
      this.$el.html(html);
      
      return this;
    }
    
  });
});