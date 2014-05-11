define( function(require) {

    // Required modules
    var Controller = require('Controller');
    var Template = require('Text!areas/account/templates/Account.html');

    // Views
    var LoginView = require('areas/account/views/Login');

    return Controller.extend({

        template : Template,

        initialize : function() {
            Controller.prototype.initialize.call(this);

            this.AddView(new LoginView());
        },

        run : function() {
            this.render();
        }
    });
});
