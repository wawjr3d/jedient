define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    var EventPhotoCollection = require("modules/photo/EventPhotoCollection");
    
    var Event = BaseModel.extend({
        
        photos: null,
        
        initialize: function() {
            this.initializePhotos();
            this.bind("change:id", this.initializePhotos, this);
        },
        
        urlRoot: "../api/event.php",
        
        initializePhotos: function() {
            this.photos = new EventPhotoCollection([], { eventId: this.id });
        },
        
        fetchPhotos: function(options) {
            return this.photos.fetch(options);
        }
    });
    
    return Event;
});