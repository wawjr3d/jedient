define(function(require) {
    "use strict";
    
    var RouterFactory = require("modules/routing/RouterFactory");
    var Event = require("modules/event/Event");
    var EventCollection = require("modules/event/EventCollection");
    var EventView = require("modules/event/EventView");
    var EventListView = require("modules/event/EventListView"); 
    
    var EventRouter = RouterFactory.create({
        activeMenu: "event",
        
        routes: {
            "events": "events",
            "event": "addEvent",
            "event/:id": "event"
        },
        
        events: function() {
            var events = new EventCollection();
            
            return events.fetch().pipe(function() {
                return new EventListView({ model: events });
            });
        },
        
        event: function(id) {
            var event = new Event({ id: id });
            
            return event.fetch().pipe(function() {
                return new EventView({ model: event });
            });            
        },
        
        addEvent: function() {
            return new EventView({ model: new Event() });
        }
    });
        
    return new EventRouter();
});