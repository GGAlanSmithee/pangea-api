define( function(require) {

    // Required modules
    var BaseModel = require('BaseModel');

    return BaseModel.extend({
        urlRoot: '/api/races',

        initialize : function() {
            this.fetchModel();
        }
    });
});
