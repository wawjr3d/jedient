define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Event = require("modules/event/Event");
    
    var EventCollection = Backbone.Collection.extend({
        model: Event,
        url: "../api/event.php"
    });
    
    return EventCollection;
});