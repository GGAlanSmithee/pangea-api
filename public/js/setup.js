console.log("SYSTEM: Conifguring RequireJS..");

require.config({

  baseUrl : 'js/lib',
  
  paths : {
    // Base paths
    app          : '../app',

    // Lib paths
    jquery       : 'jquery/jquery'
  }
});

console.log("SYSTEM: Main module loading...");

require(["app/app", "jquery"], function(App, $) {
  var app = new App();
  $(app.run());
});