<!doctype html>
<html>
<head>
  <?php
	include '../Header.php';
	?>
  <title>Virtual Resume</title>
</head>

<body>
	<div id="w" itemscope itemtype="http://schema.org/Person">
		<header class="clearfix">
			<div id="info">
				<h1><span itemprop="name">Felipe Comboni</span></h1>
				<h3><span itemprop="jobTitle"> IT Professional, Web Developer/Designer &amp; Photographer</span></h3>
				<small itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				  <span itemprop="addressLocality"></span>0
				  <span itemprop="addressRegion"> Houston Texas 77082 </span>,
				  <span itemprop="addressCountry">United States </span>
				</small>
				<small><span itemprop="email">jfcomboni@gmail.com - + 1 (281) 771-4253</span></small>
				<small><a href="https://www.linkedin.com/in/felipe-comboni-2b988a3b/"target="_blank">Connect with me on LinkedIn</a></small>
			</div>

			<div id="photo">
				<img src="images/jfcomboni.jpg" alt="Felipe Comboni resume photo avatar" itemprop="image" />
			</div>
		</header>

		<section id="profile">
			<h2>About</h2>
			<p itemprop="description">Referred as a highly motivated, enthusiastic, and self-starter bilingual computer science professional with extensive knowledge of various programming languages and computer applications.
				Offering strong analytical skills as well as professional experience with proven problem-solving skills through concrete hands-on troubleshooting customer-based inquiries and post processing data to achieve a specified objective</p>
			</section>
		<section id="skills"class="clearfix" itemscope itemtype="http://schema.org/ItemList">
			<h2 itemprop="name">Skills</h2>
			<div class = "row">
				<div class ="column">
					<h4>Data Processing</h4>
					<ul>
						<li itemprop="itemListElement"> Web Development (HTML5, JavaScript, CSS3, Bootstrap, SQL, PHP, JSON, jQuery, Wordpress)</li>
						<li itemprop="itemListElement">Scripting (PowerShell)</li>
						<li itemprop="itemListElement">Virtualization( VMWare, Hyper-V)</li>
						<li itemprop="itemListElement">Programming language (Python, Java)</li>
						<li itemprop="itemListElement">Cloud Computing (Azure, AWS)</li>
					</ul>
				</div>
				<div class = "column">
					<ul>
					<br><br>
						<li itemprop="itemListElement">Adobe Software (Photoshop, Illustrator, InDesig Dreamweaver)</li>
						<li itemprop="itemListElement">UX/UI Design (Prototyping, responsiveness, animation)</li>
						<li itemprop="itemListElement">Photography (Starburst Effect, Portraits)</li>
						<li itemprop="itemListElement">Windows XP, Vista, Windows 7, 8, 8.1, and 10, OS Mac</li>
						<li itemprop="itemListElement">Microsoft Office package (Word, Excel, Access, Office Office365, Power BI, SharePoint)</li>
					</ul>
				</div>
			</div>
		</section>
		<section id="experience">
			<h2>Work Experience</h2>
			<h4>Community Brands, Austin, TX - April 2016 - Present</h4>
				<h3>User Systems Administrator</h3>
			<ul>
				<li>Troubleshooting and supporting DNS, DHCP, IP addressing, VPN and other networking technologies.</li>
				<li>Administer Windows user???s accounts in Active Directory using PowerShell scripting and Office365 Admin portal.<li>
				<li>Expertise on SharePoint, Power BI and managing Office365.</li>
				<li>Increased team productivity by automating tasks using PowerShell.</li>
				<li>Provides advanced technical leadership on integrating complex existing or new information system technologies.</li>
				<li>Provides Tier 3 user level technical support by troubleshooting technical issues with networking and systems and carrying issues through to resolution.</li>
				<li>Deploy patch configurations, updates, and system configurations through Desktop Central and SCCM</li>
				<li>Build maintain and service VMWare and Hyper V Servers.</li>
				<li>Support and Installation for local and network printer over TCP/IP.</li>
				<li>Extensive involvement in Designing Azure Resource Manager Template and in designing custom build steps</li>
				<li>Set up and assisted in the configuration of end-user PC desktop hardware, software and peripherals.</li>
				</ul>
			<h4>Apple.inc (Mindlance), Austin, TX ~ October 2014 - October 2015</h4>
				<h3>Sr. Maps POI Analyst - Latin America</h3>
				<ul>
					<li>Edited point of interests (POIs) in Apple Maps according to Latin American customers??? reported problems as a Spanish Specialist.</li>
					<li>Ran evaluation tools, ensured data integrity, participated in multiple project teams to help validate data information.</li>
					<li>Focused on business listings, data integrity and vendor validation mainly in Latin American countries.</li>
					<li>Mentored and trained new hires.</li>
				</ul>
			<h4>Taylor university, Upland, IN ~ 2010 ??? 2014</h4>
				<h3>Desktop Support Analyst - Tier I</h3>
				<ul>
					<li>Identified, diagnosed and resolved problems related to end user software <br> And network problems in a one-on-one as well as call center environment.
					<li>Performed preventive maintenance and troubleshoot copiers, printers and fax equipment.</li>
					<li>Assisted end-users with setting up and configuring PC desktop hardware, software.</li>
					<li>Set up networks and computer to campus domain.</li>
					<li>Troubleshot, and managed Office 365.</li>
				</ul>
			<h4>Greater Europe Mission, Madrid, ESP - May 2013 - September 2013</h4>
				<h3>Web Developer Intern</h3>
				<ul>
					<li>Developed back-end website</li>
					<li>Delivered Web development and logo expertise</li>
					<li>worked with web debugging tools (Firebug or Chrome Developer Console)</li>
					<li>Develop front-end web Website using HTML/CSS and JavaScript</li>
					<li>Working on front-end widgets</li>
					<li>Ran SQL queries on databases</li>
					<li>Configured custom Wordpress theme for company's site</li>
					<li>Redesign and develop existing web sites</li>
					<li>Development with cross-browser/cross-device compatibility in a graded browser support environment</li>
				</ul>
		</section>
		<section id="education">
			<h2>Education</h2>
			<h4>Taylor University - May 2014</h4>
				<h3> Bachelor's Degree, Computer Science - New Media</h3>

			<ul>
				<li>Senior Project: Developed a game contest sever for the computer science department.
					As part of a team of 7 my Contribution consisted in developing the website???s search functionality for the website using Ruby on Rails.</li>
			</ul>
			<h4>Wheaton Academy - June 2010</h4>
				<h3>High School Diploma</h3>
			<ul>
				<li>Presidential Award for Academic Achievement</li>
			</ul>
			<p><h2>Languages</h2><p/>
			<p>- English (Bilingual Proficiency) <br> - Spanish (Native)</p>
		</section>

	</div>
</body>
</html>
