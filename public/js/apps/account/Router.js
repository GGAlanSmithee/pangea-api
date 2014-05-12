define(function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    // Views
    var MainNavigationView  = require('views/MainNavigation');

    // Controllers
    var AccountArea = require('areas/account/Account');

    return Backbone.Router.extend({
        routes : {
          '*default' : 'goTo'
        },

        initialize : function() {
            this._oldContentView = undefined;
            this._mainNavigationView = new MainNavigationView();
            this._accountArea = new AccountArea();
        },

        clearOldView : function() {
            switch (this._oldContentView) {
                case 'login' : this._accountArea.cleanUp(); break;
                case 'register' : this._accountArea.cleanUp(); break;
            }
        },

        renderNewView : function() {
            switch (Backbone.history.fragment) {
                case 'login' : this._accountArea.loginAction(); break;
                case 'register' : this._accountArea.registrationAction(); break;
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
