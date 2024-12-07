<?php
if (isset($_POST['video-url'])) {

    $url = $_POST['video-url'];

    $output_dir = 'downloads/';
    $command = "yt-dlp -o '{$output_dir}%(title)s.%(ext)s' {$url}";

   
    $output = shell_exec($command);

    
    if ($output) {
        echo "Download Started! <br>";
        echo "Click <a href='{$output_dir}your_video.mp4'>here</a> to download the video.";
    } else {
        echo "There was an error downloading the video. Please check the URL.";
    }
} else {
    echo "Please provide a valid video URL.";
}
?>
