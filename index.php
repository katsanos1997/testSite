<html>
	<head>
		<link href="app.css" rel="stylesheet" />

		<meta name="author" content="Dimitris Katsanos">
		<meta name="description"  content="A general guide on the use of meta tags in html pages">
		<meta name="keywords" content="web,design,html,css,html5,development">

		<!--<meta http-equiv="refresh" content="60"/>-->


		<!--<meta name="viewport" content="width=device-width, initial-scale=1.00, minimum-scale=1.00, maximum-scale=2.00">-->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.00, minimum-scale=1.00, maximum-scale=1.00, user-scalable=no">-->

	</head>
	<body>
		<section id="mobMenuSection">
			<!--menuMob1-->
			<script>
				function openNav() {
					document.getElementById("mySidenav").style.width = "250px";
					document.getElementById("mainMob").style.marginLeft = "250px";
					document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
				}

				function closeNav() {
					document.getElementById("mySidenav").style.width = "0";
					document.getElementById("mainMob").style.marginLeft= "0";
					document.body.style.backgroundColor = "white";
				}
			</script>


			<!--menuMob2-->
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<p></p>
				<p></p>

				
				<div class="lang" >
					<link rel="stylesheet" type="text/css" href="lan/css/lib/control/iconselect.css" >
					
					<script type="text/javascript" src="lan/lib/control/iconselect.js"></script>
					<script type="text/javascript" src="lan/lib/iscroll.js"></script>
					<script>
					var iconSelect;
					window.onload = function(){
					    iconSelect = new IconSelect("my-icon-select", 
					        {'selectedIconWidth':23,
					        'selectedIconHeight':23,
					        'selectedBoxPadding':1,
					        'iconsWidth':48,
					        'iconsHeight':48,
					        'boxIconSpace':1,
					        'vectoralIconNumber':2,
					        'horizontalIconNumber':1});

					    var icons = [];
					    icons.push({'iconFilePath':'lan/images/gr.svg', 'iconValue':'1'});
					    icons.push({'iconFilePath':'lan/images/1.png', 'iconValue':'2'});
					    iconSelect.refresh(icons);
					};
					</script>
					<div id="my-icon-select"></div>
				</div>
				

				<p></p>
				
				<nav id="loginSignIn">
					<element id="MenuEl1">
						<img src="./images/man.svg" alt="man">
					</element>
					<element id="MenuEl2">
						<a href="#" class="login">Εγγραφή </a>
					</element>
					<element id="MenuEl3">
						<text>&nbsp;/</text>
					</element>
					<element id="MenuEl4">
						<a href="#" class="signin">Σύνδεση </a>
					</element>
				</nav>
				<svg width="300" height="1" viewBox="0 0 300 1" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="300" height="1" fill="#EEEEEE"/>
				</svg>

				<a href="#">Η ΟΜΟΣΠΟΝΔΙΑ</a>
				<a href="#">ΑΡΚΑΔΩΝ ΕΡΓΑ</a>
				<a href="#">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a>
				<a href="#">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
				<a href="#">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
				<a href="#">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a>
				<a href="#">ΕΠΙΚΟΙΝΩΝΙΑ</a>

			</div>

			<!--menuMob3-->
			<div id="menuMob">
				<span style="color: white;" onclick="openNav()">&#9776; </span>
			</div>
			
		</section>
		<!--==============================================================================-->
		<header>
			<div class="container">
				
				<div id="topbar">
					<element id="weather">
						<h2>weather</h2>
					</element>

					<element id="clock24">
						<h2>clock</h2>
					</element>
					<element id="language">
						<link rel="stylesheet" type="text/css" href="lan/css/lib/control/iconselect.css" >
						<script type="text/javascript" src="lan/lib/control/iconselect.js"></script>
						<script type="text/javascript" src="lan/lib/iscroll.js"></script>
						<script>
						var iconSelect;
						window.onload = function(){
						    iconSelect = new IconSelect("my-icon-select", 
						        {'selectedIconWidth':23,
						        'selectedIconHeight':23,
						        'selectedBoxPadding':1,
						        'iconsWidth':48,
						        'iconsHeight':48,
						        'boxIconSpace':1,
						        'vectoralIconNumber':2,
						        'horizontalIconNumber':1});

						    var icons = [];
						    icons.push({'iconFilePath':'lan/images/gr.svg', 'iconValue':'1'});
						    icons.push({'iconFilePath':'lan/images/1.png', 'iconValue':'2'});
						    iconSelect.refresh(icons);
						};
						</script>
						<div id="my-icon-select"></div>
					</element>

				</div>
				

				<nav id="main">
					<a href="/" id="logo">
						<img src="./images/logo.svg" alt="Logo">
					</a>
					
					<div id="textUnderBar">
						<img src="./images/PAF.png">
					</div>


					<ul id="main-menu">
						<!--<li><a href="#">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>-->

						<div class="dropdown">
							<li><a href="#">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
							<div class="dropdown-content">
							  	<li><a href="#">Ιστορία</a></li>
							    <li><a href="#">Διοικητικό Συμβούλιο</a></li>
							    <li><a href="#">Πρόεδρος - Βιογραφικό Σημείωμα</a></li>
							    <li><a href="#">Μήνυμα Προέδρου</a></li>
							    <li><a href="#">Districts</a></li>
							    <li><a href="#">Διατελεσαντες Προέδροι</a></li>
							    <li><a href="#">Αποστολή - Αξίες</a></li>
							    <li><a href="#">Πορεία - Εξέλιξη</a></li>
							    <li><a href="#">Ο Έλληνας πρέσβης στην Ουάσιγκτον</a></li>
							    <li><a href="#">Ο Πρέσβης ΗΠΑ στην Αθήνα</a></li>
							    <li><a href="#">Ο Οικουμενικός Πατριάρχης</a></li>
							    <li><a href="#">Ο Αρχιεπίσκοπος Αμερικής</a></li>
							</div>
						</div>


						<li><a href="#">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
						<li><a href="#">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
						<li><a href="#">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a></li>
						<li><a href="#">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
						<li><a href="#">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>

						<li><a href="#"><img src="./images/mail.svg" alt="emailButton" ></a></li>

					</ul>
				</nav>

				<div id="featured">

					<img src="./images/meandros.svg">
					<h3>ΚΑΛΩΣ ΗΛΘΑΤΕ</h3>
					<h2>Η αποστολή μας</h2>
					<p>Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια πανεθνική μη κερδοσκοπικού αδελφό ελληνικό-αμερικανική οργάνωση τα μέλη της οποίας κατεβαίνουν από την περιοχή της Αρκαδίας στην Πελοπόννησο, στη νότια Ελλάδα …</p>
					<a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a>
				</div>
				
			</div>
		</header>
		
		<section id="section2">
			<div class="container">

				<div id="mainSection2">
					<div id="colored_icon">
						<img src="./images/colored.png">
					</div>

					<div id="colored_icon_text">
						<img src="./images/WithGreekRoots.png">
						<h1 >Μετριόμαστε, γιατί μετράμε!</h1>
					</div>
					
					<nav id="section2Text">
					
						<element id="s2_El1">
							<h2>Γενική απογραφή  των αποδήμων Αρκάδων στις ΗΠΑ και επαναπατρισθέντων από τις ΗΠΑ</h2>
							<p>Η Παναρκαδική Ομοσπονδία Αμερικής πραγματοποιεί απογραφή των Αρκάδων που διαμένουν και εργάζονται στις ΗΠΑ, (ανεξαρτήτως υπηκότητας). </p>
							<h3>Το αποτύπωμα της Αρκαδικής γης μας συνδέει!</h3>
							<p>Όση χιλιομετρική απόσταση και αν μας χωρίζει, όσες γενιές και να έχουμε...ψηλώσει πέρα απο τις ρίζες μας, η Αρκαδία, μας ενώνει!</p>
						</element>

						<element id="s2_El2">
							<h2>Απογραφόμαστε...</h2>
							<dl>
								<dt>> Για να γνωρίσουμε ο ένας τον άλλο.</dt>
								<dt>> Για να αντλήσουμε δύναμη απο  τις ρίζες μας και την καταγωγή μας.</dt>
								<dt>> Για να είμαστε χρήσιμοι και να  παρεμβαίνουμε δημιουργικά για τις ΗΠΑ την Ελλάδα και την Αρκαδία.<dt>
								<dt>> Για να υλοποιήσουμε τα σχέδια και τα οραματά μας.<dt>
								<dt>> Για να είμαστε ισχυροί.<dt>
							</dl>
						</element>

					</nav>
					<div id="teletienarksis">
						<h2 >ΤΕΛΕΤΗ ΕΝΑΡΞΗΣ</h2>
						<h1 >Παρασκευή 20 Απριλίου 2108</h1>
						<h3 >ΝΕΑ ΥΟΡΚΗ</h3>
					</div>

				</div>
			</div>
		</section>

		<section id="section3">
			<div id="MoveDown">
				<div class="container">

					<div id="featured6">
						<img src="./images/meandros.svg">
						<h3>ΕΡΓΑ & ΔΡΑΣΤΗΡΙΟΤΗΤΕΣ</h3>
					</div>

					<nav id="horizontalSections">
						<element id="element1">
							<img src="./images/e1.jpg">
							<h2>Γενικού Παναρκαδικό Νοσοκομείο Τρίπολης.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						
							<a href="#" id="more1">
								<img src="./images/grammi.svg" alt="Link">
								<p>ΠΕΡΙΣΣΟΤΕΡΑ</p>
							</a>
						</element>
						<element id="element2">
							<img src="./images/e2.jpg">
							<h2>Ο  παραδοσιακός οικισμός του Λεωνιδίου</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>

							<a href="#" id="more1">
								<img src="./images/grammi.svg" alt="Link">
								<p>ΠΕΡΙΣΣΟΤΕΡΑ</p>
							</a>
						</element>
						<element id="element3">
							<img src="./images/e3.jpg">
							<h2>Κυνουρία, Εκεί που δεσπόζει ο Πάρνωνας</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>

							<a href="#" id="more1">
								<img src="./images/grammi.svg" alt="Link">
								<p>ΠΕΡΙΣΣΟΤΕΡΑ</p>
							</a>
						</element>
						<element id="element4">
							<img src="./images/e4.jpg">
							<h2>Οι ελληνικές πόλεις με τα καλύτερα πάρκα!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>

							<a href="#" id="more1">
								<img src="./images/grammi.svg" alt="Link">
								<p>ΠΕΡΙΣΣΟΤΕΡΑ</p>
							</a>
						</element>

						<div id="featured7">
							<a href="#">ΠΕΡΙΣΣΟΤΕΡΑ</a>
						</div>
						
					</nav>
				</div>
			</div>
		</section>

		<section id="section4">
			<div class="container2">

				<div id="featured8">
					<h3>ΕΠΙΚΟΙΝΩΝΙΑ</h3> 
					<div id="bar1">
						<svg width="740" height="1" viewBox="0 0 740 1" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="740" height="1" fill="#979797"/>
						</svg>
					</div>
				</div>


				<form action="action_page.php">

					<label for="fname">Ονοματεπώνυμο</label>
					<input type="text" id="fname" name="firstname"> <!--placeholder="Your name..">-->

					<label for="lname">Τηλέφωνο</label>
					<input type="text" id="lname" name="lastname"> <!--placeholder="Your last name..">-->

					<label for="lname">Email</label>
					<input type="text" id="lname" name="email"> <!-- placeholder="Your last name..">-->

					<!--
					<label for="country">Country</label>
					<select id="country" name="country">
						<option value="australia">Australia</option>
						<option value="canada">Canada</option>
						<option value="usa">USA</option>
					</select>
					-->

					<label for="subject">Μήνυμα</label>
					<textarea id="subject" name="subject"  style="height:200px"></textarea><!--placeholder="Write something.."-->
					
					<div id="bar2">
						<svg width="740" height="1" viewBox="0 0 740 1" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="740" height="1" fill="#979797"/>
						</svg>
					</div>
					
					<p></p>
					<p></p>
					<input type="submit"  value="ΑΠΟΣΤΟΛΗ                  >">


				</form>
		
			</div>
		</section>

		<footer>
			<div class="container">	
				<div id="myFooter">
					<a href="/" id="logoFooter">
						<img src="./images/logo.svg" alt="Logo">
					</a>

					<div id="textUnderLogoFooter">
						<img src="./images/PAF.png">
					</div>

					<nav id="horizontalBuuton">
						<element id="el1">
							<a href="#"><img src="./images/fb.svg" alt="fbButton"></a>
						</element>

						<element id="el2">
							<a href="#"><img src="./images/twitter.svg" alt="twitterButton"></a>
						</element>

						<element id="el3">
							<a href="#"><img src="./images/linkedin.svg" alt="linkedinButton"></a>
						</element>

						<element id="el4">
							<a href="#"><img src="./images/instagram.svg" alt="instaButton"></a>
						</element>

						<element id="el5">
							<a href="#"><img src="./images/youtube.svg" alt="youtubeButton"></a>
						</element>
					</nav>

					<nav id="mainFooter">
						<ul id="main-menu-footer">
							<li><a href="#">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
							<li><a href="#">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
							<li><a href="#">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
							<li><a href="#">ΝΕΑ-ΕΝΗΜΕΡΩΣΗ</a></li>
							<li><a href="#">ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
							<li><a href="#">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a></li>
							<li><a href="#">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
						</ul>
					</nav>

					<div id="copyrights">
						<h3>©2018 Pan Arcadian Federation of America</h3>
					</div>

					<div id="goToTop">
						<a href="#"><img src="./images/totop.svg" alt="go to top button"></a>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>
