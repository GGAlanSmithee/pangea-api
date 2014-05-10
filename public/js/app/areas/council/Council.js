define( function(require) {

  // Required modules
  var Controller = require('Controller');
  var _        = require('underscore');
  var Template = require('text!councilArea/templates/Council.html');

  // Views
  var TownView = require('councilArea/views/Town');
  var RaceView = require('councilArea/views/Race');

  return Controller.extend({

    template : Template,

    initialize : function() {
      Controller.prototype.initialize.call(this);

      this.AddView(new TownView());
      this.AddView(new RaceView());
    },

    run : function() {
        Controller.prototype.run.call(this);
    }

  });
});
