define( function(require) {

    // Required modules
    var Controller = require('Controller');
    var Template = require('Text!areas/account/templates/Account.html');

    return Controller.extend({

        template : Template,

        initialize : function() {
            Controller.prototype.initialize.call(this);
        }
    });
});
