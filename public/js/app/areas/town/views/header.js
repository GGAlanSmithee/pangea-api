define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var Template = require('text!townArea/views/header.html');
  
  return Backbone.View.extend({

    template : Template,
    
    initialize : function() {
    },
    
    render : function(options) {
      var html = _.template(this.template, { town : options.model });
      $(options.el).html(html);
      return this;
    }
    
  });
});