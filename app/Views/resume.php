<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kate Capadocia - Resume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
</head>
<body class="has-background-dark has-text-white-ter">
    <section class="section">
        <div class="container">
            <div class="columns">
                <!-- Sidebar -->
                <aside class="column is-one-quarter has-background-link-dark has-text-white p-5">
                    <figure class="image is-128x128 mx-auto mb-3">
                        <img class="is-rounded" src="assets/images/photo.jpg" alt="Profile">
                    </figure>
                    <h2 class="title is-4 has-text-white has-text-centered">Kate Capadocia</h2>
                    <p class="subtitle is-6 has-text-centered">Front-end Developer<br>UI/UX Designer</p>

                    <div class="mb-4">
                        <p><img src="assets/images/email.png"> katecapadocia@gmail.com</p>
                        <p><img src="assets/images/phone.png"> 09634636335</p>
                        <p><img src="assets/images/address.png"> San Jose, Antique, Philippines</p>
                    </div>

                    <div class="mb-4">
                        <strong>Languages</strong>
                        <ul>
                            <li>Kinaray-a</li>
                            <li>Filipino</li>
                            <li>English</li>
                            <li>Hiligaynon</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <strong>Skills</strong>
                        <div class="tags">
                            <span class="tag is-info">HTML</span>
                            <span class="tag is-info">CSS</span>
                            <span class="tag is-info">JS</span>
                            <span class="tag is-info">PHP</span>
                            <span class="tag is-info">Python</span>
                            <span class="tag is-info">C</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <strong>Tools & Tech</strong>
                        <ul>
                            <li>VS Code, Figma, Canva</li>
                            <li>MS Excel, Firebase, Flutter</li>
                            <li>GIT & GitHub</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <strong>Interests</strong>
                        <ul>
                            <li>Data Management</li>
                            <li>UI/UX Design</li>
                            <li>Reading & Writing</li>
                            <li>Cybersecurity</li>
                            <li>Time Management</li>
                            <li>Communication</li>
                            <li>Online Business</li>
                        </ul>
                    </div>

                    <div class="buttons is-centered">
                        <a href="assets/files/Resume_Capdocia.pdf" class="button is-primary is-fullwidth" target="_blank">
                            <img src="assets/images/download.png" class="mr-2">Download CV
                        </a>
                    </div>

                    <div class="mt-4 has-text-centered">
                        <a href="https://facebook/kate-capadocia"><img src="assets/images/facebook.png"></a>
                        <a href="https://instagram/kcateis"><img src="assets/images/instagram.png"></a>
                        <a href="https://github.com/detrnobia" target="_blank"><img src="assets/images/github.png"></a>
                        <a href="https://linkedin.com/in/kate-capadocia" target="_blank"><img src="assets/images/linkedin.png"></a>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="column is-three-quarters content p-5">
                    <!-- Hero Section -->
                    <section class="box has-background-primary-light mb-5">
                        <div class="columns is-vcentered">
                            <div class="column">
                                <h1 class="title is-3">Discover my Amazing<br>Art Space!</h1>
                                <p class="subtitle is-6 has-text-grey-dark">&lt;code&gt; I build Website and Android applications. &lt;/code&gt;</p>
                                <button class="button is-link mt-2">Explore Now</button>
                            </div>
                            <div class="column is-narrow">
                                <figure class="image is-128x128">
                                    <img src="assets/images/profile.png" alt="Profile">
                                </figure>
                            </div>
                        </div>
                    </section>

                    <!-- Education -->
                    <section class="box">
                        <h2 class="title is-4">Education</h2>
                        <div class="media mb-3">
                            <figure class="media-left">
                                <img src="assets/images/UPV.png" class="image is-48x48" alt="UPV">
                            </figure>
                            <div class="media-content">
                                <strong>University of the Philippines Visayas</strong><br>
                                BS in Computer Science | Sept. 2022 - Present
                            </div>
                        </div>
                        <div class="media">
                            <figure class="media-left">
                                <img src="assets/images/ANS.png" class="image is-48x48" alt="ANS">
                            </figure>
                            <div class="media-content">
                                <strong>Antique National School</strong><br>
                                STE Program (JHS, SHS with High Honors) | June 2016 - July 2022
                            </div>
                        </div>
                    </section>

                    <!-- Include Modular Sections -->
                    <?php include 'org_leadership.php'; ?>
                    <?php include 'projects.php'; ?>
                    <?php include 'work_awards.php'; ?>

                    <!-- Edit Button -->
                    <div class="has-text-right mt-5">
                        <button class="button is-warning" onclick="showEditForm()">Edit</button>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <script src="<?= base_url('js/script.js') ?>"></script>
</body>
</html>
