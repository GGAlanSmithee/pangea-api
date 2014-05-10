define(function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    // Controllers
    var AccountArea = require('areas/account/Account');

    return Backbone.Router.extend({
        routes : {
          '*default' : 'goTo'
        },

        initialize : function() {
            this._oldContentView = undefined;
            this._accountArea = new AccountArea();
        },

        clearOldView : function() {
            switch (this._oldContentView) {
                case 'account' : this._accountArea.cleanUp(); break;
                default : this._accountArea.cleanUp(); break;
            }
        },

        renderNewView : function() {
            switch (Backbone.history.fragment) {
                case 'account' : this._accountArea.run(); break;
                default : this._accountArea.run(); break;
            }
        },

        goTo: function() {
            if (this._oldContentView != Backbone.history.fragment) {

                this.clearOldView();
                this.renderNewView();

                this._oldContentView = Backbone.history.fragment;
            }
        }
    });
});
