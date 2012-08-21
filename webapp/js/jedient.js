(function(global) {
    "use strict";
    
    function setupMusicPlayer(audioPlayList) {
        $f("music-player", "thirdparty/flowplayer/flowplayer-3.2.9.swf", {
			
			playlist: audioPlayList,
         
            // show playlist buttons in controlbar
            plugins:  {
                audio: {
                    url: 'thirdparty/flowplayer/plugins/flowplayer.audio-3.2.8.swf'
                },
                controls: null
            },
            
            onStart: function(playingClip) {
                var currentPlayingDisplay = ["\"" + playingClip.details.title + "\"",
                                             "by",
                                             playingClip.details.author].join(" ");
                
                $(".controls em").html(currentPlayingDisplay);
            }
        })
        .controls("music-player-controls")
        .controls("top-music-player-controls");
        
        
        // setup scrolling audio title effect
        $(".controls .track")
            .mouseover(function() {
                var $track = $(this);
                var $currentClip = $track.find("em");
                var trackWidth = $track[0].offsetWidth;
                var offsetWidth = $currentClip[0].offsetWidth;
                var widthToVisible = Math.max(offsetWidth - trackWidth, 0); 
                
                $currentClip.animate({ left: -widthToVisible }, widthToVisible * 15);
            })
            .mouseout(function() {
                var $currentClip = $(this).find("em");
                $currentClip.stop().css({ left: 0 });
            })
            .prepend("<em/>");
    }
    
    $.ajax({
        url: "includes/audio.json",
        type: "GET",
        dataType: "json",
        success: setupMusicPlayer
    });

    
    // auto-scrolling ads in the footer
    $("#footer .affiliates .footercontent").carousel("#footer .affiliates .prev", "#footer .affiliates .next");
    
    function slide(){
        $("#footer .affiliates .next").click();
    }
    //Launch the scroll every 2 seconds
    var intervalId = window.setInterval(slide, 5000);   
})(this);