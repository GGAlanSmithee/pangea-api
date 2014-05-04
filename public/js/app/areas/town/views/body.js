define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var Template = require('text!townArea/views/body.html');
  
  return Backbone.View.extend({

    template : Template,
    
    events : {
      "click .test" : "onTestClick"
    },
    
    initialize : function() {
      this.listenTo(this.model, 'change', this.onModelChange);
    },
    
    onTestClick : function() {
      var a = arguments;
      this.model.set('name', $('.name').val());
    },
    
    onModelChange : function(model, options) {
      this.render();
    },
    
    render : function() {
      var html = _.template(this.template, { town : this.model });
      this.$el.html(html);
      
      return this;
    }
    
  });
});