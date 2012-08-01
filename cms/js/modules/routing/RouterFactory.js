define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    var Backbone = require("backbone");
    var Menu = require("modules/app/Menu");
    var MainContentRenderer = require("modules/app/MainContentRenderer");
    
    function augmentHandler(handler, activeMenu) {
        var expectingViewPromise = handler;
        
        return function() {
            Menu.setActive(activeMenu);
            
            return $.when(expectingViewPromise.apply(this, arguments))
                .always(function(view) {
                    MainContentRenderer.render(view);
                }); 
        };
    }
    
    var RouterFactory = {
        create: function(props, classProps) {
            
            for (var route in props.routes) {
                if (props.routes.hasOwnProperty(route)) {
                    var handler = props[props.routes[route]];
                    props[props.routes[route]] = augmentHandler(handler, props.activeMenu);
                }
            }
            
            return Backbone.Router.extend(props, classProps);
        }
    };
    
    return RouterFactory;
});