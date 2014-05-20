require.config({

    baseUrl: "js/apps/",

    paths: {
        // Base enteties
        Controller    : "shared/Controller",
        BaseView      : "shared/View",
        BaseModel     : "shared/Model",
        BaseRouter    : "shared/Router",

        // Libs
        JQuery       : "../lib/jquery/JQuery",
        BlockUI      : "../lib/jquery/BlockUI",
        Underscore   : "../lib/underscore/Underscore",
        "BB-raw"     : "../lib/backbone/Backbone",
        Backbone     : "../lib/backbone/BackboneModule",
        DomReady     : "../lib/require/DomReady",
        "Text"       : "../lib/require/Text"
    },

    shim: {
        "BB-raw" : {
            deps : ["Underscore", "JQuery"],
            exports : "Backbone"
        },
        JQuery : {
            exports : "$"
        },
        BlockUI : {
            deps : ["JQuery"],
            exports : "BlockUI"
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
