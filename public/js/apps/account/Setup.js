require.config({
    paths: {
        App           : "account/App",
        Router        : "account/Router",

        // Base folder paths
        areas         : "account/areas",
        views         : "account/views",
        models        : "account/models",
        collections   : "account/collections",
        templates     : "account/templates"
    }
});


require(["DomReady", "App", "JQuery"], function(DomReady, App, $) {
    DomReady(function () {
        var app = new App();
        app.run();
    });
});
