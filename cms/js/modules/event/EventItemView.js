define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var eventItemTemplate = require("text!templates/event/event-item.html");
    
    var EventItemView = BaseView.extend({
        template: eventItemTemplate
    });
    
    return EventItemView;
});