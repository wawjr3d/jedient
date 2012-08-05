define(function(require) {
    "use strict";
    
    var RouterFactory = require("modules/routing/RouterFactory");
    var Audio = require("modules/audio/Audio");
    var AudioCollection = require("modules/audio/AudioCollection");
    var AudioView = require("modules/audio/AudioView");
    var AudioListView = require("modules/audio/AudioListView"); 
    
    var AudioRouter = RouterFactory.create({
        activeMenu: "audio",
        
        routes: {
            "audios": "audios",
            "audio": "addAudio",
            "audio/:id": "audio"
        },
        
        audios: function() {
            var audios = new AudioCollection();
            
            return audios.fetch().pipe(function() {
                return new AudioListView({ model: audios });
            });
        },
        
        audio: function(id) {
            var audio = new Audio({ id: id });
            
            return audio.fetch().pipe(function() {
                return new AudioView({ model: audio });
            });            
        },
        
        addAudio: function() {
            return new AudioView({ model: new Audio() });
        }
    });
        
    return new AudioRouter();
});