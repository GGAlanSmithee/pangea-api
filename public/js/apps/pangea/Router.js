define(function(require) {

    // Required modules
    var BaseRouter = require('BaseRouter');

    // Views
    var MainNavigationView  = require('views/MainNavigation');

    // Controllers
    var CouncilArea = require('areas/council/Council');

    return BaseRouter.extend({
        initialize : function() {
            BaseRouter.prototype.initialize.call(this);

            this._mainNavigationView = new MainNavigationView();
            this._councilArea = new CouncilArea();

            this.addRoute(
                'council',
                this._councilArea,
                this._councilArea.run,
                this._councilArea.cleanUp
            );
        }
    });
});
