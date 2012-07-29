(function() {
    "use strict";
    
    requirejs.config({
        paths: {
            "backbone": "thirdparty/backbone",
            "underscore": "thirdparty/underscore",
            "jquery": "thirdparty/jquery-1.7.2.min",
            "mustache": "thirdparty/mustache",
            
            "templates": "../templates"
        },
        shim: {
            "jquery": {
                exports: "jQuery"
            },
            "underscore": {
                exports: "_"
            },
            "backbone": {
                deps: ["underscore", "jquery"],
                exports: "Backbone"
            },
            "mustache": {
                exports: "Mustache"
            }
        }
    });

    require(["modules/Application"], function(Application) {
        Application.init();
    });
})();