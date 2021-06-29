<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&family=Roboto:wght@300;500&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/bc11ea228d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <title>SafeTrips Mobile Prototype | Beth Culp</title>
</head>
<body>
    <?php include('../inc/header.php');?>
    <main>
        <section class="hero case-study">
            <div class="container-lg">
                <div class="row d-flex align-items-center my-3 my-md-4 my-lg-5">
                    <div class="col-md-4">
                        <div class="image wow animate__animated animate__fadeInLeft">
                            <img class="" src="images/mobile-airline-info.png">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content animate__animated animate__fadeInRight">
                            <h1>SafeTrips TEST!</h1>
                            <h2>A mobile app providing travelers with peer-reviewed safety information in an uncertain world.</h2>
                            <ul class="details">
                                <li>
                                    <h3>My role</h3>
                                    UX Research, UX Design, UI Design, Prototyping, User Testing
                                </li>
                                <li>
                                    <h3>Team</h3>
                                    Beth Culp & Jess Davis (UX Researcher)
                                </li> 
                                <li>
                                    <h3>Timeline</h3>
                                    4 weeks, February - March 2021
                                </li>  
                                <li>
                                    <h3>Tools</h3>
                                    Miro, Figma, Adobe XD, Flowmapp, Zoom, Otter, Google
                                </li>   
                            </ul>
            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blue intro py-3 py-md-4 py-lg-5">
            <div class="container-lg">
                <div class="row d-flex align-items-center py-3 py-md-4">
                    
                    <div class="col-sm-7">
                        <h2>About this Project</h2>

                        <h3>The Problem</h3>
                        <p>How might we give concerned travelers valid, current COVID-19 related safety information for transportation services so that we can minimize their fears of traveling during and after the pandemic?</p>
                
                        <h3>The Solution</h3>
                        <p>The SafeTrips mobile application empowers users to feel comfortable in their transportation choices by providing data-driven safety ratings of different travel services, based on both the service's safety protocols and real traveler experiences.</p>

                        <h3>What I Learned</h3>
                        <p>I dove head first into the user research for this project, which was an exciting challenge. I wanted to create something that spoke to our unique time in history, when the entire world was living in new circumstances due to the pandemic. This made for interesting interviews and conversations about how to approach the research with my partner. I also was new to Figma, and this project deepened my knowledge of how the functionality overlaps and differs from XD.</p>

                    </div>
                    <div class="col-sm-5">
                            <img src="images/cover-photo.jpg">
                            More images here
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <ul class="case-study-nav">
                            <li>
                                <a href="#research">
                                    <img src="../images/icon-ui.png" alt="Designer pen icon">
                                    <span>Research</span>
                                </a>
                            </li>
                            <li>
                                <a href="#definition">
                                    <img src="../images/icon-ui.png" alt="Designer pen icon">
                                    <span>Ideation</span>
                                </a>
                            </li>
                            <li>
                                <a href="#prototyping">
                                    <img src="../images/icon-ui.png" alt="Designer pen icon">
                                    <span>Prototyping</span>
                                </a>
                            </li>
                            <li>
                                <a href="#testing">
                                    <img src="../images/icon-ui.png" alt="Designer pen icon">
                                    <span>User Testing</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="research" class="process">
            <div class="blue process-title">
                <div class="container">
                    <h1>Research</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>How have the Covid-19 pandemic restrictions affected user's travel views and habits?</h2>
                        <h3>Through video chat, we interviewed 5 millennials who were accustomed to traveling before the pandemic.</h3>
                        <h3>Interview objectives:</h3>
                        <ul class="list">
                            <li>What were the user’s typical travel habits before the global pandemic, including how they plan their trip?</li>
                            <li>What actions do they consider safe or risky during the pandemic?</li>
                            <li>What makes traveling worth it to them?</li>
                            <li>Have they traveled during the pandemic, and what have their considerations been in doing so?</li>
                            <li>What do they expect to be different/stay the same when the global pandemic ends?</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="images/SafeTrips-affinity-diagram.jpg" alt="Affinity diagram of user interview notes grouped into categories">
                        <figcaption>My research partner and I created an affinity diagram of common trends we had found from the interviews, and individually moved forward in the Ideation process from there.</figcaption>
                    </div>
                </div>
                <div class="quotes">
                        <div class="quote blue-light ">
                            <i class="fas fa-plane"></i>
                            <p>"Right now, it seems like every airline has its own process, airports have their own process."</p>
                        </div>
                        <div class="quote blue-light ">
                            <i class="fas fa-head-side-mask"></i>
                            <p>"It was imperative that I go on vacation. I just wore two masks and prayed for the best."</p>
                        </div>
                        <div class="quote blue-light ">
                            <i class="fas fa-car-side"></i>
                            <p>"I intentionally rented a car rather than going some other way, for safety reasons."</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6 key-findings">
                        <h2>Key Findings</h2>
                        <ul class="list">
                            <li>Users are still traveling during the pandemic, but in different ways depending on individual comfort levels.</li>
                            <li>Users are uncertain of what safety procedures are in place for different services.</li>
                            <li>Users are accustomed to reading reviews and trusting experiences of others when making travel decisions</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="images/sophie-user-persona.png" alt="User persona of Sophie">
                        <figcaption>User persona for Sophie, a safety-conscious 31-year old woman who desperately wants to plan a plane trip to visit her family on the West Coast.</figcaption>
                    </div>
                </div>
            </div>
        </section>

        <section id="ideation" class="process">
            <div class="blue process-title">
                <div class="container">
                    <h1>Ideation</h1>
                </div>
            </div>
            <div class="container">
                <div class="row"> 
                    <div class="col-md-6">
                        <img src="images/SafeTrips-feature-prioritization.jpg" alt="Feature prioritization matrix of ideas from brainstorm">
                        <figcaption>Feature prioritiation matrix of ideas generated from brainstorming on the problem statement. The three features with the highest impact and mid-complexity are circled.</figcaption>
                    </div>
                    <div class="col-md-6">
                        <h2>How might we help alleviate travel fears during the pandemic?</h2>
                        <p>An “I like, I wish, What if” brainstorm led me to generate a lot of features to address the problem statement. From there, I mapped out these ideas in a Feature Prioritization Matrix to find which features would be the most impactful, with the least amount of complexity. This would make an ideal Minimum Viable Product, with opportunities to expand into higher complexity items later.</p>
                        <h3>Features the app would contain for MVP:</h3>
                        <ul class="list">
                            <li><strong>Customer safety reviews of specific travel services</strong></li>
                            <li><strong>Safety rankings of different travel services</strong></li>
                            <li><strong>Official safety protocols of travel services</strong></li>
                        </ul>
                        <p>Research had shown that users often looked at reviews during the traveling process. This indicated that the testimonials of others were an invaluable resource, and would add trust to the application.</p>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-12">
                        <h2>User Journey Map</h2>
                        <img src="images/Sophie-user-journey.jpg" alt="Journey map describing Sophie deciding to take the trip and using SafeTrips to book a flight and car service she sees is rated high for safety.">
                        <figcaption>Journey map depicting Sophie deciding to book her trip despite her travel hesitations. She discovers SafeTrips and uses the ratings to book a flight and a car service she feels are safe.</figcaption>
                    </div>
                </div>
            </div>
        </section>

        <section id="prototyping" class="process">
            <div class="blue process-title">
                <div class="container">
                    <h1>Prototyping</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>How will the application interface work?</h2>
                        <p>Before starting the app design, I created and iterated on a user flow. This helped me work out the key features to build out and test using the prototype, and then add in more features later.</p>
                        <h3>User flow contains:</h3>
                        <ul class="list">
                            <li>Onboarding to the application using email, social media, or skipping registration</li>
                            <li>Search by trip details to see what services are available, or search for a specific service/company directly</li>
                            <li>Options for different types of travel, sorted by safety rating</li>
                            <li>Individual service page containing reviews, safety stats, and booking</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="images/SafeTrips-user-flow.png" alt="User flow of registration and searching for a flight">
                        <figcaption>User flow containing app onboarding and travel service search process</figcaption>
                    </div>
                </div>
                <div class="row blue-light proto-images padding-lg"> 
                    <div class="col-md-12">
                        <h2>Sketches</h2>
                        <div class="images">
                            <img src="images/sketches/safetrips-13.png" alt="">
                            <img src="images/sketches/safetrips-14.png" alt="">
                            <img src="images/sketches/safetrips-15.png" alt="">
                            <img src="images/sketches/safetrips-16.png" alt="">
                            <img src="images/sketches/safetrips-17.png" alt="">
                            <img src="images/sketches/safetrips-18.png" alt="">
                        </div>
                        <figcaption>Sketches of the SafeTrips mobile app, based on the user flow of the user entering trip details and picking the safest-rated airline.</figcaption>
                    </div>
                </div>
                <div class="row blue-light padding-lg proto-images"> 
                    <div class="col-md-12">
                        <h2>Mid-fidelity Prototype</h2>
                        <div class="images">
                            <img src="images/mid-fidelity/v1/safetrips-14.png" alt="">
                            <img src="images/mid-fidelity/v1/safetrips-14.png" alt="">
                            <img src="images/mid-fidelity/v1/safetrips-15.png" alt="">
                            <img src="images/mid-fidelity/v1/safetrips-16.png" alt="">
                            <img src="images/mid-fidelity/v1/safetrips-17.png" alt="">
                            <img src="images/mid-fidelity/v1/safetrips-18.png" alt="">

                        </div>
                        <figcaption>Mid-fidelity mockups of the SafeTrips mobile app, created in Figma, based off of the initial sketches.</figcaption>
                    </div>
                </div>
            </div>
        </section>

        <section id="testing" class="process">
            <div class="blue process-title">
                <div class="container">
                    <h1>User Testing</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>What needs to be adjusted in the prototype?</h2>
                        <p>I conducted a group Guerrilla usability testing session over zoom with 4 participants, as well as in-person testing with 2 other participants, using the clickable Figma prototype on a laptop.</p>
                        <p>From there, I organized the issues into a priority matrix, accounting for both the user priorities and the effort of the change.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/SafeTrips-usability-testing.jpg" alt="Sticky notes showing usability testing issues">
                        <figcaption>The usability testing notes arranged by testing tasks. The darker colors represent multiple users having the same outcome, while the lighter colors are less users (also shown by numbers in parantheses)</figcaption>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Iterations from Testing</h2>
                    </div>
                </div>
                <div class="row blue-light iteration padding-lg d-flex justify-content-center align-items-center"> 
                    <div class="col-md-6">
                        <h2>Individual travel service page</h2>
                        <h3>Feedback:</h3>
                        <ul class="list">
                            <li>Individual airline page is confusing, users unsure how to find flights</li>
                            <li>Light blue accent color is hard to see</li>
                            <li>Users unsure what the checklist means</li>
                        </ul>

                        <h3>Modifications:</h3>
                        <ul class="list">
                            <li>Converted tab menu to accordion for better visual clarity</li>
                            <li>Changed accent color to orange for better contrast</li>
                            <li>Added explanation for safety statistics and converted from checklist to percentage</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="images">
                            <img src="images/mid-fidelity/iteration1_1.png" alt="">
                            <img src="images/mid-fidelity/iteration1_2.png" alt="">
                        </div>
                        <figcaption>The usability testing notes arranged by testing tasks. The darker colors represent multiple users having the same outcome, while the lighter colors are less users (also shown by numbers in parantheses)</figcaption>
                    </div>
                </div>
                <div class="row blue-light iteration padding-lg d-flex justify-content-center align-items-center"> 
                    <div class="col-md-6">
                        <div class="images">
                            <img src="images/mid-fidelity/iteration2_1.png" alt="">
                            <img src="images/mid-fidelity/iteration2_2.png" alt="">
                        </div>
                        <figcaption>The usability testing notes arranged by testing tasks. The darker colors represent multiple users having the same outcome, while the lighter colors are less users (also shown by numbers in parantheses)</figcaption>
                    </div>
                    <div class="col-md-6">
                        <h2>Onboarding tips</h2>
                        <h3>Feedback:</h3>
                        <ul class="list">
                            <li>Users unsure where they are in the application</li>
                            <li>Copy says enter your destination but there’s no visible field to enter it in</li>
                            <li>Users unsure what the arrow is and if it is interactive</li>
                        </ul>

                        <h3>Modifications:</h3>
                        <ul class="list">
                            <li>Added dark overlay behind onboarding message to indicate this is a closable message</li>
                            <li>Updated copy to reduce confusion</li>
                            <li>Removed arrow and replaced with highlighted state on clickable menu</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <?php include('../inc/footer.php');?>

    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="../js/index.js"></script>
</body>
</html>
