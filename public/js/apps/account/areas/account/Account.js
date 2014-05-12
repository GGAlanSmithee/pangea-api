define( function(require) {

    // Required modules
    var Controller = require('Controller');
    var Template = require('Text!areas/account/templates/Account.html');

    // Views
    var LoginView = require('areas/account/views/Login');
    var RegistrationView = require('areas/account/views/Registration');

    return Controller.extend({

        template : Template,

        initialize : function() {
            Controller.prototype.initialize.call(this);
        },

        run : function() {
            this.render();
        },

        loginAction : function() {
            this.AddView(new LoginView());
            this.run();
        },

        registrationAction : function() {
            this.AddView(new RegistrationView());
            this.run();
        }
    });
});
