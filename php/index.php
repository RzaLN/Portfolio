<?php
        include '../php/koneksi.php';
        $query = "SELECT * FROM user";
        $query_sql = mysqli_query($koneksi, $query);
        $tampil = mysqli_fetch_array($query_sql);
    ?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <script src="/js/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&family=Bebas+Neue&family=Cinzel:wght@400;500;600;700;800;900&family=Mohave:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,800&family=Signika+Negative:wght@700&display=swap" rel="stylesheet"><meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed Spline dengan Navbar</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <!-- navbar -->
    <section class="home" id="home"></section>
    <nav class="navbar">
        <img src="../image/<?= $tampil['logo'] ?>" alt="">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#achievement">Achievement</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Iframe Spline -->
    <iframe src='https://my.spline.design/nexbotrobotcharacterconceptcopycopy-e3bb09e4b64e545cf0b70c1655d14f00/' frameborder='0' width='100%' height='100%'>
    </iframe>

    <!-- about -->
    <section class="about" id="about">
    <?php
        include '../php/koneksi.php';
        $query_profile = "SELECT * FROM profile";
        $query_sql = mysqli_query($koneksi, $query_profile);
        $tampil_profile = mysqli_fetch_array($query_sql);
    ?> 

        <div class="container">
            <div class="container-image">
                   <img src="../image/<?= $tampil_profile['image_profile'] ?>" alt="" class="profile" width="350" height="350">
            </div>
            <div class="container-description">
                <h1>About <span class="hijau">Me</span></h1>
                <p><?= $tampil_profile['bio'] ?></p>
                <div class="experience-about">
                    <?php
                        include '../php/koneksi.php';
                        $query_experience = "SELECT * FROM experience";
                        $query_sql = mysqli_query($koneksi, $query_experience);
                        $tampil_experience = mysqli_fetch_all($query_sql , MYSQLI_ASSOC);
                    ?> 
                    <!-- cards -->
                     <div class="cards">
                        <!-- card1 -->
                    <?php foreach($tampil_experience as $tampil_experiences): ?>     
                    <div class="card">
                        <div class="years">
                            <p><?= $tampil_experiences['working_years'] ?></p>
                        </div>
                        <div class="content-experience">
                            <h3><?= $tampil_experiences['place_name'] ?><span><?= $tampil_experiences['job_name']  ?></span></h3>
                           <p><?= $tampil_experiences['job_description'] ?></p>
                        </div>
                    </div>
                        <?php endforeach; ?>
                  </div>
                </div>
            </div>
        </div>
    </section>

   <!-- portfolio -->
    <section class="portfolio" id="portfolio">
                <?php
                  include '../php/koneksi.php';
                  $query_portfolio = "SELECT * FROM portfolio";
                  $query_sql = mysqli_query($koneksi, $query_portfolio);
                  $tampil_experience = mysqli_fetch_all($query_sql , MYSQLI_ASSOC);
                ?> 
        <h1>PORTF<span>OLI</span>O.</h1>
        <div class="container">
            <!-- cards -->
             <!-- card1 -->
              <?php foreach($tampil_experience as $tampil_experiences): ?>
              <div class="card">
                <img src="../image/<?= $tampil_experiences['image_portfolio'] ?>" alt="" width="250" height="150">
                <h2><?= $tampil_experiences['name_portfolio']?></h2>
                <p><?= $tampil_experiences['portfolio_year'] ?></p>
              </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Achievement  -->

    <section class="achievement" id="achievement">
               <?php
                  include '../php/koneksi.php';
                  $query_achievement = "SELECT * FROM achievement";
                  $query_sql = mysqli_query($koneksi, $query_achievement);
                  $tampil_achievement = mysqli_fetch_all($query_sql , MYSQLI_ASSOC);
                ?> 

        <h1>Achievem<span>ent</span></h1>
        <div class="container">
            <?php foreach($tampil_achievement as $tampil_achievements): ?>
            <!-- cards -->
              <div class="card">
                <h2><?= $tampil_achievements['title_achievement'] ?></h2>
                <p><?= $tampil_achievements['description_achievement'] ?></p>
              </div>
            <?php endforeach; ?>
        </div>
        </section>
        <!-- contact -->
         <section class="contact" id="contact">
                 <?php
                    include '../php/koneksi.php';
                    $query_contact = "SELECT * FROM contact";
                    $query_sql = mysqli_query($koneksi, $query_contact);
                    $tampil_contact = mysqli_fetch_array($query_sql);
                ?> 
            <div class="container">
                <div class="social">
                    <h1>Contact <span>Me</span></h1>
                    <!-- sosmed -->
                     <div class="sosmed" style="display: flex;  margin-bottom: 2rem;">
                        <img src="../image/wa.png" alt="" width="25" height="25" style="margin-right: 0.5rem;">
                        <p><?= $tampil_contact['whatsapp_number'] ?></p>
                     </div>
                     
                     <div class="sosmed" style="display: flex;  margin-bottom: 2rem;">
                        <img src="../image/email.png" alt="" width="25" height="25" style="margin-right: 0.5rem;">
                        <p><?= $tampil_contact['email'] ?></p>
                     </div>
                     
                     <div class="sosmed" style="display: flex;  margin-bottom: 2rem;">
                        <img src="../image/ig.png" alt="" width="25" height="25" style="margin-right: 0.5rem;">
                        <p><?= $tampil_contact['instagram'] ?></p>
                     </div>

                </div>
                <!-- form -->
                 <div class="form">
                    <h3>Send Message</h3>
                    <form id="contactForm" action="../php/proses.php" method="post">
                        <input name="message" class="message" type="text" placeholder="Your message" style="margin-bottom: 1rem;">
                        <input name="email" class="email" type="email" placeholder="Your Email" style="margin-bottom: 1rem;">
                        <button name="submit" type="submit">Send</button>
                    </form>
                    </div>
                    </div>
         </section>
         <!-- footer -->
         <footer>
             <p>©Copyright by <?= $tampil_profile['name'] ?> | 2024</p>
         </footer>

         <script>
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                var message = document.querySelector('.message').value;
                var email = document.querySelector('.email').value;

                if (message && email) {
                    alert('Message succesfully sent');
                } else if (!message && email) {
                    alert('Please enter a message');
                    event.preventDefault();
                } else if (message && !email) {
                    alert('Please enter an email');
                    event.preventDefault();
                } else {
                    alert('Please enter a message and an email');
                    event.preventDefault();
                }
            });
        </script>
    </body>
    </html>