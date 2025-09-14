<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Number Checker</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--SIR NAG GAMIT KOG BOOTSTRAP OG CSS PARA DALA PRACTICE SA WEB SYSTEM HEHE-->

    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: default;
        }

        .main {
            background-color: #FAF5EF;
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 25px;
            box-shadow: 1px 1px 3px 1px black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 25px;
            transition: 0.3s;
        }

        .main:hover {
            box-shadow: 1px 1px 6px 1px black;
            transform: scale(1.005);
        }

        .main div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .main div h1 {
            margin: 0;
            font-size: 34px;
            letter-spacing: 2px;
        }

        .main div p {
            margin: 0;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .main form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .main form input {
            padding: 6px;
            border-radius: 12px;
            width: 250px;
            border: none;
        }

        .main form button {
            padding: 6px;
            border-radius: 12px;
            border: 1px solid black;
            background-color: #F0EAD6;
            transition: 0.3s;
        }

        .main form button:hover {
            background-color: #e6ddc0;
            transform: scale(1.01);
        }

        .main .even .odd {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container main">
        <div>
            <h1>ODD OR EVEN</h1>
            <p>NUMBER CHECKER</p>
        </div>
        <form method="POST">
            <input placeholder="Enter number" type="number" name="number" id="number">
            <button type="submit">Check Now</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = (int) $_POST['number'];

            if ($num % 2 == 0) {
                echo '<p class="even">The number <span style="font-weight: bold;">' . $num . '</span> is <span style="color:blue; font-weight: bold;">Even</span></p>';
            }
            else {
                echo '<p class="odd">The number <span style="font-weight: bold;">' . $num . '</span> is <span style="color:brown; font-weight: bold;">Odd</span></p>';
            }
        }
        ?>
    </div>
</body>
</html>