<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #a1e5f6;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        label {
            font-size: 14px;
            color: #2c3e50;
        }

        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #3498db;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background: #2980b9;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            font-size: 15px;
            text-align: center;
        }

        .success {
            background: #d4efdf;
            color: #1e8449;
            font-weight: bold;
        }

        .error {
            background: #f9d6d5;
            color: #c0392b;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Palindrome Checker</h2>

        <form method="post" action="">
               <label>Enter a Word</label>
               <input type="text" name="word" placeholder="e.g. level" required>
               <button type="submit">Check Palindrome</button>
        </form>

        <div class="result">
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $word=$_POST['word'];

                    if(!empty($word)){
                        $strlower=strtolower($word);
                        $strrev=strrev($strlower);

                        if ($strlower == $strrev) {
                                echo "<span class='success'>$word is a Palindrome!</span>";
                        } else {
                                 echo "<span class='error'>$word is Not a Palindrome.</span>";
                        }

                    }
                }
            ?>
        </div>

    </div>

</body>
</html>