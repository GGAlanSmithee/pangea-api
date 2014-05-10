define( function(require) {

    // Required modules
    var Backbone = require('Backbone');
    var _        = require('Underscore');

    return Backbone.View.extend({

        el       : 'main#controller',
        _views : [],

        initialize : function() {
            this._viewsReady = 0;
        },

        onViewReady : function() {
            ++this._viewsReady;

            if (this.isReadyToBeRendered()) {
                this._viewsReady = 0;
                this.render();
            }
        },

        isReadyToBeRendered : function() {
            return this._viewsReady == this._views.length;
        },

        run : function() {
            this.initViews();
        },

        cleanUp : function() {
            this.undelegateEvents();
            this.$el.removeData().unbind();
            this.$el.empty();
        },

        render : function() {
            this.$el.html(_.template(this.template, {}));
            this.renderViews();
            return this.el;
        },

        AddView: function(view) {
            this._views.push(view);
        },

        initViews : function() {
            _.each(this._views, function(view) {
                this.listenTo(view, 'ready', this.onViewReady);
                view.fetchModel();
            }, this);
        },

        renderViews: function() {
            _.each(this._views, function(view) {
                view.setElement(view.selector).render();
            }, this);
        }
    });
});
