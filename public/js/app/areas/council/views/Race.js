define( function(require) {

  // Required modules
  var BaseView = require('BaseView');

  var Template = require('text!councilArea/templates/Race.html');

  var Race = require('models/race');

  return BaseView.extend({

    template : Template,
    selector : '#race-section',
    model    : new Race({ id : 1 }),

  });
});
