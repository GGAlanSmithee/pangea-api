require.config({

  baseUrl: 'js/app/',

  paths: {
    // Base folder paths
    view         : 'view',
    model        : 'model',
    collection   : 'collection',
    template     : '../../template',
    
    // Areas
    townArea     : 'areas/town',
    
    // Lib paths
    jquery       : '../lib/jquery/jquery',
    text         : '../lib/require/text',
    'bb-raw'     : '../lib/backbone/backbone',
    backbone     : '../lib/backbone/backbone-module',
    underscore   : '../lib/underscore/underscore',
    
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

require(["app", "jquery"], function(App, $) {
  
  $(function() {
    var app = new App();
    app.run();
  });
});