define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Router = require("modules/routing/Router");
    var PhotoRouter = require("modules/photo/PhotoRouter");
    var EventRouter = require("modules/event/EventRouter");
    var AudioRouter = require("modules/audio/AudioRouter");
    
    var Application = {
        init: function() {
            $.ajaxSetup({ cache: false });
            
            Backbone.history.start();
        }
    };
    
    return Application;
});