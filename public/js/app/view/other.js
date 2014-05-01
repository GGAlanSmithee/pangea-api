define( function(require) {
  
  // Required modules
  var BaseView = require('view/base');
  var Template = require('text!template/other.html');
  
  var TownModel = require('model/town');
  
  return BaseView.extend({
    
    el       : 'main',
    template : Template,
    
    initialize : function() {
      BaseView.prototype.initialize.apply(this);
    },
    
    render : function() {
      BaseView.prototype.render.apply(this);
      
      var town = new TownModel({ id : 3 });
      town.fetch({
        success: function (town) {
            console.log(town);
          }
      });
      
      var newTown = new TownModel({ name : 'test' });
      newTown.save({
        success: function () {
          console.log(newTown);
        }
      });
      
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