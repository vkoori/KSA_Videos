<?php 
/*
Plugin Name: KSA_Videos
Description: custom video player | filter by categories | show comments | info | location
Author: koorosh safe ashrafi
Version: 1.0
*/

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/*
* create an administration menu item
*/
add_action('admin_menu', 'KSA_videos_setup_menu');
function KSA_videos_setup_menu(){
	add_menu_page('مدیریت فیلم ها', 'مدیریت فیلم ها', 'manage_options', 'KSA_Videos', 'test_func', 'dashicons-welcome-write-blog');
	add_submenu_page( 'KSA_Videos', 'test', 'test', 'manage_options', 'KSA_Videos', 'test_func');
}

function test_func() {
	// require 'vendor/autoload.php';
	    
	// 	$config = [
	// 	    'ffmpeg.binaries'  => plugin_dir_path(__FILE__).'ffmpeg.exe',
	// 	    'ffprobe.binaries' => plugin_dir_path(__FILE__).'ffprobe.exe',
	// 	    'timeout'          => 3600, // The timeout for the underlying process
	// 	    'ffmpeg.threads'   => 12,   // The number of threads that FFmpeg should use
	// 	];

	// 	$log = new Logger('FFmpeg_Streaming');
	// 	$log->pushHandler(new StreamHandler(plugin_dir_path(__FILE__).'log/ffmpeg-streaming.log')); // path to log file
		    
	// 	$ffmpeg = Streaming\FFMpeg::create($config, $log);
	// // FFMpeg::create()

	// $video = $ffmpeg->open(plugin_dir_path(__FILE__).'video/video.mp4');
	
	// $hls = $video->hls()
 //    ->x264()
 //    ->autoGenerateRepresentations()
 //    ->save();
	?>

	<link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
	<style>
		.vjs-resolution-button .vjs-icon-placeholder:before{
			content: '\f110';
			font-family: 'VideoJS';
		}
	</style>

	<video id="my_video_1" class="video-js vjs-fluid vjs-default-skin" controls preload="auto"
	data-setup='{}'>
		<source src="<?php echo plugins_url() ?>/KSA_Videos/video/video_144p.m3u8" label="144" res="144" type="application/x-mpegURL">
		<source src="<?php echo plugins_url() ?>/KSA_Videos/video/video_240p.m3u8" label="240" res="240" type="application/x-mpegURL">
		<source src="<?php echo plugins_url() ?>/KSA_Videos/video/video_360p.m3u8" label="360" res="360" type="application/x-mpegURL">
		<source src="<?php echo plugins_url() ?>/KSA_Videos/video/video_600p.m3u8" label="600" res="600" type="application/x-mpegURL">
	</video>
      
	<script src="https://unpkg.com/video.js/dist/video.js"></script>
	<script src="<?php echo plugins_url() ?>/KSA_Videos/lib/videojs-resolution-switcher.js"></script>
	<script>var player = videojs('my_video_1').videoJsResolutionSwitcher();</script>

	<?php 
}
