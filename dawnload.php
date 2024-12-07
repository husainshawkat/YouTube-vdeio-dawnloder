<?php
if (isset($_POST['video-url'])) {
    $url = $_POST['video-url'];

    // ব্যবহারকারী URL দিয়ে ভিডিও ডাউনলোড করার জন্য yt-dlp ব্যবহার করা হচ্ছে
    $command = "yt-dlp -o 'downloads/%(title)s.%(ext)s' $url";

    // কমান্ডটি রান করে ভিডিও ডাউনলোড শুরু করা হবে
    $output = shell_exec($command);

    // যদি ডাউনলোড সফল হয় তবে ব্যবহারকারীকে ডাউনলোড লিঙ্ক দিবেন
    echo "Download Started. <a href='downloads/your_video_file.mp4'>Click here to download</a>";
} else {
    echo "Please provide a video URL.";
}
?>
