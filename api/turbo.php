<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            width: 200px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Photo Gallery</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <h2>Uploaded Photos</h2>
    <div class="gallery">
        <?php
            $files = glob("uploads/*.*");
            foreach($files as $file) {
                echo '<img src="' . $file . '" alt="Uploaded photo" />';
            }
        ?>
    </div>
</body>
</html>
