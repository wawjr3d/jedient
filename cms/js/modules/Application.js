define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Router = require("modules/Router");
    
    var Application = {
        init: function() {
            Backbone.history.start();
        }
    };
    
    return Application;
});