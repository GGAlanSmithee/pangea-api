require.config({
    paths: {
        App           : "pangea/App",
        Router        : "pangea/Router",

        // Base folder paths
        areas         : "pangea/areas",
        views         : "pangea/views",
        models        : "pangea/models",
        collections   : "pangea/collections",
        templates     : "pangea/templates"
    }
});


require(["DomReady", "App", "JQuery"], function(DomReady, App, $) {
    DomReady(function () {
        var app = new App();
        app.run();
    });
});
