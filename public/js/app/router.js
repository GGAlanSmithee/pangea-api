define(function(require) {
  
  // Required modules
  var Backbone = require('backbone');
  var _        = require('underscore');
  var HomeView = require('view/home');
  var NavView  = require('view/nav');
  var OtherView = require('view/other');
  
  return Backbone.Router.extend({
    routes : {
      '*default' : 'goTo'
    },
    
    initialize : function() {
      this._oldContentView = undefined;
      this._homeView       = new HomeView();
      this._navView        = new NavView();
      this._otherView      = new OtherView();
    },
    
    clearOldView : function() {
        switch (this._oldContentView) {
          case 'home'  : this._homeView.clear();  break;
          case 'other' : this._otherView.clear(); break;
          default      : break;
        }
    },
    
    renderNewView : function() {
      switch (Backbone.history.fragment) {
        case 'home'  : this._homeView.render();  break;
        case 'other' : this._otherView.render(); break;
        default      : break;
      }
    },
    
    goTo: function() {
      if (this._oldContentView != Backbone.history.fragment) {
        this._navView.render();
        
        this.clearOldView();
        this.renderNewView();
        
        this._oldContentView = Backbone.history.fragment;
      }
    }
  });
});