define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var Template = require('text!townArea/town.html');
  
  // Views
  var BodyView = require('townArea/views/body');
  var HeaderView = require('townArea/views/header');
  
  // Models
  var TownModel = require('townArea/models/town');
  
  return Backbone.View.extend({
    
    el       : 'main',
    template : Template,
    
    //Views 
    views : {
      body : new BodyView(),
      header : new HeaderView()
    },
    
    initialize : function() {
      this.town = new TownModel({ id : 3 });
    },
    
    run : function() {
      var self = this;
      
      this.town.fetch({
        success : function(town) {
          _.each(self.views, function(view) {
            
            self.render();
            self.views.header.render({ el : '#town-header', model : town });
            self.views.body.render({ el : '#town-body', model : town });
          });
        }
      });
    },
    
    render : function() {
      var html = this.template ? _.template(this.template, {}) : "Undefined template";
      this.$el.html(html);
      return this;      
    }
    
  });
});