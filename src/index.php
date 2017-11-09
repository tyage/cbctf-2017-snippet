<?php
include('config.php');
if (file_exists($USER_DIR . '/is_admin')) {
  exit($FLAG);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CODE BLUE Snippet</title>
    <link href="http://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.31.0/codemirror.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.31.0/codemirror.js"></script>
    <style>
        body {
            background-image: url(http://ctf.codeblue.jp/images/bg.jpg);
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            font-family: Orbitron;
        }

        a, body {
            color: #fff;
        }

        .CodeMirror {
            border: 1px solid #c0c0c0;
        }

        .btns {
            margin-top: 8px;
            text-align: right;
        }

        input[type="text"] {
            padding: 8px;
            width: 320px;
        }

        .btns input[type="submit"] {
            display: inline-block;
            padding: 8px 16px;
            border: 0;
            background: #f0f0f0;
            box-shadow: 1px 1px 4px rgba(0,0,0,0.2);
            font-size: 16px;
            cursor: pointer;
        }

        #files {
            margin-top: 24px;
            border-top: 1px solid #c0c0c0;
        }
    </style>
</head>
<body>
    <h1>CODE BLUE Snippet</h1>

    <a href="export.php?dir=<?php echo $USER_DIR ?>">Export</a>
    <span>&nbsp;|&nbsp;</span>
    <a href="<?php echo $USER_DIR ?>">Your files</a>
    <hr>

    <h2>Import</h2>
    <form action="import.php?dir=<?php echo $USER_DIR ?>" enctype="multipart/form-data" method="POST">
        <input type="file" name="file">
        <input type="submit" value="Import">
    </form>
    <hr>

    <h2>Post</h2>
    <form action="post.php" method="POST">
        <p><input type="text" name="filename" placeholder="filename"></p>
        <p><textarea id="code" name="contents"></textarea></p>
        <div class="btns">
            <input type="submit" value="Create Snippet">
        </div>
    </form>

    <script>
        CodeMirror.fromTextArea(document.getElementById('code'), {lineNumbers: true});
    </script>
</body>
</html>
