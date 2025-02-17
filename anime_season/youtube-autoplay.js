<script>
    function onYouTubeIframeAPIReady() {
        let player = new YT.Player('youtube-player', {
            events: {
                'onReady': function(event) {
                    event.target.playVideo(); // Force l'autoplay
                }
            }
        });
    }
</script>
<script src="https://www.youtube.com/iframe_api"></script>
