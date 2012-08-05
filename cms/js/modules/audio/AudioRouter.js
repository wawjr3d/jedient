define(function(require) {
    "use strict";
    
    var RouterFactory = require("modules/routing/RouterFactory");
    var Audio = require("modules/audio/Audio");
    var AudioCollection = require("modules/audio/AudioCollection");
    var AudioView = require("modules/audio/AudioView");
    var AudiosView = require("modules/audio/AudiosView"); 
    
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
                return new AudiosView({ model: audios });
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