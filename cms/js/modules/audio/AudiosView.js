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
            var $generationStatus = this.$el.find(".generation-status");
            
            $generationStatus.html("Generating...");
            $.post("../api/audio.php", { "action": "generatePlaylist" }, "json")
                .done(function() {
                    $generationStatus.html("<a href='../webapp/includes/audio.json'>Generation complete</a>");
                })
                .fail(function() {
                    $generationStatus.html("There was a problem generating the playlist");
                });
        },
        
        additionalRendering: function() {
            this.$el.append(new AudioListView({ model: this.model }).render().el);
            this.$el.find(".generate-playlist").after("<span class='generation-status'/>");
            
        }
        
    });
    
    return AudiosView;
});