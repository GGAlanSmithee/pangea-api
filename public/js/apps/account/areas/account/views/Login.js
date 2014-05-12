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
            "click #login-submit": "onLoginSubmit"
        },

        onLoginSubmit : function() {
            model.set('username', $('#username').val());
            model.set('password', $('#password').val());
        }
    });
});
