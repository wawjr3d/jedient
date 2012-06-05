$f("music-player", "thirdparty/flowplayer/flowplayer-3.2.9.swf", {
 
    // playlist with five entries
    playlist: [

        {url: "media/audio/bridges_of_forgiveness.mp3"}

    ],
 
    // show playlist buttons in controlbar
    plugins:  {
        audio: {
            url: 'thirdparty/flowplayer/plugins/flowplayer.audio-3.2.8.swf'
        },
        controls: null
    }
 
})
.controls("music-player-controls")
.controls("top-music-player-controls");