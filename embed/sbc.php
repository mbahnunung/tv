<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <!-- Start Meta Ads -->
       <meta name="platform" content="desktop" />
       <meta name="site_name" content="streaming" />
       <!-- End Meta Ads -->
       <title>Live Streaming</title>
       <style>
           body {
               margin:0;
               padding:0;
               overflow: hidden;
           }
       </style>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <script src="https://cdn1.mbahnunungonline.net/v3/hola_player/hola_player.js"></script>
	   
       <div align="center">
        <video poster="https://3.bp.blogspot.com/-pVrVc2ByBKk/Ws8tYW60MLI/AAAAAAAAIwc/7apQs8LYJGYhHd0Y5WzH0PCMayFlXggrACPcBGAYYCw/s1600/19.jpg?v=8.3.2" id="video-player" class="video-js vjs-fluid vjs-default-skin" height="340" width="596" controls autoplay>
        <source src="http://wowza58.indostreamserver.com:1935/langoday/live/playlist.m3u8" type="application/x-mpegURL" />
       </video>
     <script>
      window.hola_player();
     </script>
     </div>
   </body>
</html>