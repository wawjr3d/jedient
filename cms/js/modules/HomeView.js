define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    
    var HomeView = BaseView.extend({
        template: require("text!templates/home.html")
    });
    
    return HomeView;
});