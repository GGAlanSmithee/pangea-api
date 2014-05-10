define( function(require) {

    // Required modules
    var Controller = require('Controller');
    var Template = require('Text!areas/council/templates/Council.html');

    // Views
    var TownView = require('areas/council/views/Town');
    var RaceView = require('areas/council/views/Race');

    return Controller.extend({

        template : Template,

        initialize : function() {
            Controller.prototype.initialize.call(this);

            this.AddView(new TownView());
            this.AddView(new RaceView());
        }
    });
});
