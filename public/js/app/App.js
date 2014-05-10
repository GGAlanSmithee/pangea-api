define(function(require) {

    var Backbone = require('Backbone');
    var Router   = require('Router');

    var App = function() {
    };

    App.prototype.run = function() {
        console.log("running");

        (new Router());
        Backbone.history.start();
    };

    return App;
});
