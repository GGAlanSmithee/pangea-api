define( function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var Template = require('text!councilArea/templates/council.html');
  
  // Views
  var TownView = require('councilArea/views/partials/_town');
  var RaceView = require('councilArea/views/partials/_race');
  
  return Backbone.View.extend({
    
    el       : 'main',
    template : Template,
    
    _partials : [],
    
    initialize : function() {      
      this._partials.push(new TownView());
      this._partials.push(new RaceView());
      this._partialsReady = 0;
    },
    
    onPartialReady : function() {
      ++this._partialsReady;
      
      if (this.isReadyToBeRendered()) {
        this._partialsReady = 0;
        this.render();
      }
    },
    
    isReadyToBeRendered : function() {
      return this._partialsReady == this._partials.length;
    },
    
    run : function() {
      this.initPartials();
    },
    
    render : function() {
      this.$el.html(_.template(this.template, {}));
      this.renderPartials();
      return this.el;
    },
    
    initPartials : function() {
      _.each(this._partials, function(partial) {
        this.listenTo(partial, 'ready', this.onPartialReady);
        partial.fetchModel();
      }, this);
    },
    
    renderPartials: function() {
      _.each(this._partials, function(partial) {
        partial.setElement(partial.selector).render();
      }, this);
    }
  });
});