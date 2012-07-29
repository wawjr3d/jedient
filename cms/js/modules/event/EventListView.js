define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var ListView = require("modules/traits/ListView");
    var EventItemView = require("modules/event/EventItemView");
    
    var EventListView = BaseView.extend(_.extend({}, ListView, {
        listTitle: "Events",
        listClassName: "events",
        ItemView: EventItemView,
     
        events: {
            "click .add.btn": "addEvent"
        },
        
        addEvent: function() {
            document.location.href = "#event";
        }
    }));
    
    return EventListView;
});