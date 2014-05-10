define( function(require) {
  
  // Required modules
  var BaseView = require('views/base');
  var Template = require('text!templates/other.html');
  
  return BaseView.extend({
    
    el       : 'main',
    template : Template,
    
    initialize : function() {
      BaseView.prototype.initialize.apply(this);
    },
    
    render : function() {
      BaseView.prototype.render.apply(this);
      
      var html = this.template ? _.template(this.template, {}) : "Undefined template";
      
      if (this.template) {
        this.$el.html(html);
      } else {
        console.log("view template is undefined.");
      }
    },
    
    events : {
      "click #button" : "showList"
    },
    
    showList : function(e) {
      e.preventDefault();
      
      $.getJSON("/api/towns/3/buildings", function(data) {
        $('#list').empty();
        $(data).each(function() {
          $('#list').append("<li>" + this.create_time + "</li>");
        });
      });
    }
  });
});