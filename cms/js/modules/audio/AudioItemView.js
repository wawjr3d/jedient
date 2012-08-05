define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var audioItemTemplate = require("text!templates/audio/audio-item.html");
    
    var AudioItemView = BaseView.extend({
        template: audioItemTemplate
    });
    
    return AudioItemView;
});