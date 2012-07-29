define(function(require) {
    "use strict";
    
    var Mustache = require("mustache");
    var listTemplate = require("text!templates/list.html");
    var EMPTY_VIEW = "you prole should set this";
    
    var ListView = {
        tagName: "section",
        template: listTemplate,
        
        ItemView: EMPTY_VIEW,
        
        render: function() {
            if (this.ItemView === EMPTY_VIEW) {
                return;
            }
            
            var model = {
                "listTitle": this.listTitle,
                "listClassName": this.listClassName
            };
            this.$el.html(Mustache.render(this.template, model));
            var $ul = this.$el.find("ul");
            
            for (var i = 0; i < this.model.models.length; i++) {
                var model = this.model.models[i];
                var view = new this.ItemView({ model: model, tagName: "li" });
                
                $ul.append(view.render().el);
            }
            
            return this;
        }
    };
    
    return ListView;
});