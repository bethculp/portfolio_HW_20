<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bc11ea228d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <title>Beth Culp</title>
</head>
<body class="home">
    <?php include('inc/header.php');?>
    <main>
        
        <section class="hero">
            <div class="container">
                <div class="image wow animate__animated animate__rotateInDownLeft animate__fadeIn">
                    <img class="" src="images/wiggles.png">
                </div>
                <div class="content animate__animated animate__fadeInRight">
                    <p>Hi, I'm Beth</p>
                    <h1>UX/UI Designer</h1>
                    <h2>with over 10 years of experience producing accessible, creative and ethical solutions</h2>
                    <div class="buttons">
                        <a href="/about" class="btn">About Me</a>
                        <!-- <a href="/resume" class="btn">Resume</a> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="skills">
            <div class="container">
                <h1>Areas of Expertise</h1>
                <div class="skill wow animate__animated animate__fadeInDown">
                    <div class="toggle">
                        <img src="images/icon-ux.png" alt="Sitemap icon">
                        <div class="heading">
                            <h2>UX Design</h2>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="toggle-content">I have many years of experience creating information architecture and user flows, from globally relevant philanthropic data landscapes, to the online contest registration process for the annual county fair. Whether a big or small project, I am very focused on the holistic experience of the entire application, and finding an answer to every “What if?” scenario while also working within product goals and requirements.</p>
                </div>
                <div class="skill wow animate__animated animate__fadeInDown">
                    <div class="toggle">
                        <img src="images/icon-ui.png" alt="Designer pen icon">
                        <div class="heading">
                            <h2 >UI Design</h2>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="toggle-content">Over my career as lead designer at a digital agency, as well as UX designer at a nonprofit that maintained multiple digital properties, I’ve become a specialist in creating brand identity,  and designing digital interfaces, including: websites for global fundraising causes, data visualization dashboards, multi-tier prospecting applications, and more.  From sketches, to wireframes, to design, I create delightful and beautiful digital experiences using Figma and the Adobe Creative Suite.</p>                
                </div>
                <div class="skill wow animate__animated animate__fadeInDown">
                    <div class="toggle">
                        <img src="images/icon-code.png" alt="Website coding icon">
                        <div class="heading">
                            <h2>Front-end Development</h2>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="toggle-content">To me, writing responsive HTML and CSS has always come hand-in-hand with creating designs. I enjoy the logical thinking of CSS, and think SCSS is just plain fun. I have extensive experience in Wordpress, including contributing to and maintaining a custom parent theme that supported more than 30 child websites. Comfortable with PHP and Javascript, I am able to jump into many different systems and environments seamlessly, with a focus on accessibility in all aspects of the process.</p>                
                </div>
                <!-- <a href="/about" class="btn" aria-label="Learn more about my skills">Learn More</a> -->
            </div>
        </section>
        <section class="work web">
            <div class="container">
                <h1>Website and Applications</h1>
                <article id="fdo">
                    <div class="image">
                        <img src="images/fdo-chart.png">
                    </div>
                    <div class="content">
                        <h1><a href="#">Foundation Directory</a></h1>
                        <p>Refreshing the user experience of large nonprofit prospecting application by applying organizational-wide branding and re-imagining the underperforming features of the application.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing, Project Management</p>
                    </div>
                </article>
                <article id="doi">
                    <div class="image">
                        <img src="images/doi.png">
                    </div>
                    <div class="content">
                        <h1><a href="#">U.S. Department of the Interior</a></h1>
                        <p>Assessment and testing of the current website, prototyping a redesigned homepage and navigation for better comprehension of the department as a whole.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article>
                <article id="native">
                    <div class="image">
                        <img src="images/native-communities.png">
                    </div>
                    <div class="content">
                        <h1><a href="#">Investing in Native Communities</a></h1>
                        <p>Designing and building responsive web portal showcasing history, resources, news, and philanthropic funding for Native causes, with branding reflecting authentic Native culture.</p>
                        <p class="tags">UX/UI Design, Interaction Design, Prototyping, Front-end development</p>
                    </div>
                </article>
                <article id="candid-learning">
                    <div class="image">
                        <img src="images/candid-learning.png">
                    </div>
                    <div class="content">
                        <h1><a href="#">Candid Learning</a></h1>
                        <p>Led front-end development on redesign of highly-trafficked nonprofit training and resources hub, hosted on custom Wordpress theme.</p>
                        <p class="tags">Interaction Design, Front-end development, Project Management</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="work mobile">
            <div class="container">
                <h1>Mobile Prototypes</h1>
                <article id="safetrips">
                    <div class="image">
                        <img src="images/safetrips.jpg">
                    </div>
                    <div class="content">
                        <h1><a href="#">SafeTrips</a></h1>
                        <p>App prototype providing data-driven safety ratings of travel services based on verified safety protocols and traveler experiences</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article>
                <article id="recycling">
                    <div class="image">
                        <img src="images/recycling.jpg">
                    </div>
                    <div class="content">
                        <h1><a href="#">Recycling Application</a></h1>
                        <p>Using camera and AI technology to categorize household items, users would be able to easily learn how to discard items in their location with the least negative impact to the environment.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php include('inc/footer.php');?>
</body>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/index.js"></script>
</html>
