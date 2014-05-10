define( function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var BaseView = require('views/Base');
    var Template = require('Text!Templates/Nav.html');

    return BaseView.extend({
        el       : '#main-navigation',
        template : Template,

        initialize : function() {
            BaseView.prototype.initialize.apply(this);
        },

        render : function() {
            BaseView.prototype.render.apply(this);

            var html = this.template ? _.template(this.template, {}) : "Undefined template";

            if (this.template) {
                this.$el.html(html);
            } else {
                console.log("view template is undefined.");
            }

            this.setActiveButton();
            },

            events : {
                "click #council"  : "handleMenuClick",
            },

            handleMenuClick : function(e) {
                // Empty
        },

        setActiveButton : function() {
            $('.active').removeClass('active');
            $('#' + Backbone.history.fragment).parent().addClass('active');
        }
    });
});
