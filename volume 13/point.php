<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point</title>
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
    </style>
</head>

<body>
    <div class="container">
        <a href="./index.html" class="task__link">
            <- back </a> <h1>Hello!</h1>

                <form method="POST" action="point.php">
                    <p>Xa:</p>
                    <input type="text" name="xa">
                    <p>Ya:</p>
                    <input type="text" name="ya">
                    <p>Xb:</p>
                    <input type="text" name="xb">
                    <p>Yb:</p>
                    <input type="text" name="yb">
                    <input type="submit" value="Submit">
                </form>
                <?php
                /* AB = √(xb - xa)2 + (yb - ya)2 */
                $result = sqrt(pow($_POST['xb'] - $_POST['xa'], 2) + pow($_POST['yb'] - $_POST['ya'], 2));
                echo $result;
                ?>
    </div>
</body>

</html>