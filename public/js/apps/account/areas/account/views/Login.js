define( function(require) {

    // Required modules
    var BaseView = require('BaseView');
    var _        = require('Underscore');
    var Template = require('Text!areas/account/templates/Login.html');
    var Login    = require('models/Login');

    return BaseView.extend({
        template : Template,
        selector : 'section#content',
        model    : new Login(),

        // Elements
        form     : "form#login",
        username : "input#username",
        password : "input#password",

        events: {
            "click #login-submit" : 'onFormSubmit',
            'input' : 'onInput',
        },

        onFormSubmit : function(e) {
            if ($(this.form)[0].checkValidity()) {
                e.preventDefault();
            } else {
                _.each($(this.form).find('input'), function(input) {
                    if (!input.checkValidity()) {
                        this.setInputAsDirty(input);
                        this.handleInputValidation(input);
                    }
                }, this);
            }
        },

        onInput : function(e) {
            this.setInputAsDirty(e.target);
            this.handleInputValidation(e.target);
        },

        setInputAsDirty : function(input) {
            if (!$(input).hasClass('dirty')) {
                $(input).addClass('dirty');
            }
        },

        handleInputValidation : function(input) {
            var validationMessage =
                input.id == "username" ? (
                input.validity.valueMissing ? "Enter username." :
                input.validity.patternMismatch ? "Must be five characters long" :
                ""
            ) : input.id == "password" ? (
                input.validity.valueMissing ? "Enter password." :
                input.validity.patternMismatch ? "Must be eight characters long" :
                ""
            ) : "";

            input.setCustomValidity(validationMessage);
        }
    });
});
