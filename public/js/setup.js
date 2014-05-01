require.config({

  baseUrl: 'js/lib',

  paths: {
    // Base folder paths
    app          : '../app',
    view         : '../app/view',
    model        : '../app/model',
    collection   : '../app/collection',
    template     : '../../template',
    
    // Lib paths
    jquery       : 'jquery/jquery',
    text         : 'require/text',
    'bb-raw'     : 'backbone/backbone',
    backbone     : 'backbone/backbone-module',
    underscore   : 'underscore/underscore',
    
    // Other
    router       : '../app/router'
  },
  
  shim: {
    'bb-raw' : {
      deps    : ['underscore', 'jquery'],
      exports : 'Backbone'
    },
    'underscore' : {
      exports : '_'
    },
    'bootstrap' : {
      deps    : ['jquery']
    },
    'base' : {
      deps    : ['Backbone']
    }
  }
});

require(["app/app", "jquery"], function(App, $) {
  
  $(function() {
    var app = new App();
    app.run();
  });
});