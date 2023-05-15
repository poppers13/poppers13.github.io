<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- import Bootstrap CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <!-- site-wide stylesheet -->
        <link href="styles/style.css" rel="stylesheet">
        
        <!-- metadata -->
        <meta charset="utf-8" />
        <meta name="description"    content="Demonstrates the function of cookies and sessions">
        <meta name="keywords"       content="Cookies, Sessions, Function, Education, Swinburne, Home, Menu">
        <meta name="author"         content="Jesh Kumar">
        <title>Functions of Cookies & Sessions</title>
    </head>
        <body>
            <!-- sticky menu bar, with navigation links to other pages -->
            <?php include 'menu.inc'; ?>
    
            <!-- header contains school logo, and info relating to the page's creation -->
            <?php include 'header.inc'; ?>

            <!-- intro to the page -->
            <section>
                <h1>Functions of Cookies & Sessions</h1>
            </section>
            
			<div class="content-block">
				<!-- how do cookies and sessions work -->
				<section id="function">
					<h2>How do Cookies & Sessions Work?</h2>
					
					<!-- figure containing example of cookies on websites -->  
					<figure class="figure1">
						<img class="figure1" src="images/cookie-accept.png" alt="Example image of cookies on a webpage">
						<figcaption class="figure1">This is an example of how cookies can appear on a page.</figcaption>
					</figure>

					<!-- introduction to how cookies and sessions work -->
					<p id="function-p">
						Cookies and sessions are useful when surfing the web, but how exactly do they work? 
						Firstly, we need to start with protcols. <br/><br/>

						To transfer data over the Internet we make use of protocols. In particular HTTPS (hyper-text transfer protocol secure), which by default is a <em>stateless</em> protocol.
						Cookies and sessions are what make HTTPS a <em>stateful</em> protocol. But what does this mean? <br/>

						Cookies are used for keeping data streamline and matching up with the session that's placed on a server.
						Websites will ask to accept cookies in order to follow data privacy protection law standards. If you choose to deny 
						them they won't be used. <br/>

						However, once you accept a cookie, it will gain access to information such as webiste name, browser ID, browsing 
						habits, time spent on a webiste and more. <br/>
					</p>
				</section>

				<div id="flexbox1">
					<!-- process of cookies -->
					<section id="process">
						<h3>Process from Browser to Server</h3>
						<p id="cookies-process">They follow a specific order as respresented by the list below:</p>
						<!-- putting this area into a section of its own for further styling with CSS flexbox -->
						<div id="process-flexbox">
							<ol>
								<li>User will send a HTTP request for a website.</li>
								<li>Server responds to their request and sends a cookie with it.</li>
								<li>The cookie is now stored on the front-end.</li>
								<li>Users now send HTTP requests through the browser alongside the cookie.</li>
								<li>The server is now able to recognise and personalise responses.</li>
							</ol>
							
							<!-- figure for process of cookies -->
							<figure class="figure2">
								<img class="figure2" src="images/cookies-process.png" alt="Visual of cookie process">
								<figcaption class="figure2">This is a visual representation of the cookie and server interaction.</figcaption>
							</figure>
						</div>
					</section>
		
					<!-- main uses of cookies -->
					<section id="main-use">
						<h3>The Main Uses of Cookies:</h3>
						<p>There are 3 main things that they're used for and they are authentication (session management), personalisation and tracking.</p>
						<table id="table-uses">
							<!-- row for authentication -->
							<tr>
								<td>
									<img class="authentication" src="images/security.png" alt="image of blue padlock">
								</td>
		
								<th>Authentication:</th>
								
								<td class="td-text">
									This is used as a form of identification for the user.
									Since the cookies from other websites are independent of each other, session management with cookies allows for them to be linked.
								</td>
							</tr>
		
							<!-- row for personalisation -->
							<tr>
								<td>
									<img class="personalisation" src="images/personalisation.png" alt="logo for personalisation">
								</td>
		
								<th>Personalisation:</th>
		
								<td class="td-text">
									By having access to different cookies from different websites, sites are able to target
									specific advertisements towards users which they might enjoy. This is similar to tracking with cookies.
								</td>
							</tr>
		
							<!-- row for tracking -->
							<tr>
								<td>
									<img class="tracking" src="images/tracking.png" alt="image of red pointer on map">
								</td>
		
								<th>Tracking:</th>
							   
								<td class="td-text">No, this isn't location tracking, but rather cookies can be used to track items that users have
									viewed before in their shopping carts. This allows for similar goods to be curated, which may appeal to them specifically.
								</td>
							</tr>
						</table>
					</section>
				</div>
				

				<!-- where are cookies & sessions used & stored -->
				<section id="where-used-stored">
					<h2>When are Cookies & Sessions Used & Stored?</h2>
					
					<p>Cookies and sessions are used all the time when we are accessing the Internet.
						
						Where cookies are stored client-side and downloaded onto the HDD of a user's computer and handled by the browser, 
						most sessions are found on web servers, and only a handful being stored on the client side.
						They are only able to store a maximum of 4KB of data. 
					</p>

					<!-- aside section for cookie id -->
					<aside>
						<p>The ID is usually made up of a string of characters much like a cookie! <br>
						<p>For example: <span id="cookie-id">A9A3BECE0563982D</span></p>
					</aside>

					<p>
						If sessions are to be stored client side, it means the session information will be able to load faster as it won't have to verify against 
						sessions on the server. <br/>
						This is often the case when storage requirements are low, however if more storage space is needed,
						then the sessions should be stored on the server side.
					</p>

					<!--who uses cookies and sessions -->
					<section id="who-access"> 
						<h3>Who has Access to Cookies & Sessions?</h3>
						
						<p>For the most part, cookies can only be accessed by the website which requested the cookie. <br/>
							However, cookies can make use of a unique ID which allows for servers being able to match up with the cookie data on the server. <br/>
						</p>

						<p>This goes more into 
							<a href="topic1.php">3rd party</a> cookies and 
							<a href="topic4.php">alternatives</a> to cookies. 
							Click the links to find out more!
						</p>
					</section>
				</section>
			</div>

            <!-- footer with emails and authors -->
            <?php include 'footer.inc'; ?>
        </body>

        <!--References
            https://www.youtube.com/watch?v=64veb6tKTm0
            https://www.youtube.com/watch?v=I01XMRo2ESg
            https://www.kaspersky.com/resource-center/definitions/cookies
            https://help.hcltechsw.com/commerce/9.1.0/admin/concepts/csesmsession_mgmt_cookies.html
            https://www.bounteous.com/insights/2019/12/23/how-google-analytics-uses-cookies-identify-users/
            https://headerbidding.co/cookie-syncing/#what_is_it
            https://www.khanacademy.org/computing/computers-and-internet/xcae6f4a7ff015e7d:online-data-security/xcae6f4a7ff015e7d:user-data-tracking/a/web-cookies
            https://support.google.com/campaignmanager/answer/2839090?hl=en
            https://us.norton.com/internetsecurity-privacy-should-i-accept-cookies.html#:~:text=Cookies%20are%20small%20text%20files,back%20to%20the%20website%20owner.
            https://blog.webf.zone/ultimate-guide-to-http-cookies-2aa3e083dbae
        -->
</html>