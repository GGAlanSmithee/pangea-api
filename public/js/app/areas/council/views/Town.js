define( function(require) {

  // Required modules
  var BaseView = require('BaseView');

  var Template = require('text!councilArea/templates/Town.html');

  var Town = require('models/Town');

  return BaseView.extend({

    template : Template,
    selector : '#town-section',
    model    : new Town({ id : 3 }),

    initialize : function() {
        // empty
    },

  });
});
