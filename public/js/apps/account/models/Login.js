define( function(require) {

    // Required modules
    var BaseModel = require('BaseModel');

    return BaseModel.extend({
        urlRoot: '/account/login',

        initialize : function() {
        }
    });
});
