define( function(require) {

    // Required modules
    var BaseView     = require('BaseView');
    var _            = require('Underscore');

    var Template     = require('Text!areas/account/templates/Registration.html');
    var Registration = require('models/Registration');

    return BaseView.extend({
        template : Template,
        selector : 'section#content',
        model    : new Registration(),

        // Elements
        form      : "form#registration",
        username  : "input#username",
        password  : "input#password",
        email     : "input#email",
        firstname : "input#first-name",
        lastname  : "input#last-name",

        events: {
            "click #registration-submit" : 'onFormSubmit',
            'input' : 'onInput',
        },

        onFormSubmit : function(e) {
            if ($(this.form)[0].checkValidity()) {
                e.preventDefault();

                $.ajax({
                    type : "POST",
                    url : "/api/account/register",
                    contentType : "application/json; charset=utf-8",
                    data : JSON.stringify({
                        "username"   : $(this.form).find(this.username).val(),
                        "password"   : $(this.form).find(this.password).val(),
                        "first_name" : $(this.form).find(this.firstname).val(),
                        "last_name"  : $(this.form).find(this.lastname).val(),
                        "email"      : $(this.form).find(this.email).val()
                    }),
                    beforeSend : function (){
                        // Show wait message in DOM
                    },
                    success : function (response) {
                        console.log(response);
                        // Show success message in DOM
                    },
                    error : function (xhr, status, response) {
                        console.log(status);
                        console.log(response);
                        // Show error message in DOM
                    },
                    complete : function (response) {
                        console.log(response);
                        // Show complete message in DOM
                    }
                });

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
                input.validity.valueMissing ? "Enter username" :
                input.validity.patternMismatch ? "Must be five characters long" :
                ""
            ) : input.id == "password" ? (
                input.validity.valueMissing ? "Enter password" :
                input.validity.patternMismatch ? "Must be eight characters long" :
                ""
            ) : input.id == "email" ? (
                input.validity.valueMissing ? "Enter email" :
                input.validity.typeMismatch ? "Not a valid email format (gg@no.re)" :
                ""
            ) : input.id == "first-name" ? (
                input.validity.valueMissing ? "Enter first name" :
                ""
            ) : input.id == "last-name" ? (
                input.validity.valueMissing ? "Enter last name" :
                ""
            ) : "";

            input.setCustomValidity(validationMessage);
        }
    });
});
