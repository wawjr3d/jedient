define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Router = require("modules/Router");
    
    var Application = {
        init: function() {
            $.ajaxSetup({ cache: false });
            
            Backbone.history.start();
        }
    };
    
    return Application;
});