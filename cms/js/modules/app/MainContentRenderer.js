define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    
    var currentView;
    
    var MainContentRenderer = {
        render: function(view) {
            if (!view) {
                return;
            }

            currentView = view;
            
            $("#content").html(currentView.render().el);
        }
    };
    
    return MainContentRenderer;
});