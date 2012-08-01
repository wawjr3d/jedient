define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    
    var WEBAPP_DIR = "../webapp";
    var PREVIEW_IDENTIFIER = "data-preview-image";
    
    var behaviorsToApply = {
        "preview-image": function($el) {
            $el.find("[" + PREVIEW_IDENTIFIER + "]").each(function(i, n) {
                var $previewAble = $(n);
                $previewAble.append("<div class='thumbnail'><img src='" + WEBAPP_DIR + "/" + $previewAble.attr(PREVIEW_IDENTIFIER) + "'/></div>")
            });
        }
    };
    
    var Behaviors = {
        apply: function(selector) {
            var $el = $(selector);
            
            for(var behaviorId in behaviorsToApply) {
                if (behaviorsToApply.hasOwnProperty(behaviorId)) {
                    var behavior = behaviorsToApply[behaviorId];
                    behavior($el);
                }
            }
        }
    };
    
    return Behaviors;
});