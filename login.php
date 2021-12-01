<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COGIP - Login</title>
    </head>
    <body>
        <header>
            <img src="" alt="logo COGIP">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="invoices.php">Invoices</a></li>
                    <li><a href="companies.php">Companies</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li>
                        <?php
                            session_start();
                            if (isset($_SESSION['id'])) {
                                ?>
                                ↓ Admin
                                <ul>
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="contactForm.php">New contact</a></li>
                                    <li><a href="invoicesForm.php">New invoices</a></li>
                                    <li><a href="companyForm.php">New company</a></li>
                                </ul>
                                <?php
                            } else {
                                echo "Log in";
                            }
                        ?>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <h1>Welcome to the COGIP</h1>
            <p>Welcome to the COGIP login area</p>
        </section>
        <section>
            <div>
                <form action="login_process.php" method="post">
                    <label for="login">Your login</label>
                    <input type="text" name="login">
                    <label for="password">Your password</label>
                    <input type="password" name="password">
                    <button type="submit">Log In</button>
                </form>
            </div>
        </section>
    </body>
</html>