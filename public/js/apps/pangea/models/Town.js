define( function(require) {

    // Required modules
    var BaseModel = require('BaseModel');

    return BaseModel.extend({
        urlRoot: '/api/towns',

        initialize : function() {
            this.fetchModel();
        }
    });
});
