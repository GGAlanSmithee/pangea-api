define(function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    // Views
    var MainNavigationView  = require('views/MainNavigation');

    // Controllers
    var CouncilArea = require('areas/council/Council');

    return Backbone.Router.extend({
        routes : {
          '*default' : 'goTo'
        },

        initialize : function() {
            this._oldContentView = undefined;
            this._mainNavigationView = new MainNavigationView();
            this._councilArea = new CouncilArea();
        },

        clearOldView : function() {
            switch (this._oldContentView) {
                case 'council' : this._councilArea.cleanUp(); break;
            }
        },

        renderNewView : function() {
            switch (Backbone.history.fragment) {
                case 'council' : this._councilArea.run(); break;
                default : break;
            }
        },

        goTo: function() {
            if (this._oldContentView != Backbone.history.fragment) {
                this._mainNavigationView.render();

                this.clearOldView();
                this.renderNewView();

                this._oldContentView = Backbone.history.fragment;
            }
        }
    });
});
