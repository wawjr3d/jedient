(function(global) {
    "use strict";
    
    function setupMusicPlayer(playlist) {

        var current = 0;

        function playPrevious() {
            var previous = current - 1;

            if (previous < 0) { previous = playlist.length - 1; }

            $f().play(playlist[previous]);
            
            current = previous;   
        }

        function playNext() {
            var next = current + 1;

            if (next >= playlist.length) { next = 0; }

            $f().play(playlist[next]);

            current = next;
        }

        function updatePlayer(clip) {
            $(".controls em").html("\"" + clip.details.title + "\" by " + clip.details.author);
        }

        $f("music-player", "thirdparty/flowplayer/flowplayer-3.2.9.swf", {

            // show playlist buttons in controlbar
            plugins:  {
                audio: {
                    url: 'thirdparty/flowplayer/plugins/flowplayer.audio-3.2.8.swf'
                },
                controls: null
            },
            
            clip: {
                onBegin: updatePlayer,

                onFinish: playNext
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

        var $previous = $();
        var $next = $();

        $(".controls")
            .append("<span class='next' />")
            .append("<span class='prev' />");

        if (playlist.length > 1) {
            $(".controls .prev").click(playPrevious);
            $(".controls .next").click(playNext);

            $(".music-player").addClass("has-many");
        }

        $f().load(function() {
            var clip = playlist[current];

            // set to autoplay false so playlist doesnt autoplay
            clip.autoPlay = false;

            $f().setClip(clip);
            updatePlayer(clip);

            // set back to autoplay true so that it will autoplay as the music loops
            clip.autoPlay = true;
        });
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