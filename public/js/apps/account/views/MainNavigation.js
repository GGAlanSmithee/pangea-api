define( function(require) {

    // Required modules
    var BaseView = require('BaseView');
    var Template = require('Text!templates/MainNavigation.html');

    return BaseView.extend({
        el       : 'nav#main',
        template : Template
    });
});
