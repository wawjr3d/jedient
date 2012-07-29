define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    var EventPhotoCollection = require("modules/photo/EventPhotoCollection");
    
    var Event = BaseModel.extend({
        
        photos: null,
        
        initialize: function() {
            this.photos = new EventPhotoCollection([], { eventId: this.id });
        },
        
        urlRoot: "../api/event.php",
        
        fetchPhotos: function(options) {
            return this.photos.fetch(options);
        }
    });
    
    return Event;
});