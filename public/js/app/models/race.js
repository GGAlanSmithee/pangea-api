define( function(require) {

    // Required modules
    var BaseModel = require('BaseModel');
    var _        = require('Underscore');

    return BaseModel.extend({
        urlRoot: '/api/races',

        initialize : function() {
            this.fetchModel();
        }
    });
});
