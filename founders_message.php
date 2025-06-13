<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Founder’s Message</title>
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
        .founders-message {
            padding: 100px 50px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        .founders-message h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00d4ff;
        }
        .founders-message img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .founders-message p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .founders-message .btn {
            background: #00d4ff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .founders-message .btn:hover {
            background: #0088cc;
        }
        @media (max-width: 768px) {
            .founders-message h1 {
                font-size: 28px;
            }
            .founders-message p {
                font-size: 16px;
            }
            .founders-message img {
                width: 100px;
                height: 100px;
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
    <section class="founders-message">
        <h1>Founder’s Message</h1>
        <img src="https://source.unsplash.com/random/150x150?person" alt="Founder">
        <p>Welcome to Rehan Education, where we are committed to empowering the next generation to make a difference. Our mission is to equip teens with the digital skills, AI proficiency, and online teaching expertise needed to impact 10 million lives and achieve financial independence.</p>
        <p>At Rehan Education, we believe in the power of education to transform lives. Our innovative curriculum is designed to foster creativity, critical thinking, and leadership in a connected world. Join us on this journey to unleash your potential and shape a brighter future.</p>
        <p>- [Founder’s Name]</p>
        <a href="#" class="btn" onclick="redirectTo('contact.php')">Get in Touch</a>
    </section>
    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
