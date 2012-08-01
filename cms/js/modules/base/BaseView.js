define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    var Backbone = require("backbone");
    var Mustache = require("mustache");
    var Behaviors = require("modules/util/Behaviors");
    
    var BaseView = Backbone.View.extend($.extend({}, {
        
        pickTemplate: $.noop,
        
        extra: $.noop,
        
        additionalRendering: $.noop,
        
        render: function() {
            this.pickTemplate();
            
            var model = {};
            if (this.model) { model = this.model.toJSON(); }
            model = $.extend(model, this.extra());
            
            var html = Mustache.render(this.template, model);
            this.$el.html(html);

            this.additionalRendering();           
            Behaviors.apply(this.$el);
            
            return this;
        }
    }));
    
    return BaseView;
});