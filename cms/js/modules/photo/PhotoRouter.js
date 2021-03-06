define(function(require) {
    "use strict";
    
    var RouterFactory = require("modules/routing/RouterFactory");
    var MainContentRenderer = require("modules/app/MainContentRenderer");
    var Photo = require("modules/photo/Photo");
    var PhotoCollection = require("modules/photo/PhotoCollection");
    var PhotoView = require("modules/photo/PhotoView");
    var PhotoListView = require("modules/photo/PhotoListView");   
    
    var PhotoRouter = RouterFactory.create({
        activeMenu: "photo",
        
        routes: {
            "photos": "photos",
            "photo": "addPhoto",
            "event/photo/:eventId": "addPhotoToEvent",
            "photo/:id": "photo"
        },

        photos: function() {
            var photos = new PhotoCollection();
            
            return photos.fetch().pipe(function() {
                return new PhotoListView({ model: photos });
            });
        },
        
        photo: function(id) {
            var photo = new Photo({ id: id });
            
            return photo.fetch().pipe(function() {
                return new PhotoView({ model: photo });
            });
        },
        
        addPhoto: function() {
            return new PhotoView({ model: new Photo() });            
        },
        
        addPhotoToEvent: function(eventId) {
            var photo = new Photo();
            photo.set("eventId", eventId);
            return new PhotoView({ model: photo });            
        }
    });
        
    return new PhotoRouter();
});