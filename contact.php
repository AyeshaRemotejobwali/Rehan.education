<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
        }
        header {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #00d4ff;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .contact {
            padding: 100px 50px;
            text-align: center;
        }
        .contact h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00d4ff;
        }
        .contact-details {
            margin-bottom: 40px;
        }
        .contact-details p {
            font-size: 18px;
        }
        .contact-details a {
            color: #00d4ff;
            text-decoration: none;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #fff;
            color: #333;
        }
        .contact-form button {
            background: #00d4ff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact-form button:hover {
            background: #0088cc;
        }
        @media (max-width: 768px) {
            .contact h1 {
                font-size: 28px;
            }
            .contact-details p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan Education</div>
            <ul>
                <li><a href="#" onclick="redirectTo('index.php')">Home</a></li>
                <li><a href="#" onclick="redirectTo('curriculum.php')">Curriculum</a></li>
                <li><a href="#" onclick="redirectTo('courses.php')">Courses</a></li>
                <li><a href="#" onclick="redirectTo('facilitators.php')">Facilitators</a></li>
                <li><a href="#" onclick="redirectTo('founders-message.php')">Founder’s Message</a></li>
                <li><a href="#" onclick="redirectTo('contact.php')">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <section class="contact">
        <h1>Contact Us</h1>
        <div class="contact-details">
            <p>Address: 123 Education Lane, London, UK</p>
            <p>Phone: <a href="tel:+447418359852">+44 7418 359852</a></p>
            <p>Email: <a href="mailto:info@rehan.education">info@rehan.education</a></p>
        </div>
        <div class="contact-form">
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db.php';
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $sql = "INSERT INTO inquiries (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
        mysqli_close($conn);
    }
    ?>
    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
