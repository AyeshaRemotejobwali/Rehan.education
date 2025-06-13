<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Facilitators</title>
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
        .facilitators {
            padding: 100px 50px;
            text-align: center;
        }
        .facilitators h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00d4ff;
        }
        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .facilitator-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .facilitator-card:hover {
            transform: translateY(-10px);
        }
        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .facilitator-card a {
            color: #00d4ff;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .facilitators h1 {
                font-size: 28px;
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
    <section class="facilitators">
        <h1>Meet Our Facilitators</h1>
        <div class="facilitator-grid">
            <div class="facilitator-card">
                <img src="https://source.unsplash.com/random/100x100?person" alt="Facilitator">
                <h3>John Doe</h3>
                <p>Expert in AI and Digital Skills</p>
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </div>
            <div class="facilitator-card">
                <img src="https://source.unsplash.com/random/100x100?person" alt="Facilitator">
                <h3>Jane Smith</h3>
                <p>Online Teaching Specialist</p>
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </div>
        </div>
    </section>
    <script>
        function redirectTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
