<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textarea</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .container {
            background-color: rgba(167, 194, 185, 0.493);
            height: 100vh;
            max-width: 1000px;
            margin: 0 auto;
            padding-top: 50px;
        }

        li {
            list-style: none;
            padding: 15px 0;
        }

        .task__link {
            text-decoration: none;
            color: #000;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        input {
            margin: 15px 0;
            min-width: 500px;
            min-height: 30px;
            border: none;
            border-radius: 5px;
        }

        textarea {
            min-width: 500px;
            max-width: 100%;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="./index.html" class="task__link">
            <- back </a> <h1>Hello!</h1>
                <form method="POST" action="textarea.php">
                    <p>Enter text</p><br>
                    <textarea name="content" id="" cols="30" rows="10">
                        <?php
                        echo file_get_contents('content.txt');
                        ?>
                    </textarea>
                    <input type="submit" value="Submit it!">
                </form>
                <?php
                file_put_contents('content.txt', $_POST['content']);
                ?>
</body>

</html>