<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script async src="https://www.googletagmanager.com/gtag/js"></script>
    <title>mbah nunung Online Player</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="7200">
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico?ver=1530615553" />
    <link href="//vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
    <link href="//cdn1.mbahnunungonline.net/videojs-hls/dist/styles.css" rel="stylesheet">
    <style>
				.video-js:not(.vjs-has-started) .vjs-control-bar {
					display: flex;
				}
				.video-js:not(.vjs-has-started) .vjs-control-bar .vjs-time-tooltip {
					display: none;
				}
			</style>
    <script src="//vjs.zencdn.net/7.3.0/video.min.js"></script>
    <script src="//cdn1.mbahnunungonline.net/videojs-hls/dist/player.js?ver=1555334107"></script>
    
  </head>
  <body class="desktop">

    <video poster="https://cdn1.mbahnunungonline.net/images/spacetoon-tv-stream.jpg?v=8.3.2" id="player" class="video-js vjs-big-play-centered vjs-fill" controls autoplay>
    <source src="https://liveanevia.mncnow.id/live/eds/NickJr/sa_hls/NickJr.m3u8" type="application/x-mpegURL" />
    </video>

  <script src="//cdn.jsdelivr.net/npm/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
  <script src="//unpkg.com/videojs-contrib-quality-levels@2.0.3/dist/videojs-contrib-quality-levels.min.js"></script>
  <script src="//unpkg.com/videojs-hls-quality-selector@1.0.5/dist/videojs-hls-quality-selector.min.js"></script>
  <script>
        var player = videojs('#player');
        player.hlsQualitySelector();
    </script>
</body>
</html>
