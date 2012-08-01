define(function(require) {
    "use strict";
    
    var RouterFactory = require("modules/routing/RouterFactory");
    var HomeView = require("modules/app/HomeView"); 
    
    var Router = RouterFactory.create({
        activeMenu: "home",
        
        routes: {
            "": "home",
            "#": "home",
            "home": "home"
        },
        
        home: function() {
            return new HomeView();
        }
    });
    
    return new Router();
});