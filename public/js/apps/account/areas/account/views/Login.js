define( function(require) {

    // Required modules
    var BaseView = require('BaseView');

    var Template = require('Text!areas/account/templates/Login.html');
    var Login = require('models/Login');

    return BaseView.extend({
        template : Template,
        selector : 'section#content',
        model    : new Login(),

        events: {
            "submit form" : "onFormSubmit",
            "blur input" : "onInputBlur"
        },

        onFormSubmit : function(e) {
            e.preventDefault();
        },

        onInputBlur : function(e, that) {
            e.preventDefault();
            $(e.target).addClass('dirty');
        }
    });
});
