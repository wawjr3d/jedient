define(function(require) {
    "use strict";
    
    var PhotoCollection = require("modules/photo/PhotoCollection");
    var Photo = require("modules/photo/Photo");
    
    var EventPhotoCollection = PhotoCollection.extend({
        
        eventId: null,
        
        initialize: function(models, options) {
            this.eventId = options.eventId;
        },
        
        url: function() {
            if (!this.eventId) {
                throw new Error("EventPhotCollection must have an eventId");
            }
            
            return "../api/photo.php?eventId=" + this.eventId;
        }
    });
    
    return EventPhotoCollection;
});