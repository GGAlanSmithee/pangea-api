define( function(require) {

    // Required modules
    var BaseView = require('BaseView');

    var Template = require('Text!areas/council/templates/Race.html');
    var Race = require('models/Race');

    return BaseView.extend({
        template : Template,
        selector : '#race-section',
        model    : new Race({ id : 1 }),
    });
});
