<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="styles/home.css">
        <?php 
            require_once('includes/config.php');
            include 'includes/header.php';
        ?>
	</head>

	<body>
        <?php
            global $current_page;
            $current_page = "About";
            include "includes/nav.php"
        ?>
        <div class="container">
            <div class="col-xs-12">
                <p>Schmoozers by the hour or short term hire for the project – Contact us to discuss your needs for: a social butterfly at your next event, some who smartly connects people to people, a tester for your new product or new product introduction, trade show, an attendee at an important social or business event, dinners, lunch meetings, special event. Someone to call in to finish a project, plan an event, make phone calls, increase sales and develop new business, organize and follow-up on pr outreach, attend a trade show and more ...</p>
                
                <p>Our company was formed to be the missing link. By responding with flexible hours on projects we can be there for you when you need us. </p>
                <h2>When do I need a schmoozer or two?</h2>
                <ul>
                    <li>Do you have an important business event that requires entertaining?</li>
                    <li>An important dinner party and you want to make sure there is a comfortable flow of lively conversation?</li>
                    <li>A special event that needs planning, tweaking, music, a mood or theme?</li>
                    <li>Launching a new product and need assistance at the demo?</li>
                    <li>Need someone to interact with media, customers, potential customers, investors, and potential investors?</li>
                    <li>Have a goal to reach and short on staff?</li>
                    <li>Setting up a press conference? Need help?</li>
                    <li>Coming down to the wire on a special event? Need a few extra hands?</li>
                    <li>Attending a trade show and short on staff?</li>
                    <li>Holding an important business dinner and need some lively conversation to break the ice?</li>
                    <li>Networking at an event and need some more feet on the ground?</li>
                    <li>Are you a brilliant techie and need someone to translate your ideas into concepts for dummies?</li>
                </ul>
                <div class="profile center-align col-sm-3">
                    <img class="image" src="images/RonniRabinPR.png" alt="profile-picture">
                </div>
                <div class="col-sm-9">
                    <h2>About the Founder</h2><p>Ronni S. Rabin founded Queen of Schmooze to help others. She has extensive experience in sales, marketing, and client development/corporate relations. She excels at opening doors with top-decision makers, developing and building relationships, outreach, creating partnerships, increasing sales, refining brands.</p>
                    <p>She has exceptional interpersonal, communication and networking skills. She is organized, self-disciplined and professional in demeanor. Ronni has the ability to work individually and as part of a team. She is highly self-motivated, energetic, creative, and accountable.</p>
                    <p>Ronni has had multiple professional experiences to support her abilities. She started her career in NYC in the advertising and publishing world working for leading consumer magazines including Vanity Fair, Harper’s and the media rep firm / ad agency, Joseph Jacobs Organization. In New Haven, CT she worked for Second Wind Media and the Yale Alumni Magazine. She has worked in publishing, real estate, business start up centers and for non-profit organizations. Some of her past jobs include Marketing Director, Public Relations Manager, and Account Supervisor.</p>
                </div> <!-- end of col-sm-9 -->
            </div> <!-- end of col-xs-12 -->
            <div>
                <h2>Testimonials</h2>
                <ul>
                    <li>
                        <h3>Neil-</h3>
                        <p>"Ronni has the capacity and the demonstrable background to grow any entity whether for profit or nor for profit. But she has one characteristic, which is frankly much harder to find.  She has that intangible quality of making the organization she associates with shine. She presents well. In doing so, the entity emerges as elevated.</p>
                        <p>I would encourage your most careful consideration of Ronni’s established results oriented track record and perhaps of equal importance her steadfast presentation of integrity both personally and professionally."</p>
                    </li>
                    <li>
                        <h3>Evelyn-</h3>
                        <p>"Ronni is experienced, sensitive to marketing trends and she is incredibly diligent. Her creative approach, coupled with her skill and intelligence, makes her a perfect hire if you are hoping to increase engagement and braoden your messaging.</p>
                        <p>Whether it's social media, traditional advertising, media relations, event planning or recruiting, Ronni is undaunted. She is highly respected by her peers, largely due to her extraordinary networking skills, which is an asset in our profession, and I recommend her to your institution without reservation."</p>
                    </li>
                    <li>
                        <h3>Simon-</h3>
                        <p>"Ronni was an effective manager and a patient mentor during my college internship at the Yale Alumni Magazine. During my first week Ronni invited me to chat outside the office setting so that I could speak freely about my career interests and so that she could understand how my internship would support them.</p>
                        <p>Once we got started she trusted me with real responsibility. At the end of Q4 for example the magazine needed to calculate year over year ad revenue growth. Rather than make me crunch numbers Ronni gave me ownership of the entire process. This empowered me to streamline the company’s operations and make life easier for future interns. She kept just enough involvement in the project for me not to feel in over my head.</p>
                        <p>For example she caught on whenever I was struggling with an Excel function and stepped in to help. Ronni clearly enjoys passing on her knowledge. She would frequently brief me on the status of the accounts she was working on, especially when one of them had taken an interesting turn in which she saw a teaching opportunity. Working with her was fun and instructive; I would gladly do it again."</p>
                    </li>
                    <li>
                        <h3>Mitchell-</h3>
                        <p>"Ronni at all times was professional and effective and maintained an excellent reputation both within our organization and with her contacts and accounts. Hardworking, persistent, intelligent and creative are all adjectives we can easily apply to Ronni, beyond that she always operated with the utmost integrity. I would freely recommend Ronni for inclusion in any organization with the confidence she would be an asset in virtually any role."</p>
                    </li>
                </ul>
            </div> <!-- end of testimonials div -->
            <div class="resume body-margin">
                <h2>Resume</h2>
                <embed class="col-xs-12 resume" src="Resume.pdf">
            </div>
        </div> <!--end of container div-->
        <footer>
        </footer>
	</body>
</html>