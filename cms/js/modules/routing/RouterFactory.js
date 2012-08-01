define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    var Backbone = require("backbone");
    var Menu = require("modules/app/Menu");
    var MainContentRenderer = require("modules/app/MainContentRenderer");
    
    function makeHandlerThatSetsActiveMenu(handler, activeMenu) {
        var oldHandler = handler;
        
        return function() {
            Menu.setActive(activeMenu);
            
            return oldHandler.apply(this, arguments);
        }
    }
    
    function makeHandlerThatRendersExpectedView(handler) {
        var expectingViewPromise = handler;
        
        return function() {
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
                    handler = makeHandlerThatSetsActiveMenu(handler, props.activeMenu);
                    handler = makeHandlerThatRendersExpectedView(handler);
                    props[props.routes[route]] = handler;
                }
            }
            
            return Backbone.Router.extend(props, classProps);
        }
    };
    
    return RouterFactory;
});