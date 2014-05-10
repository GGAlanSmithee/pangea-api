define( function(require) {

  // Required modules
  var BaseModel = require('BaseModel');
  var _        = require('underscore');


  return BaseModel.extend({
    urlRoot: '/api/towns',

    initialize : function() {
        this.fetchModel();
    }
  });

});
