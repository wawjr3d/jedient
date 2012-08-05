define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var ListView = require("modules/traits/ListView");
    var AudioItemView = require("modules/audio/AudioItemView");
    
    var AudioListView = BaseView.extend(_.extend({}, ListView, {
        listTitle: "Audios",
        listClassName: "audios",
        ItemView: AudioItemView,
     
        events: {
            "click .add.btn": "addAudio"
        },
        
        addAudio: function() {
            document.location.href = "#audio";
        }
    }));
    
    return AudioListView;
});