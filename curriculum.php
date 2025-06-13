<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Curriculum</title>
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
        .curriculum {
            padding: 100px 50px;
            text-align: center;
        }
        .curriculum h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00d4ff;
        }
        .curriculum p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .curriculum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .curriculum-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .curriculum-card:hover {
            transform: translateY(-10px);
        }
        @media (max-width: 768px) {
            .curriculum h1 {
                font-size: 28px;
            }
            .curriculum p {
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
    <section class="curriculum">
        <h1>Our Innovative Curriculum</h1>
        <p>Our curriculum integrates digital skills, AI tools, and online teaching methodologies to empower students for a connected world.</p>
        <div class="curriculum-grid">
            <div class="curriculum-card">
                <h3>Digital Skills</h3>
                <p>Learn coding, web development, and digital marketing to thrive in the digital age.</p>
            </div>
            <div class="curriculum-card">
                <h3>AI Proficiency</h3>
                <p>Master AI tools and technologies to create innovative solutions.</p>
            </div>
            <div class="curriculum-card">
                <h3>Online Teaching</h3>
                <p>Develop skills to teach and inspire others in virtual environments.</p>
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
