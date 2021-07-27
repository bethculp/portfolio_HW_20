<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Beth Culp - UX/UI Designer">
    <meta property="og:url" content="https://bethculp.com">
    <meta property="og:image" content="https://bethculp.com/images/og-image.jpg">
    <meta property="og:site_name" content="Beth Culp - UX/UI Designer">
    <meta property="og:description" content="Portfolio of web design and development, mobile app prototypes">

    <link href="styles/reset.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bc11ea228d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <title>Beth Culp</title>
</head>
<body class="home">
    <?php include('inc/header.php');?>
    <main>
        
        <section class="hero home">
            <div class="container">
                <div class="image wow animate__animated animate__rotateInDownLeft animate__fadeIn ">
                    <img class="" src="images/wiggles.png">
                </div>
                <div class="content animate__animated animate__fadeInRight">
                    <p class="callout">Hi, I'm Beth</p>
                    <h1>UX/UI Product Designer</h1>
                    <h2>with over 10 years of experience producing accessible, creative and ethical solutions</h2>
                    <div class="buttons">
                        <a href="<?php echo $homelink; ?>/about" class="btn" aria-label="Learn more about Beth Culp">Learn more</a>
                        <!-- <a href="/resume" class="btn">Resume</a> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="skills blue">
            <div class="container">
                <h1>Areas of Expertise</h1>
                <div class="skill wow animate__animated animate__fadeInDown">
                    
                        <img src="images/icon-ux.png" alt="Sitemap icon">
                        <div class="heading">
                            <h2>UX Design</h2>
                            
                        </div>
                    
                    <!-- <p class="toggle-content">I have many years of experience creating information architecture and user flows, from globally relevant philanthropic data landscapes, to the online contest registration process for the annual county fair. Whether a big or small project, I am very focused on the holistic experience of the entire application, and finding an answer to every “What if?” scenario while also working within product goals and requirements.</p> -->
                </div>
                <div class="skill wow animate__animated animate__fadeInDown">
                        <img src="images/icon-ui.png" alt="Designer pen icon">
                        <div class="heading">
                            <h2 >UI Design</h2>
                        </div>
                    <!-- <p class="toggle-content">Over my career as lead designer at a digital agency, as well as UX designer at a nonprofit that maintained multiple digital properties, I’ve become a specialist in creating brand identity,  and designing digital interfaces, including: websites for global fundraising causes, data visualization dashboards, multi-tier prospecting applications, and more.  From sketches, to wireframes, to design, I create delightful and beautiful digital experiences using Figma and the Adobe Creative Suite.</p>                 -->
                </div>
                <div class="skill wow animate__animated animate__fadeInDown">
                        <img src="images/icon-code.png" alt="Website coding icon">
                        <div class="heading">
                            <h2>Front-end Development</h2>
                        </div>
                    <!-- <p class="toggle-content">To me, writing responsive HTML and CSS has always come hand-in-hand with creating designs. I enjoy the logical thinking of CSS, and think SCSS is just plain fun. I have extensive experience in Wordpress, including contributing to and maintaining a custom parent theme that supported more than 30 child websites. Comfortable with PHP and Javascript, I am able to jump into many different systems and environments seamlessly, with a focus on accessibility in all aspects of the process.</p>                 -->
                </div>
                <!-- <a href="/about" class="btn" aria-label="Learn more about my skills">Learn More</a> -->
            </div>
        </section>
        <section class="work web" id="work">
            <div class="container">
                <h1>My Work</h1>
                <article id="native">
                    <div class="image">
                        <a href="<?php echo $homelink; ?>/native-communities/">
                            <img src="images/mockups/nap-mockup.jpg">
                        </a>
                    </div>
                    <div class="content"> 
                        <p class="type">Website Design and Development</p>
                        <h1><a href="<?php echo $homelink; ?>/native-communities/">Investing in Native Communities</a></h1>
                        <p>Designing and building responsive web portal showcasing history, resources, news, and philanthropic funding for Native causes, with branding reflecting authentic Native culture.</p>
                        <p class="tags">UX/UI Design, Interaction Design, Prototyping, Front-end development</p>
                    </div>
                </article>
                <article id="safetrips">
                    <div class="image">
                        <a href="<?php echo $homelink; ?>/safetrips/">
                            <img src="images/mockups/safetrips-mockup.jpg">
                        </a>
                    </div>
                    <div class="content">
                        <p class="type">Mobile Prototype</p>
                        <h1><a href="<?php echo $homelink; ?>/safetrips/">SafeTrips</a></h1>
                        <p>App prototype providing data-driven safety ratings of travel services based on verified safety protocols and traveler experiences</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article>
                
                
                <article id="candid">
                    <div class="image">
                        <a href="<?php echo $homelink; ?>/candid/">
                            <img src="images/mockups/candid-mockup2.jpg">
                        </a>
                    </div>
                    <div class="content">
                        <p class="type">Design System</p>
                        <h1><a href="<?php echo $homelink; ?>/candid/">Candid Design System</a></h1>
                        <p>Led creation of Adobe XD design system for new organization branding, for integration with Material UI React framework and other web properties.</p>
                        <p class="tags">UI Design, Information Architecture, Front-end development, Project Management</p>
                    </div>
                </article>
                <!--<article id="refresh-culture">
                    <div class="image">
                        <img src="images/mockups/refresh-culture-mockup.jpg">
                    </div>
                    <div class="content">
                        <p class="type">Mobile Prototype</p>
                        <h1><a href="<?php echo $homelink; ?>/safetrips/">Refresh Culture</a></h1>
                        <p>Team-created mobile app serving alternative social options to millenials who choose not to drink alcohol</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article> -->
                
                <!-- <article id="fdo">
                    <div class="image">
                        <img src="images/fdo-chart.png">
                    </div>
                    <div class="content">
                        <p class="type">Web Application Redesign</p>
                        <h1><a href="#">Foundation Directory</a></h1>
                        <p>Refreshing the user experience of large nonprofit prospecting application by applying organizational-wide branding and re-imagining the underperforming features of the application.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing, Project Management</p>
                    </div>
                </article> -->
                <!-- <article id="doi">
                    <div class="image">
                        <img src="images/doi.png">
                    </div>
                    <div class="content">
                        <h1><a href="#">U.S. Department of the Interior</a></h1>
                        <p>Assessment and testing of the current website, prototyping a redesigned homepage and navigation for better comprehension of the department as a whole.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article> -->
                
                <!-- <article id="candid-learning">
                    <div class="image">
                        <img src="images/candid-learning.png">
                    </div>
                    <div class="content">
                        <p class="type">Design System and Rebranding</p>
                        <h1><a href="#">Candid Learning</a></h1>
                        <p>Led front-end development on redesign of highly-trafficked nonprofit training and resources hub, hosted on custom Wordpress theme.</p>
                        <p class="tags">Interaction Design, Front-end development, Project Management</p>
                    </div>
                </article> -->

                <!-- <article id="recycling">
                    <div class="image">
                        <img src="images/recycling.jpg">
                    </div>
                    <div class="content">
                        <h1><a href="#">Recycling Application</a></h1>
                        <p>Using camera and AI technology to categorize household items, users would be able to easily learn how to discard items in their location with the least negative impact to the environment.</p>
                        <p class="tags">UX Research, UX/UI Design, Prototyping, Usability Testing</p>
                    </div>
                </article> -->
                
            
            <aside>
                <div class="container text-center">
                    <h2>More coming soon!</h2>
                    <h3>P.S. The site you are looking at right now? Also designed and coded by me!</h3>
                </div>
            </aside>
            </div>
        </section>
        
        
    </main>
    <?php include('inc/footer.php');?>
</body>
<!--SCRIPTS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/index.js"></script>
</html>
