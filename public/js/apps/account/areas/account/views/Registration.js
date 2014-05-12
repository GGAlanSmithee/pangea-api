define( function(require) {

    // Required modules
    var BaseView = require('BaseView');

    var Template = require('Text!areas/account/templates/Registration.html');
    var Registration = require('models/Registration');

    return BaseView.extend({
        template : Template,
        selector : 'section#content',
        model    : new Registration()
    });
});
