define( function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var BaseView = require('BaseView');
    var Template = require('Text!Templates/MainNavigation.html');

    return BaseView.extend({
        el       : 'nav#main',
        template : Template
    });
});
