require.config({

    baseUrl: 'js/app/',

    paths: {
        // Base folder paths
        Views         : 'views',
        Models        : 'models',
        Collections   : 'collections',
        Templates     : '../../templates',

        // Base enteties
        Controller    : 'bases/Controller',
        BaseView      : 'bases/View',
        BaseModel     : 'bases/Model',

        // Libs
        jquery       : '../lib/jquery/jquery',
        Underscore   : '../lib/underscore/Underscore',
        'BB-raw'     : '../lib/backbone/Backbone',
        Backbone     : '../lib/backbone/BackboneModule',
        'Text'       : '../lib/require/Text',

        // Other
        Router       : '../app/Router'
    },

    shim: {
        'BB-raw' : {
            deps : ['Underscore', 'jquery'],
            exports : 'Backbone'
        },
        jquery : {
            exports : '$'
        },
        Underscore : {
            exports : '_'
        },
        Bootstrap : {
            deps : ['jquery']
        },
        Base : {
            deps : ['Backbone']
        }
    }
});

require(["App", "jquery"], function(App, $) {
    $(function() {
        var app = new App();
        app.run();
    });
});
