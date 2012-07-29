define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    
    var ACTIVE = "active";
    var $menu = $("header nav ul");
    var $items = $menu.find("li");
    
    var Menu = {
        setActive: function(id) {
            $items.removeClass(ACTIVE);
            $menu.find("li." + id).addClass(ACTIVE);
        }
    };
    
    return Menu;
});