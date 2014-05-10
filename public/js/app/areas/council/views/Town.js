define( function(require) {

    // Required modules
    var BaseView = require('BaseView');

    var Template = require('Text!areas/council/templates/Town.html');
    var Town = require('models/Town');

    return BaseView.extend({
        template : Template,
        selector : '#town-section',
        model    : new Town({ id : 3 })
    });
});
