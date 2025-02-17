
    function onYouTubeIframeAPIReady() {
        let player = new YT.Player('youtube-player', {
            events: {
                'onReady': function(event) {
                    event.target.playVideo(); // Force l'autoplay
                }
            }
        });
    }


