define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Router = require("modules/routing/Router");
    var PhotoRouter = require("modules/routing/PhotoRouter");
    var EventRouter = require("modules/routing/EventRouter");
    
    var Application = {
        init: function() {
            $.ajaxSetup({ cache: false });
            
            Backbone.history.start();
        }
    };
    
    return Application;
});