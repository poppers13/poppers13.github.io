<!DOCTYPE html>
<html lang="en">
    <head>
    
        <!-- Bootstrap CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
       
        <!-- stylesheet -->
        <link rel = "stylesheet" type = "text/css" href = "styles/style.css">
        
        <!-- general meta tags -->
        <meta charset="utf-8" />
        <meta name="description" content="Cookies and sessions explanation and potential uses" />
  		<meta name="keywords" content="Cookie, session" />
  		<meta name="author" content="Dylan Lewis" />
        <title> What are Cookies and Sessions? </title>
    </head>
    
    <body>
        <!-- sticky menu bar, with navigation links to other pages -->
        <?php include 'menu.inc'; ?>

        <!-- header contains school logo, and info relating to the page's creation -->
        <?php include 'header.inc'; ?>
		
        <!-- poses the question that the page will answer-->
        <section>
                <h1>What are Cookies and Sessions?</h1>
        </section>

        <!-- Section that has the content block that encapsulates everything-->
        <div class="content-block">
            <!-- brief description and introduction to the topic of cookies and sessions with an example of how cookies and sessions are used in web browsing-->
            <div>
                <p> Cookies and sessions are actually different things, a cookie is a text file that is stored client side (on the user's web browser) so the site and browser can recognize previous uses of a site. Cookies were invented to make user's experience on the internet more convenient. This differs to a <em>session</em>, as a session is data of the website user, stored on the website's server. A session is usually terminated after 30 minutes or when the tab is closed.</p>
            </div>

            <!-- further explaining uses of cookies and sessions, also giving a more indepth example of how they are used in web browsing. -->
            <section>
                <h2>What are Typical uses of a Cookie and a Session?</h2>
                <p>A common use of cookies is usernames and passwords, where the browser utilizes cookies to remember a past user's username and password so they dont have to type it in themselves. This is different to a session as an example could be a shopping basket. Most sites keep what is in your shopping basket for the purpose of convenience so if you add eggs to your basket, then open a new tab, the website will recognise that this is the session as the first tab and will use the session information to make eggs in the shopping basket of the second tab. Sessions typically timeout within 30 minutes so the server does not become full with data that is no longer needed by users. </p>
            </section>
            <article> 
                <h2>Technically Correct Names</h2>
                    <p>Though the names "cookie" and "session" are globally understood, the following are the "correct" or scientific terms to identify them.</p>
            <dl id="wb"> <!-- the tag is wb for white background as i want a list without the settings applied to other definition lists, def-dl is definition page definition list -->
                <dt>Cookie</dt>
                <dd>HTTP Cookie</dd>
                <dt>Session</dt>
                <dd>Either Web Session or Session are acceptable</dd>
            </dl>
            </article>
            <section>
                <h2>What does a Cookie look like?</h2>
                <figure>
                    <img class="webcookiepng" src="images/webcookie.png" alt="cartoon web cookie">
                    <div>
                <a href="images/googlecookie.png">  <img class="utmacookie" src="images/googlecookie.png" alt="Picture of a cookie" title="Click to view in full" /></a>
                </div>
                </figure>
                <p>As sessions are more a set of interactions between a server and a user, an example of what a session actually looks like cannot be found. However, as a cookie is a text file which is stored client side, we can see what one looks like by going under the cookies section in settings. On the right is the "_utma" cookie that is used by Google trends to identify when a user first visited the page and when their most recent visit was.</p>
                <p>Though this string of text may seem unreadable, the Google server can tell from this string of text when the user first and last visited Google trends.</p>
            </section>

            <article>
                <h2>Cookies and Sessions and some of their differences.</h2>

                <table  class="def-th"><!--is called def table as this page is the definition page so its a table for the definition page-->
                <caption><strong>How do cookies and sessions differ?</strong></caption>
                    <tr>
                        <th id="blank-cell"></th> <!--this is to be blanked out as there is no content in this cell as there is nothing that fits here -->
                        <th class="def-th">Cookies</th>
                        <th class="def-th">Sessions</th>
                    </tr>
                    <tr class="def-tr">
                        <td class="def-td">Stored Client Side</td>
                        <td class="def-td green-td">Yes</td>
                        <td class="def-td yellow-td">Not usually, but it can be</td> <!--id's provide colour that is in css to make the table stand out more-->
                    </tr>
                    <tr class="def-tr">
                        <td class="def-td">Text File</td>
                        <td class="def-td green-td">Yes</td>
                        <td class="def-td red-td">No</td>
                    </tr>
                    <tr class="def-tr">
                        <td class="def-td">Duration</td>
                        <td class="def-td yellow-td">Until Deleted</td>
                        <td class="def-td yellow-td">Typically around 30 Minutes</td>
                    </tr>
                    <tr class="def-tr">
                        <td class="def-td">Requires Server Interaction</td>
                        <td class="def-td red-td">No</td>
                        <td class="def-td green-td">Yes</td>
                    </tr>
                </table>
            </article>
            <section>
                <h2>More Practical Uses of Web Cookies and Sessions</h2>
                <p class="useheading">Cookies</p>
                    <ol id="list-left" class="bulletpt">
                        <li>Target advertisements effectively.</li>
                        <li>Track a site's unique visitor count.</li>
                        <li>Remember login details.</li>
                    </ol>
                <aside>
                   <p>Click Here to Learn more about <a href="topic3.php">Functions of Cookies & Sessions</a></p> 
                </aside>
                    <p class="useheading">Sessions</p>
                    <ol class="bulletpt"> <!-- bulletpt = bullet point: more appropriate to put in css rather than in the html -->
                        <li>Track interactions made with the site by users.</li>
                        <li>Keeping users logged in.</li>
                        <li>Store a list of activities performed by a user which can benefit their online experience.</li>
                    </ol>
            </section>
        </div>
		
        <!-- footer with email contacts for every member -->
        <?php include 'footer.inc'; ?>
    </body>
    <!-- REFERENCE LIST:
    https://www.tutorialspoint.com/What-is-the-difference-between-session-and-cookies
    https://www.lifehacker.com.au/2020/05/fact-and-fiction-the-truth-about-browser-cookies-2/
    https://www.w3schools.com/css/css_table.asp
    https://www.purevpn.com/blog/behavioral-tracking-a-privacy-concern/ (this was for the image webcookie.png)
    https://www.w3schools.com/howto/howto_css_border_image.asp
    -->
</html>
