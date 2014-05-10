define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  
  var Template = require('text!councilArea/templates/_race.html');
  
  var Race = require('models/race');
  
  return Backbone.View.extend({

    template : Template,
    selector : '#race-section',
    model    : new Race({ id : 1 }),
    
    initialize : function() {
    },
    
    fetchModel : function() {
      var self = this;
      if (this.model.isFetched()) {
        this.trigger('ready');
      } else {
        this.model.fetch({ success : function( ) { self.trigger('ready'); } });
      }
    },
    
    render : function() {
      this.$el.html(_.template(this.template, { model : this.model }));
      return this.el;
    }
    
  });
});