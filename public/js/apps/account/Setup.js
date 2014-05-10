require.config({

    baseUrl: "js/apps/account/",

    paths: {
        // Base folder paths
        Views         : "views",
        Models        : "models",
        Collections   : "collections",
        Templates     : "../../templates",

        // Base enteties
        Controller    : "../shared/Controller",
        BaseView      : "../shared/View",
        BaseModel     : "../shared/Model",

        // Libs
        JQuery       : "../../lib/jquery/JQuery",
        Underscore   : "../../lib/underscore/Underscore",
        "BB-raw"     : "../../lib/backbone/Backbone",
        Backbone     : "../../lib/backbone/BackboneModule",
        "Text"       : "../../lib/require/Text"
    },

    shim: {
        "BB-raw" : {
            deps : ["Underscore", "JQuery"],
            exports : "Backbone"
        },
        JQuery : {
            exports : "$"
        },
        Underscore : {
            exports : "_"
        },
        Bootstrap : {
            deps : ["JQuery"]
        },
        Base : {
            deps : ["Backbone"]
        }
    }
});

require(["App", "JQuery"], function(App, $) {
    $(function() {
        var app = new App();
        app.run();
    });
});
