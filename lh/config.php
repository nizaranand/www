<?php
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Evan';
$personal['last_name'] = 'Louie';
$personal['phone_number'] = '(778) 987-8489';
$personal['email_address'] = 'evan@evanlouie.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Facebook', 'http://facebook.com/evan.louie');
$social_media[] = array('Twitter', 'http://twitter.com/evanlouie');
$social_media[] = array('LinkedIn', 'http://www.linkedin.com/in/evanlouie');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2012-present',
						'Web Applications Developer',
						'Evantful Design',
						'Freelance web developer, specializing in quick deployment of simple and complex systems using PHP and RoR.');
$work_history[] = array('2011-2012',
						'Web Applications & Services Developer',
						'SAP',
						'Web and systems developer of in-house software used for internal security and verification of vulnerabilities in third-party software');
$work_history[] = array('2006-2011',
						'Web Applicaions & Database Administrator',
						'Oxford Foods LTD.',
						'Developer and administrator of database systems and GUI to keep track of inventory stock, price and price fluctuations of carried items.');

// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('University of British Columbia', 'B.Sc Major Computer Science');
$education[] = array('St. Michaels University School', 'H.S Diploma');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Web Applications Development', 'PHP, RoR, node.js, Python (django), MySQL, J2EE, JS, HTML5/CSS3, CodeIgniter, CakePHP, jQuery/UI/Mobile, Wordpress, Joomla, Stuts, GWT');
$skills[] = array('Mobile Applications Development', 'Android, jQuery Mobile, HTML5/CSS3 Adaptive Layouts');
$skills[] = array('Programming', 'Java/J2EE, C/++/#');
$skills[] = array('Project Management' , 'Agile/Scrum, Requirements gathering, Legal Compliance, 3rd Party Software Integration, Technical Writing');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('UBC Chancellor\'s Scholorship', 'Awarded to students who achieve a cummulative highschool average of 92% or higher.');	

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "light";
?>