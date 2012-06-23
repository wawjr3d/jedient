$f("music-player", "thirdparty/flowplayer/flowplayer-3.2.9.swf", {
 
    // playlist with five entries
    playlist: [

        {
            url: "media/audio/bridges_of_forgiveness.mp3",
            details: {
                title: "Bridges of Forgiveness",
                author: "JediEnt"
            }
        }

    ],
 
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