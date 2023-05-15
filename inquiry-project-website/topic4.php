<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- import Bootstrap CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <!-- site-wide stylesheet -->
        <link rel = "stylesheet" type = "text/css" href = "styles/style.css">
        
        <!-- metadata -->
        <meta charset="utf-8" />
        <meta name="description"    content="Describes alternatives to cookies and sessions">
        <meta name="keywords"       content="Alternatives">
        <meta name="author"         content="Kasun Jayawardhana">
        <title>Alternatives to Cookies and Sessions</title>
    </head>

	<body id="topic4-body">
		<!-- sticky menu bar, with navigation links to other pages -->
		<?php include 'menu.inc'; ?>

		<!-- header contains school logo, and info relating to the page's creation -->
		<?php include 'header.inc'; ?>

		<h1>Alternatives For Cookies and Sessions</h1>
		<section class ="content-block">
			<!--Topic discussion-->
			<h2>
				What are Alternatives to Cookies and Sessions?
			</h2>
			<aside id="aside-alt">
				<h3>
					Why do we need alternatives for cookies in the first place?
				</h3>
					<p>
						The most common issue caused by cookies are the privacy concerns regarding personal information, which is collected to present the user with personalised advertisements.<br>
						Google Chrome has even stated that they will be ending the usage of cookies by the end of 2023.
					</p>
					
			</aside>
			
				<!--image of the privacy sandbox -->
				<figure>
					<img src="images/privacy_sandbox.png">
					<figcaption id="alt-caption">Privacy Sandbox</figcaption>
					<!--By privacysandbox.com, Fair use, https://en.wikipedia.org/w/index.php?curid=67710674-->
				</figure>
			
			<h4>
				There are many alternatives to cookies and sessions and listed below are only a few of them which are currently considered as viable replacements.
			</h4>
	   
			<ol id="alternatives">
				<li>
					Web Cache
				</li>
				<li>
					Fingerprinting 
				</li>
				<li>
					Birds from Privacy Sandbox
				</li>
				<li>
					Universal IDs
				</li>
			</ol>
				
		
			<section class="content-block">
				<!---Information from https://yieldbird.com/which-are-the-most-popular-3rd-party-cookie-alternatives/-->
				<h3 class="alternative-sub">
					Web Cache
				</h3>
				<p>
				   Web cache is storing the data of the user to be used again when the user reopens the page once more. 
				</p>
				<table class="alternative-table">
					<tr class="alternative-tr">
						<th class="alternative-th">
							Advantages
						</th>
						<th class="alternative-th">
							Disadvantages
						</th>
					</tr>
					<tr>
						<td class="alternative-td">
							<ul>
								<li>
									Quicker access and thus saving time and data.
								</li>
							</ul>
							
						</td>
						<td class="alternative-td">
							<ul>
								<li>
									Loading a webpage using webcache might cause issues by loading a page different from the one loaded from the web.
								</li>
							</ul>
						</td>
					</tr>

				</table>
			</section>
			<br>
			<section class="content-block">
				<h3 class="alternative-sub">
				<!---Information from https://yieldbird.com/which-are-the-most-popular-3rd-party-cookie-alternatives/-->
					Fingerprinting
				</h3>
				<p>
					Fingerprinting is the act of analysing user data including software and web browser information and using that analysis to track the user.
				</p>
					<table class="alternative-table">
						<tr class="alternative-tr">
							<th class="alternative-th">
								Advantages
							</th>
							<th class="alternative-th">
								Disadvantages
							</th>
						</tr>
						<tr>
							<td class="alternative-td">
								<ul>
									<li>
										Accurate user tracking leading to very precise information.
									</li>
								</ul>
								
							</td>
							<td class="alternative-td">
								<ul>
									<li>
										Massive privacy breach.
									</li>
									<li>
										Not as easy to use as cookies.
									</li>
								</ul>
							</td>
						</tr>

					</table>
				
			</section>
			<br>
			<section class="content-block">
				<h3 class="alternative-sub">
				<!---Information from https://blog.admixer.com/cookie-alternatives/-->
					Birds from Privacy Sandbox
				</h3>
				<p>
					After Google decided to end the usage of cookies, privacy sandbox was the alternaive offered to the public to replace them.<br>
					Even though this was offered as the solution if cookies truely were to disappear. The tests in Europe were postponed due to GDPR (General Data Protection Regulation) violation concerns and the initial impressions regarding this technology hasn't been promising. Most being concerned over the technology being too narrow for being the replacement of cookies.<br>
					However, the path the technology is currently on shows major improvements with more companies joining and providing their own ideas and innovations which has led to the current collection of "birds" such as SPARROW, TURTLEDOVE, DOVEKEY and the PARROT. Each being a tracker, but approched with a differnt integration carrying capabilities and reaches of their own.<br>
					That said, the technology is still very much in development and quite far away from being the one and only replacement to cookies.
				</p>
				
			</section>
			<br>
			<section class="content-block">
				<h3 class="alternative-sub">
				<!---Information from https://blog.admixer.com/cookie-alternatives/-->
					Universal IDs
				</h3>
				<p>
					Universal ID is a unique identifier created for the user to be used for sharing between publishers.
				</p>
				<table class="alternative-table">
					<tr class="alternative-tr">
						<th class="alternative-th">
							Advantages
						</th>
						<th class="alternative-th">
							Disadvantages
						</th>
					</tr>
					<tr>
						<td class="alternative-td">
							<ul>
								<li>
									Cross device tracking.
								</li>
								<li>
									Not needing third party software.
								</li>
								<li>
									Removes duplicate information due to the ID being unique.
								</li>
							</ul>
							
						</td>
						<td class="alternative-td">
							<ul>
								<li>
									Since the ID is created to serve as a unique identifier between multiple publications, issues regarding the cooperation between publishers could lead to issues especially since the technology is dealing with private user information.
								</li>
							</ul>
						</td>
					</tr>

				</table>
			</section>
		</section>
		
		<!-- footer with email contacts for every member -->
		<?php include 'footer.inc'; ?>
	</body>
</html>
