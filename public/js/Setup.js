require.config({

    baseUrl: "js/app/",

    paths: {
        // Base folder paths
        Views         : "views",
        Models        : "models",
        Collections   : "collections",
        Templates     : "../../templates",

        // Base enteties
        Controller    : "bases/Controller",
        BaseView      : "bases/View",
        BaseModel     : "bases/Model",

        // Libs
        JQuery       : "../lib/jquery/JQuery",
        Underscore   : "../lib/underscore/Underscore",
        "BB-raw"     : "../lib/backbone/Backbone",
        Backbone     : "../lib/backbone/BackboneModule",
        "Text"       : "../lib/require/Text",

        // Other
        Router       : "../app/Router"
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
