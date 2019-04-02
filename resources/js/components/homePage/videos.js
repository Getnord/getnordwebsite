export default function videosControllers() {
    $('#designed_overlay').click(function(e) {
        e.preventDefault();
        var video = document.getElementById('designed_video');
        $('#designed_overlay').hide();
        video.play();
    });

    $('#designed_video').click(function(e) {
        var video = document.getElementById('designed_video');
        if (!video.hasAttribute('controls')) {
            e.preventDefault();
            $('#designed_overlay').show();
            video.pause();
        }
    });
}