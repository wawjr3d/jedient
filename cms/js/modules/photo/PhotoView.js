define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var photoTemplate = require("text!templates/photo/photo.html");
    
    var PhotoView = BaseView.extend({
        tagName: "article",
        className: "photo",
        
        template: photoTemplate
    });
    
    return PhotoView;
});