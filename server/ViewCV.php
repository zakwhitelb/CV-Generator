<?php
$file = isset($_GET['file']) ? basename($_GET['file']) : null;
if (!$file || !file_exists("../CVs/$file")) {
    die("CV not found.");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <meta name="keyword" content="red, color, colors">
    <meta name="description" content="the beast color in the word">
    <script defer src="../component/JavaScript/Logic.js"></script>
    <link rel="stylesheet" href="../component/style/Style.css">
    <link rel="icon"href="../asset/icon/logoBlack.svg">
    <title>W-CV</title>
</head>
</head>
<body>
    <h1>Your CV is ready!</h1>
    <embed src="../CVs/<?php echo $file; ?>" type="application/pdf" width="600" height="500">
    <br>
    <span class="btn-1">
        <a href="../CVs/<?php echo $file; ?>" download="<?php echo $file; ?>" class="btn-text">Download CV</a>
    </span>
</body>
</html>
