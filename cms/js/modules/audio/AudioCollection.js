define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Audio = require("modules/audio/Audio");
    
    var AudioCollection = Backbone.Collection.extend({
        model: Audio,
        url: "../api/audio.php"
    });
    
    return AudioCollection;
});