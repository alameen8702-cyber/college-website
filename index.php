<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>UCOHSAT</title>
</head>
<body>
    <?php
    include_once('nav.php');
    ?>
    <section class="body">

    <div class="body-content">
        <h1>Welcome to Utopia College of Health</h1>


        <p>
            Empowering students with quality health education
            and preparing them for a successful career in healthcare.
        </p>

        <a href="admission.php" class="button" style="background-color: #064e3b; color: white;">Apply Now</a>
        <a href="about.php" class="button button2"style="background-color: white; color: #064e3b;">Learn More</a>
    </div>

</section>

<section class="about">

    <div class="about-content">

        <div class="about-text">
            <h2>About Our College</h2>

            <p>
                Our College of Health is committed to providing
                quality health education and training competent
                healthcare professionals.
            </p>

            <p>
                We provide students with the knowledge, skills,
                practical experience and professional values
                needed to succeed in the healthcare sector.
            </p>

            <a href="about.php" class="button" style="background-color: #064e3b; color: white;">Read More</a>
        </div>

        <div class="about-image">
            <img src="images/logo.jpg" alt="Utopia College of Health" width="500px">
        </div>

    </div>

</section>

<section class="programs">

    <div class="section-title">
        <h2>Our Programs</h2>
        <p>Explore the programs offered by our college.</p>
    </div>

    <div class="program-container">

        <div class="program-card">
            <h3>Community Health</h3>
            <p>
                Learn the knowledge and skills needed to promote
                health and prevent diseases in communities.
            </p>
            <a href="courses.php">Learn More →</a>
        </div>

        <div class="program-card">
            <h3>Environmental Health</h3>
            <p>
                Study environmental factors that affect human health
                and learn how to promote a safe and healthy environment.
            </p>
            <a href="courses.php">Learn More →</a>
        </div>

        <div class="program-card">
            <h3>Biomedical Engineering</h3>
            <p>
                Learn how engineering principles and technology
                are applied to healthcare, medical equipment,
                and healthcare systems.
            </p>
            <a href="courses.php">Learn More →</a>
        </div>

        <div class="program-card">
            <h3>Public Health</h3>
            <p>
                Learn how to promote health, prevent diseases,
                and improve the wellbeing of individuals and communities.
            </p>
            <a href="courses.php">Learn More →</a>
        </div>

    </div>

</section>

<section class="why-us">

    <div class="section-title">
        <h2>Why Choose Our College?</h2>
        <p>
            We are committed to providing quality health education
            and practical training.
        </p>
    </div>

    <div class="why-container">

        <div class="why-card">
            <!-- <div class="why-icon">🎓</div> -->
            <h3>Quality Education</h3>
            <p>
                We provide quality education designed to prepare
                students for successful careers in healthcare.
            </p>
        </div>

        <div class="why-card">
            <!-- <div class="why-icon">👨‍⚕️</div> -->
            <h3>Qualified Staff</h3>
            <p>
                Our students learn from experienced and dedicated
                teaching staff.
            </p>
        </div>

        <div class="why-card">
            <!-- <div class="why-icon">🏥</div> -->
            <h3>Practical Training</h3>
            <p>
                Students receive practical training to develop
                real-world healthcare skills.
            </p>
        </div>

        <div class="why-card">
            <!-- <div class="why-icon">🤝</div> -->
            <h3>Student Support</h3>
            <p>
                We support our students throughout their academic
                journey.
            </p>
        </div>

    </div>

</section>
<section class="news">

    <div class="section-title">
        <h2>Latest News & Announcements</h2>
        <p>Stay updated with the latest news from our college.</p>
    </div>

    <div class="news-container">

        <div class="news-card">


            <h3>Admission Form Now Available</h3>

            <p>
                Applications are now open for students who wish
                to study at our College of Health.
            </p>

            <a href="#">Read More →</a>

            <div class="news-date">
                20 August 2026
            </div>

        </div>


        <div class="news-card">


            <h3>New Academic Session</h3>

            <p>
                The college has announced important information
                concerning the new academic session.
            </p>

            <a href="#">Read More →</a>
            
            <div class="news-date">
                15 August 2026
            </div>

        </div>


        <div class="news-card">

            
            <h3>Student Orientation</h3>

            <p>
                New students are invited to attend the upcoming
                orientation programme.
            </p>

            <a href="#">Read More →</a>
            <div class="news-date">
                10 August 2026
            </div>


        </div>

    </div>

</section>

<section class="gallery">

    <div class="section-title">
        <h2>Our Gallery</h2>
        <p>Take a look at some moments from our college.</p>
    </div>

    <div class="gallery-container">

        <div class="gallery-item">
            <img src="gallery/1.PNG" alt="College">
        </div>

        <div class="gallery-item">
            <img src="gallery/2.PNG" alt="College">
        </div>

        <div class="gallery-item">
            <img src="gallery/3.PNG" alt="College">
        </div>

        <div class="gallery-item">
            <img src="gallery/4.PNG" alt="College">
        </div>

    </div>

</section>
<?php include_once 'footer.php'; ?>
</body>
</html>