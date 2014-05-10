define( function(require) {

  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');

  var Template = require('text!councilArea/templates/Town.html');

  var Town = require('models/Town');

  return Backbone.View.extend({

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
