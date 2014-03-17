define(function(require) {
  var $ = require('jquery');
  //var _ = require('underscore');
  
  var App = function() {
  };
  
  App.prototype.run = function() {
    console.log("running");
    $('body').css("background-color", "#AAEEDD");
    
    $("#button").click(function() {
      $.getJSON("/api/towns/3/buildings", function(data) {
        for (var i = 0; i < data.length; ++i) {
          $('#townlist').append("<li>" + data[i].create_time + "</li>");
        }
      });
    });
  };
  
  return App;
});
