define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var photoItemTemplate = require("text!templates/photo/photo-item.html");
    
    var PhotoItemView = BaseView.extend({
        template: photoItemTemplate
    });
    
    return PhotoItemView;
});