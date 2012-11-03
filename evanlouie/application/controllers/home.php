<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$personal = array();
		$social_media = array();
		$work_history = array();
		$education = array();
		$skills = array();
		$awards = array();
		$settings = array();

		$personal['first_name']= 'Evan';
		$personal['last_name'] = 'Louie';
		$personal['phone_number'] = '(778) 987-8489';
		$personal['email_address'] = 'evan@evanlouie.com';
		$social_media[] = array('Facebook', 'http://facebook.com/evan.louie');
		$social_media[] = array('Twitter', 'http://twitter.com/evanlouie');
		$social_media[] = array('LinkedIn', 'http://www.linkedin.com/in/evanlouie');
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
		$education[] = array('University of British Columbia', 'B.Sc Major Computer Science');
		$education[] = array('St. Michaels University School', 'H.S Diploma');
		$skills[] = array('Web Applications Development', 'PHP, RoR, node.js, Python (django), MySQL, J2EE, JS, HTML5/CSS3, CodeIgniter, CakePHP, jQuery/UI/Mobile, Wordpress, Joomla, Stuts, GWT');
		$skills[] = array('Mobile Applications Development', 'Android, jQuery Mobile, HTML5/CSS3 Adaptive Layouts');
		$skills[] = array('Programming', 'Java/J2EE, C/++/#');
		$skills[] = array('Project Management' , 'Agile/Scrum, Requirements gathering, Legal Compliance, 3rd Party Software Integration, Technical Writing');
		$awards[] = array('UBC Chancellor\'s Scholorship', 'Awarded to students who achieve a cummulative highschool average of 92% or higher.');	
		$settings['social_media'] = true;
		$settings['education'] = true;
		$settings['skills'] = true;
		$settings['awards'] = true;
		$settings['printable'] = true;
		$settings['style'] = "light";
		$data = array();
		$data['personal'] = $personal;
		$data['social_media'] = $social_media;
		$data['work_history'] = $work_history;
		$data['education'] = $education;
		$data['skills'] = $skills;
		$data['awards'] = $awards;
		$data['settings'] = $settings;


		$this->load->view('home_view', $data);
	}
}
