define(function(require) {

    // Required modules
    var Backbone = require('Backbone');

    return Backbone.Router.extend({
        routes : {
          '*default' : 'goTo'
        },

        initialize : function() {
            this._routes = new Object();
            this._oldContentView = undefined;
        },

        addRoute : function(key, self, render, cleanUp) {
            this._routes[key] = new Object();
            this._routes[key]['render'] = render.bind(self);
            this._routes[key]['cleanUp'] = cleanUp.bind(self);
        },

        clearOldAction : function() {
            if (this._routes[this._oldContentView]) {
                this._routes[this._oldContentView]['cleanUp'].call();
            }
        },

        runNewAction : function() {
            if (this._routes[Backbone.history.fragment]) {
                this._routes[Backbone.history.fragment]['render'].call();
            }
        },

        goTo: function() {
            if (this._oldContentView != Backbone.history.fragment) {
                if (this._mainNavigationView) {
                    this._mainNavigationView.render();
                }

                this.clearOldAction();
                this.runNewAction();

                this._oldContentView = Backbone.history.fragment;
            }
        }
    });
});
