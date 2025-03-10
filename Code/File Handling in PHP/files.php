<?php
// $file = fopen("message.txt", "r");
// echo fread($file, filesize("message.txt"));
// fclose($file);


// $file = fopen("./message.txt", "w");
// fwrite($file, "Hello Javascript!");
// echo fread($file, filesize("message.txt"));
// fclose($file);

// $file = fopen("./message.txt", "a");
// fwrite($file, " and Hello PHP!");
// fwrite($file, " and Hello C++!");
// echo fread($file, filesize("./message.txt"));
// fclose($file);

// if(file_exists('message.txt')) {
//     unlink('message.txt');
//     echo "File Deleted";
// }

if ($_FILES["file"]["error"] == 0) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
    echo "File uploaded!";
    echo $_FILES["file"]["name"];
    echo "   ";
    echo $_FILES["file"]["tmp_name"];
}

?>
