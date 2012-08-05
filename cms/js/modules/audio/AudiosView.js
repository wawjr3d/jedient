define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    var BaseView = require("modules/base/BaseView");
    var AudioListView = require("modules/audio/AudioListView");
    var audiosTemplate = require("text!templates/audio/audios.html");
    
    var AudiosView = BaseView.extend({

        template: audiosTemplate,
        
        events: {
            "click .generate-playlist": "handleGeneratePlaylist"
        },
        
        handleGeneratePlaylist: function() {
            $.post("../api/audio.php", { "action": "generatePlaylist" }, "json")
                .done(function() {
                    // show what we wrote
                    console.log("success");
                })
                .fail(function() {
                    console.error("failure");
                });
        },
        
        additionalRendering: function() {
            this.$el.append(new AudioListView({ model: this.model }).render().el);
        }
        
    });
    
    return AudiosView;
});