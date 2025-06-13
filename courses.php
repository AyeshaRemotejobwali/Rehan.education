<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Courses</title>
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
        .courses {
            padding: 100px 50px;
            text-align: center;
        }
        .courses h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00d4ff;
        }
        .courses p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .course-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .course-card:hover {
            transform: translateY(-10px);
        }
        .course-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .course-card p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .course-card .btn {
            background: #00d4ff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .course-card .btn:hover {
            background: #0088cc;
        }
        @media (max-width: 768px) {
            .courses h1 {
                font-size: 28px;
            }
            .courses p {
                font-size: 16px;
            }
            .course-card h3 {
                font-size: 20px;
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
    <section class="courses">
        <h1>Our Courses</h1>
        <p>Explore our cutting-edge courses designed to empower teens with digital skills, AI proficiency, and online teaching expertise.</p>
        <div class="course-grid">
            <div class="course-card">
                <h3>Web Development Mastery</h3>
                <p>Learn HTML, CSS, JavaScript, and modern frameworks to build stunning websites.</p>
                <a href="#" class="btn" onclick="redirectTo('contact.php')">Enroll Now</a>
            </div>
            <div class="course-card">
                <h3>AI and Machine Learning Basics</h3>
                <p>Understand AI concepts and build intelligent applications using Python and AI tools.</p>
                <a href="#" class="btn" onclick="redirectTo('contact.php')">Enroll Now</a>
            </div>
            <div class="course-card">
                <h3>Online Teaching Excellence</h3>
                <p>Master the art of virtual instruction and engage students in digital classrooms.</p>
                <a href="#" class="btn" onclick="redirectTo('contact.php')">Enroll Now</a>
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
