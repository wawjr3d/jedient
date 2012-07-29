define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    var Backbone = require("backbone");
    var Mustache = require("mustache");
    
    var BaseView = Backbone.View.extend($.extend({}, {
        
        pickTemplate: $.noop,
        
        render: function() {
            this.pickTemplate();
            
            var model = {};
            if (this.model) { model = this.model.toJSON(); }
            
            var html = Mustache.render(this.template, model);
            this.$el.html(html);
            
            return this;
        }
    }));
    
    return BaseView;
});