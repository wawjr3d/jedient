define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Menu = require("modules/app/Menu");
    var HomeView = require("modules/app/HomeView"); 
    var MainContentRenderer = require("modules/app/MainContentRenderer");
    var Event = require("modules/event/Event");
    var EventCollection = require("modules/event/EventCollection");
    var EventView = require("modules/event/EventView");
    var EventListView = require("modules/event/EventListView");
    var Photo = require("modules/photo/Photo");
    var PhotoCollection = require("modules/photo/PhotoCollection");
    var PhotoView = require("modules/photo/PhotoView");
    var PhotoListView = require("modules/photo/PhotoListView");    
    
    var Router = Backbone.Router.extend({
        routes: {
            "": "home",
            "#": "home",
            "home": "home",
            "events": "events",
            "event": "event",
            "event/:id": "event",
            "photos": "photos",
            "photo/:id": "photo"
        },
        
        home: function() {
            Menu.setActive("home");
            MainContentRenderer.render(new HomeView());
        },
        
        events: function() {
            Menu.setActive("events");
            var events = new EventCollection();
            events.fetch({
                success: function(collection) {
                    MainContentRenderer.render(new EventListView({ model: collection }));
                }
            });
        },
        
        event: function(id) {
            var event;
            Menu.setActive("events");
            
            if (id) {
                event = new Event({ id: id });
                event.fetch({
                    success: function(model) {
                        MainContentRenderer.render(new EventView({ model: model }));
                    }
                });                 
            } else {
                MainContentRenderer.render(new EventView({ model: new Event() }));
            }
 
        },
        
        photos: function() {
            Menu.setActive("photos");
            var photos = new PhotoCollection();
            photos.fetch({
                success: function(collection) {
                    MainContentRenderer.render(new PhotoListView({ model: collection }));
                }
            });
        },
        
        photo: function(id) {
            Menu.setActive("photos");
            var photo = new Photo({ id: id });
            photo.fetch({
                success: function(model) {
                    MainContentRenderer.render(new PhotoView({ model: model }));
                }
            });  
        },
    });
    
    return new Router();
});