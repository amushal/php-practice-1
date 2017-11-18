<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
  <title>Ala Mushal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="page"> <!-- Defining the #page section with the section tag -->

	    <header> <!-- Defining the header section of the page with the appropriate tag -->

	        <h1>Ala Mushal</h1>

	        <h3>Welcome to my Harvard first project in PHP</h3>

	        <nav class="clear"> <!-- The nav link semantically marks your main site navigation -->
	            <ul>
	                <li><a href="#article1">Item 1</a></li>
	                <li><a href="#article2">Item 2</a></li>
	                <li><a href="#article3">Item 3</a></li>
	            </ul>
	        </nav>

	    </header>
	<!-- Article 1 start -->

    <div class="line"></div>  <!-- Dividing line -->

    <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->

        <h2>About Me</h2>

        <div class="line"></div>

        <div class="articleBody clear">

            <figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
                <a href="#">
                    <img src="images/me.jpg" width="328" height="366" alt="Ala Mushal" />
								</a>
            </figure>


            <p>
							My wide breadth of experience gives versatility in a number of contexts.
						</p>
						<p>
						  Well-spoken, energetic, confident, and personable.
						</p>

						<section>
							<h4>
								The key strengths that I possess for success include, but are not limited to, the following:
							</h4>
							<ul>
								<li>I strive for continued excellence.</li>
								<li>Passionate about new technologies and software development.</li>
								<li>I am eager to learn new things.</li>
							</ul>
						</section>
        </div>

		<h2>Random Quote</h2>

    <?php
			function getRandomString() {

				$q = array("if I agree with you we'd both be wrong",
					"If you tell the truth, you don't have to remember anything.",
					"Get busy living or get busy dying.");

				$min = 0;
				$max = count($q);
				$randomNumber = rand($min, $max-1);

				$randomQuote = $q[$randomNumber];
				return trim($randomQuote);
			}

			echo "<br />";
			echo "<blockquote>". getRandomString() ."</blockquote>";
    ?>

    </article>

		<!-- Article 1 end -->
		<footer> <!-- Marking the footer section -->

		    <div class="line"></div>

		    <p>Copyright 2017 - ala.com</p> <!-- Change the copyright notice -->

				<a href="#" class="up">Go UP</a>

		</footer>

    </section> <!-- Closing the #page section -->

</body>
</html>
