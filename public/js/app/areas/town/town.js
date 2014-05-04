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
    
    initialize : function() {
      this.town = new TownModel({ id : 3 });
    },
    
    run : function() {
      var self = this;
      if (this.town.fetched) {
        this.render();
      } else {
        this.town.fetch({
          success : function(town) {
            self.initSubViews(town);
            self.render();
          }
        });
      }
    },
    
    initSubViews : function(town) {
      this.headerView = new HeaderView({ model : town });
      this.bodyView = new BodyView({ model : town });
      
      town.fetched = true;
    },
    
    render : function() {
      var html = this.template ? _.template(this.template, {}) : "Undefined template";
      this.$el.html(html);

      this.headerView.setElement('#town-header').render();
      this.bodyView.setElement('#town-body').render();
        
      return this;
    }
  });
});