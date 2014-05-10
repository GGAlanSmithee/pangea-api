require.config({

  baseUrl: 'js/app/',

  paths: {
    // Base folder paths
    views         : 'views',
    models        : 'models',
    collections   : 'collections',
    templates     : '../../templates',
    
    // Areas
    councilArea   : 'areas/council',
    
    // Lib paths
    jquery       : '../lib/jquery/jquery',
    text         : '../lib/require/text',
    'bb-raw'     : '../lib/backbone/backbone',
    backbone     : '../lib/backbone/backbone-module',
    'backbone-relational' : '../lib/backbone/backbone-relational',
    underscore   : '../lib/underscore/underscore',
    
    // Other
    router       : '../app/router'
  },
  
  shim: {
    'bb-raw' : {
      deps    : ['underscore', 'jquery'],
      exports : 'Backbone'
    },
    'backbone-relational' : {
      deps    : ['underscore', 'backbone']
    },
    underscore : {
      exports : '_'
    },
    bootstrap : {
      deps    : ['jquery']
    },
    base : {
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