<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <header>
        <h1>Sign Up</h1>
    </header>

    <main class="container">
        <div class="formContainer">
            <form action="">

                <div class="inputGroup">
                    <label for="username">Username</label>
                    <input type="email" id="username required">
                </div>

                <div class="inputGroup">
                    <label for="password">Password</label>
                    <input type="password" id="password" required>
                </div>

                <button>Sign Up</button>

            </form>

            <a href="./login.php">Already have an account? Sign In</a>
        </div>
    </main>
    
</body>
</html>