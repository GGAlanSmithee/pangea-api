define(function(require) {

    // Required modules
    var BaseRouter = require('BaseRouter');

    // Views
    var MainNavigationView  = require('views/MainNavigation');

    // Controllers
    var AccountArea = require('areas/account/Account');

    return BaseRouter.extend({
        initialize : function() {
            BaseRouter.prototype.initialize.call(this);

            this._mainNavigationView = new MainNavigationView();
            this._accountArea = new AccountArea();

            this.addRoute(
                'login',
                this._accountArea,
                this._accountArea.loginAction,
                this._accountArea.cleanUp
            );

            this.addRoute(
                'register',
                this._accountArea,
                this._accountArea.registrationAction,
                this._accountArea.cleanUp
            );
        }
    });
});
