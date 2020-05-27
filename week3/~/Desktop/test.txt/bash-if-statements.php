<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bash if statements. Learn if statements, else, elif and case statements with sample scripts, detailed descriptions and challenges.">
    <meta name="keywords" content="scripting tutorial, bash tutorial, bash scripting tutorial, bash, scripting, if, elif, else, if statements, case">
    <meta name="author" content="Ryan Chadwick">

    <title>If Statements - Bash Scripting Tutorial</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    
    <link rel='icon' type='image/png' href='/favicons/favicon_bash.png'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document" data-spy='scroll' data-target='#sidebox' data-offset='90'> 
	<header id='ryansheader'>
	<div class='container'>
		<div class='col-sm-12'>
			<a id='ryantitle' href='/' title='A collection of Technology Tutorials'>Ryans Tutorials</a>
			
			<div class='btn-toolbar pull-right'>
				<div class='btn-group mega-dropdown'>
					<button class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown' >More Tutorials <span class='caret'></span></button>
					<ul class='dropdown-menu pull-right mega-dropdown-menu row'>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>Linux</li>
								<li><a href='/linuxtutorial/'><span><img src='/img/round/tux_48.png' alt='Tux' /><p>Linux Tutorial</p></span></a></li>
								<li><a href='/bash-scripting-tutorial/'><span><img src='/img/round/hammer_48.png' alt='Hammer' /><p>Bash Scripting Tutorial</p></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>Web</li>
								<li><a href='/html-tutorial/'><span><img src='/img/round/html_48.png' alt='HTML' /><p>HTML Tutorial</p></span></a></li>
								<li><a href='/css-tutorial/'><span><img src='/img/round/css_48.png' alt='CSS' /><p>CSS Tutorial</p></span></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>General</li>
								<li><a href='/binary-tutorial/'><span><img src='/img/round/abacus_48.png' alt='Abacus' /><p>Binary Tutorial</p></span></a></li>
								<li><a href='/regular-expressions-tutorial/'><span><img src='/img/round/search_48.png' alt='Search' /><p>Regular Expressions Tutorial</p></span></a></li>
								<li><a href='/boolean-algebra-tutorial/'><span><img src='/img/round/config_48.png' alt='Switches' /><p>Boolean Algebra Tutorial</p></span></a></li>
								<li><a href='/rubiks-cube-tutorial/'><span><img src='/img/round/cube_48.png' alt='Rubiks Cube' /><p>Solve the Cube</p></span></a></li>
							</ul>
						</li>
						<li class='col-sm-3'>
							<ul>
								<li class='dropdown-header'>&nbsp;</li>
								<li><a href='/problem-solving-skills/'><span><img src='/img/round/map_48.png' alt='Map' /><p>Problem Solving Skills</p></span></a></li>
								<li><a href='/graphic-design-tutorial/'><span><img src='/img/round/brush_48.png' alt='Brush' /><p>Basic Graphic Design</p></span></a></li>
								<li><a href='/programming-challenges/'><span><img src='/img/round/rocket_48.png' alt='Rocket' /><p>Programming Challenges</p></span></a></li>
								<li><a href='/software-design-and-development/'><span><img src='/img/round/browser_48.png' alt='Software' /><p>Software Design and Development</p></span></a></li>
								<li><a href='/microbit-tutorial/'><span><img src='/img/round/microbit_48.png' alt='micro:bit' /><p>micro:bit tutorial</p></span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header> 
	
	<!-- Fixed navbar -->
	<div id='tutorialheader' class="navbar navbar-inverse navbar-static" role="navigation" data-spy='affix' data-offset-top='40'>
		<div class="container">
			<h1>Bash Scripting Tutorial - 5. If Statements</h1>
			
			<div class='btn-toolbar pull-right'>
								<div class='btn-group'>
					<button class='btn btn-info btn-sm dropdown-toggle' data-toggle='dropdown' >Tutorial Sections <span class='caret'></span></button>
					<ul class='dropdown-menu pull-right'>
					<li><a href='./'>Introduction</a></li><li><a href='./bash-script.php'>1. What is a Bash Script?</a></li><li><a href='./bash-variables.php'>2. Variables</a></li><li><a href='./bash-input.php'>3. Input</a></li><li><a href='./bash-arithmetic.php'>4. Arithmetic</a></li><li class='active'><a href='./bash-if-statements.php'>5. If Statements</a></li><li><a href='./bash-loops.php'>6. Loops</a></li><li><a href='./bash-functions.php'>7. Functions</a></li><li><a href='./bash-user-interface.php'>8. User Interface</a></li>					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container'>
		<div class='row'>
			<div class='col-md-9'>
				<div class='jumbotron'>
					<h2>If Statements!</h2>
					<p>Decisions, decisions.</p>
				</div>
				
				<h2 id='introduction' class='introduction'>Introduction</h2>
				
				<div class='pull-right'>
					<style>
					.ryanstutorials-bash-scripting-top { width: 300px; height: 250px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-top { width: 336px; height: 280px; } }
					@media(min-width: 800px) { .ryanstutorials-bash-scripting-top { width: 336px; height: 280px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Top -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-top"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="7812598475"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<p>Bash if statements are very useful. In this section of our Bash Scripting Tutorial you will learn the ways you may use if statements in your Bash scripts to help automate tasks.</p>
				
				<p><b>If</b> statements (and, closely related, <b>case</b> statements) allow us to make decisions in our Bash scripts.  They allow us to decide whether or not to run a piece of code based upon conditions that we may set. If statements, combined with <a href='bash-loops.php'>loops</a> (which we'll look at in the next section) allow us to make much more complex scripts which may solve larger tasks.</p>
				
				<p>Like what we have looked at in previous sections, their syntax is very specific so stay on top of all the little details.</p>
				
				
				<h2 id='if'>Basic If Statements</h2>
				
				<p>A basic if statement effectively says, <b>if</b> a particular test is true, then perform a given set of actions.  If it is not true then don't perform those actions.  If follows the format below:</p>
				
				<p class='commandoutline'>if [ &lt;some test&gt; ]<br />then<br /><span class='tab1'></span>&lt;commands&gt;<br />fi</p>
				
				<p>Anything between <b>then</b> and <b>fi</b> (if backwards) will be executed only if the test (between the square brackets) is true.</p>
				
				<p>Let's look at a simple example:</p>
				
				<div class='page'>
					<h4>if_example.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Basic if statement</span></li>
						<li></li>
						<li>if [ $1 -gt 100 ] </li>
						<li>then</li>
						<li><span class='tab1'></span>echo Hey that\'s a large number.</li>
						<li><span class='tab1'></span>pwd</li>
						<li>fi</li>
						<li></li>
						<li>date</li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Line 4</b> - Let's see if the first command line argument is greater than 100</li>
					<li><b>Line 6 and 7</b> - Will only get run if the test on line 4 returns true. You can have as many commands here as you like.</li>
					<li><b>Line 6</b> - The backslash ( \ ) in front of the single quote ( ' ) is needed as the single quote has a special meaning for bash and we don't want that special meaning.  The backslash escapes the special meaning to make it a normal plain single quote again.</li>
					<li><b>Line 8</b> - fi signals the end of the if statement.  All commands after this will be run as normal.</li>
					<li><b>Line 10</b> - Because this command is outside the if statement it will be run regardless of the outcome of the if statement.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>./if_example.sh 15</li>
						<li>Tue 26 May 23:36:15 2020</li>
						<li><span class='prompt'></span>./if_example.sh 150</li>
						<li>Hey that's a large number.</li>
						<li>/home/ryan/bin</li>
						<li>Tue 26 May 23:36:15 2020</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				<div class='tip'>
					<p>It is always good practice to test your scripts with input that covers the different scenarios that are possible.</p>
				</div>
				
				
				<h2 id='test'>Test</h2>
				
				<p>The square brackets ( [ ] ) in the <b>if</b> statement above are actually a reference to the command <b>test</b>.  This means that all of the operators that test allows may be used here as well.  Look up the man page for test to see all of the possible operators (there are quite a few) but some of the more common ones are listed below.</p>
				
				<table class='fancy'>
					<tr>
						<th>Operator</th>
						<th>Description</th>
					</tr>
					<tr>
						<td>! EXPRESSION</td>
						<td>The EXPRESSION is false.</td>
					</tr>
					<tr>
						<td>-n STRING</td>
						<td>The length of STRING is greater than zero.</td>
					</tr>
					<tr>
						<td>-z STRING</td>
						<td>The lengh of STRING is zero (ie it is empty).</td>
					</tr>
					<tr>
						<td>STRING1 = STRING2</td>
						<td>STRING1 is equal to STRING2</td>
					</tr>
					<tr>
						<td>STRING1 != STRING2</td>
						<td>STRING1 is not equal to STRING2</td>
					</tr>
					<tr>
						<td>INTEGER1 -eq INTEGER2</td>
						<td>INTEGER1 is numerically equal to INTEGER2</td>
					</tr>
					<tr>
						<td>INTEGER1 -gt INTEGER2</td>
						<td>INTEGER1 is numerically greater than INTEGER2</td>
					</tr>
					<tr>
						<td>INTEGER1 -lt INTEGER2</td>
						<td>INTEGER1 is numerically less than INTEGER2</td>
					</tr>
					<tr>
						<td>-d FILE</td>
						<td>FILE exists and is a directory.</td>
					</tr>
					<tr>
						<td>-e FILE</td>
						<td>FILE exists.</td>
					</tr>
					<tr>
						<td>-r FILE</td>
						<td>FILE exists and the read permission is granted.</td>
					</tr>
					<tr>
						<td>-s FILE</td>
						<td>FILE exists and it's size is greater than zero (ie. it is not empty).</td>
					</tr>
					<tr>
						<td>-w FILE</td>
						<td>FILE exists and the write permission is granted.</td>
					</tr>
					<tr>
						<td>-x FILE</td>
						<td>FILE exists and the execute permission is granted.</td>
					</tr>
				</table>
				
				<p>A few points to note:</p>
				
				<ul>
					<li><b>=</b> is slightly different to <b>-eq</b>.  [ 001 = 1 ] will return false as = does a string comparison (ie. character for character the same) whereas -eq does a numerical comparison meaning [ 001 -eq 1 ] will return true.</li>
					<li>When we refer to FILE above we are actually meaning a <a href='/linuxtutorial/navigation.php'>path</a>.  Remember that a path may be absolute or relative and may refer to a file or a directory.</li>
					<li>Because [ ] is just a reference to the command <b>test</b> we may experiment and trouble shoot with test on the command line to make sure our understanding of its behaviour is correct.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>test 001 = 1</li>
						<li><span class='prompt'></span>echo $?</li>
						<li>1</li>
						<li><span class='prompt'></span>test 001 -eq 1</li>
						<li><span class='prompt'></span>echo $?</li>
						<li>0</li>
						<li><span class='prompt'></span>touch myfile</li>
						<li><span class='prompt'></span>test -s myfile</li>
						<li><span class='prompt'></span>echo $?</li>
						<li>1</li>
						<li><span class='prompt'></span>ls /etc &gt; myfile</li>
						<li><span class='prompt'></span>test -s myfile</li>
						<li><span class='prompt'></span>echo $?</li>
						<li>0</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Line 1</b> - Perform a string based comparison.  Test doesn't print the result so instead we check it's exit status which is what we will do on the next line.</li>
					<li><b>Line 2</b> - The variable <b>$?</b> holds the exit status of the previously run command (in this case test).  0 means TRUE (or success). 1 = FALSE (or failure).</li>
					<li><b>Line 4</b> - This time we are performing a numerical comparison.</li>
					<li><b>Line 7</b> - Create a new blank file <b>myfile</b> (assuming that myfile doesn't already exist).</li>
					<li><b>Line 8</b> - Is the size of <b>myfile</b> greater than zero?</li>
					<li><b>Line 11</b> - <a href='/linuxtutorial/piping.php'>Redirect</a> some content into myfile so it's size is greater than zero.</li>
					<li><b>Line 12</b> - Test the size of <b>myfile</b> again. This time it is TRUE.</li>
				</ul>
				
				
				<h2 id='indenting'>Indenting</h2>
				
				<p>You'll notice that in the <b>if</b> statement above we indented the commands that were run if the statement was true.  This is referred to as indenting and is an important part of writing good, clean code (in any language, not just Bash scripts).  The aim is to improve readability and make it harder for us to make simple, silly mistakes.  There aren't any rules regarding indenting in Bash so you may indent or not indent however you like and your scripts will still run exactly the same.  I would highly recommend you do indent your code however (especially as your scripts get larger) otherwise you will find it increasingly difficult to see the structure in your scripts.</p>
				
				
				<h2 id='nested'>Nested If statements</h2>
				
				<p>Talking of indenting.  Here's a perfect example of when it makes life easier for you.  You may have as many <b>if</b> statements as necessary inside your script.  It is also possible to have an if statement inside of another if statement.  For example, we may want to analyse a number given on the command line like so:</p>
				
				<div class='page'>
					<h4>nested_if.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Nested if statements</span></li>
						<li></li>
						<li>if [ $1 -gt 100 ] </li>
						<li>then</li>
						<li><span class='tab1'></span>echo Hey that\'s a large number.</li>
						<li></li>
						<li><span class='tab1'></span>if (( $1 % 2 == 0 )) </li>
						<li><span class='tab1'></span>then</li>
						<li><span class='tab2'></span>echo And is also an even number.</li>
						<li><span class='tab1'></span>fi</li>
						<li>fi</li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Line 4</b> - Perform the following, only if the first command line argument is greater than 100.</li>
					<li><b>Line 8</b> - This is a light variation on the <b>if</b> statement.  If we would like to check an expression then we may use the double brackets just like we did for <a href='./bash-variables.php'>variables</a>.</li>
					<li><b>Line 10</b> - Only gets run if both if statements are true.</li>
				</ul>
				
				<p class='doublequote'>Yo dawg, I herd you like <b>if</b> statements so I put an <b>if</b> statement inside your <b>if</b> statement.</p>
				<p><b>Xzibit</b></p>
				
				<p>(<a href='http://knowyourmeme.com/memes/xzibit-yo-dawg'>Xzibit</a> didn't actually say that but I'm sure he would have, had he hosted Pimp My Bash Script.)</p>
				
				<div class='block-center'>
					<style>
					.ryanstutorials-bash-scripting-middle { width: 320px; height: 50px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-middle { width: 468px; height: 60px; } }
					@media(min-width: 750px) { .ryanstutorials-bash-scripting-middle { width: 728px; height: 90px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Middle -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-middle"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="9289331675"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<div class='tip'>
					<p>You can nest as many if statements as you like but as a general rule of thumb if you need to nest more than 3 levels deep you should probably have a think about reorganising your logic.</p>
				</div>
				
				
				<h2 id='ifelse'>If Else</h2>
				
				<p>Sometimes we want to perform a certain set of actions if a statement is true, and another set of actions if it is false.  We can accommodate this with the <b>else</b> mechanism.</p>
				
				<p class='commandoutline'>if [ &lt;some test&gt; ]<br />then<br /><span class='tab1'></span>&lt;commands&gt;<br />else<br /><span class='tab1'></span>&lt;other commands&gt;<br />fi</p>
				
				<p>Now we could easily read from a file if it is supplied as a command line argument, <b>else</b> read from STDIN.</p>
				
				<div class='page'>
					<h4>else.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># else example</span></li>
						<li></li>
						<li>if [ $# -eq 1 ] </li>
						<li>then</li>
						<li><span class='tab1'></span>nl $1</li>
						<li>else</li>
						<li><span class='tab1'></span>nl /dev/stdin</li>
						<li>fi</li>
					</ol>
				</div>
				
				
				<h2 id='ifelif'>If Elif Else</h2>
				
				<p>Sometimes we may have a series of conditions that may lead to different paths.</p>
				
				<p class='commandoutline'>if [ &lt;some test&gt; ]<br />then<br /><span class='tab1'></span>&lt;commands&gt;<br />elif [ &lt;some test&gt; ] <br />then<br /><span class='tab1'></span>&lt;different commands&gt;<br />else<br /><span class='tab1'></span>&lt;other commands&gt;<br />fi</p>
				
				<p>For example it may be the case that if you are 18 or over you may go to the party.  If you aren't but you have a letter from your parents you may go but must be back before midnight.  Otherwise you cannot go.</p>
				
				<div class='page'>
					<h4>if_elif.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># elif statements</span></li>
						<li></li>
						<li>if [ $1 -ge 18 ] </li>
						<li>then</li>
						<li><span class='tab1'></span>echo You may go to the party.</li>
						<li>elif [ $2 == 'yes' ] </li>
						<li>then</li>
						<li><span class='tab1'></span>echo You may go to the party but be back before midnight.</li>
						<li>else</li>
						<li><span class='tab1'></span>echo You may not go to the party.</li>
						<li>fi</li>
					</ol>
				</div>
				
				<p>You can have as many elif branches as you like.  The final else is also optional.</p>
				
				
				<h2 id='boolean'>Boolean Operations</h2>
				
				<p>Sometimes we only want to do something if multiple conditions are met.  Other times we would like to perform the action if one of several condition is met.  We can accommodate these with <b>boolean operators</b>.</p>
				
				<ul>
					<li><b>and</b> - &amp;&amp;</li>
					<li><b>or</b> - ||</li>
				</ul>
				
				<p>For instance maybe we only want to perform an operation if the file is readable <b>and</b> has a size greater than zero.</p>
				
				<div class='page'>
					<h4>and.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># and example</span></li>
						<li></li>
						<li>if [ -r $1 ] && [ -s $1 ] </li>
						<li>then</li>
						<li><span class='tab1'></span>echo This file is useful.</li>
						<li>fi</li>
					</ol>
				</div>
				
				<p>Maybe we would like to perform something slightly different if the user is either bob or andy.</p>
				
				<div class='page'>
					<h4>or.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># or example</span></li>
						<li></li>
						<li>if [ $USER == 'bob' ] || [ $USER == 'andy' ] </li>
						<li>then</li>
						<li><span class='tab1'></span>ls -alh</li>
						<li>else</li>
						<li><span class='tab1'></span>ls</li>
						<li>fi</li>
					</ol>
				</div>
				
				
				<h2 id='case'>Case Statements</h2>
				
				<p>Sometimes we may wish to take different paths based upon a variable matching a series of patterns.  We could use a series of <b>if</b> and <b>elif</b> statements but that would soon grow to be unweildly.  Fortunately there is a <b>case</b> statement which can make things cleaner.  It's a little hard to explain so here are some examples to illustrate:</p>
				
				<p class='commandoutline'>case &lt;variable&gt; in<br />
					&lt;pattern 1&gt;)<br />
						<span class='tab1'></span>&lt;commands&gt;<br />
						<span class='tab1'></span>;;<br />
					&lt;pattern 2&gt;)<br />
						<span class='tab1'></span>&lt;other commands&gt;<br />
						<span class='tab1'></span>;;<br />
					esac</p>
					
				<p>Here is a basic example:</p>
				
				<div class='page'>
					<h4>case.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># case example</span></li>
						<li></li>
						<li>case $1 in</li>
						<li><span class='tab1'></span>start)</li>
						<li><span class='tab2'></span>echo starting</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>stop)</li>
						<li><span class='tab2'></span>echo stoping</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>restart)</li>
						<li><span class='tab2'></span>echo restarting</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>*)</li>
						<li><span class='tab2'></span>echo don\'t know</li>
						<li><span class='tab2'></span>;;</li>
						<li>esac</li>
					</ol>
				</div>
				
				<p>Let's break it down:</p>
				
				<ul>
					<li><b>Line 4</b> - This line begins the <b>case</b>mechanism.</li>
					<li><b>Line 5</b> - If $1 is equal to 'start' then perform the subsequent actions. the ) signifies the end of the pattern.</li>
					<li><b>Line 7</b> - We identify the end of this set of statements with a double semi-colon ( ;; ). Following this is the next case to consider.</li>
					<li><b>Line 14</b> - Remember that the test for each case is a pattern.  The <b>*</b> represents any number of any character.  It is essentialy a catch all if for if none of the other cases match.  It is not necessary but is often used.</li>
					<li><b>Line 17</b> - esac is case backwards and indicates we are at the end of the case statement.  Any other statements after this will be executed normally.</li>
				</ul>
				
				<div class='terminal'>
					<ol>
						<li><span class='prompt'></span>./case.sh start</li>
						<li>starting</li>
						<li><span class='prompt'></span>./case.sh restart</li>
						<li>restarting</li>
						<li><span class='prompt'></span>./case.sh blah</li>
						<li>don't know</li>
						<li><span class='prompt'></span></li>
					</ol>
				</div>
				
				<p>Now let's look at a slightly more complex example where patterns are used a bit more.</p>
				
				<div class='page'>
					<h4>disk_useage.sh</h4>
					
					<ol>
						<li>#!/bin/bash</li>
						<li><span class='comment'># Print a message about disk useage.</span></li>
						<li></li>
						<li>space_free=$( df -h | awk '{ print $5 }' | sort -n | tail -n 1 | sed 's/%//' )</li>
						<li></li>
						<li>case $space_free in</li>
						<li><span class='tab1'></span>[1-5]*)</li>
						<li><span class='tab2'></span>echo Plenty of disk space available</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>[6-7]*)</li>
						<li><span class='tab2'></span>echo There could be a problem in the near future</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>8*)</li>
						<li><span class='tab2'></span>echo Maybe we should look at clearing out old files</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>9*)</li>
						<li><span class='tab2'></span>echo We could have a serious problem on our hands soon</li>
						<li><span class='tab2'></span>;;</li>
						<li><span class='tab1'></span>*)</li>
						<li><span class='tab2'></span>echo Something is not quite right here</li>
						<li><span class='tab2'></span>;;</li>
						<li>esac</li>
					</ol>
				</div>
				
				
				<h2 id='summary'>Summary</h2>
				
				<div class='stuffwelearnt'>
					<dl>
						<dt>if</dt>
						<dd>Perform a set of commands if a test is true.</dd>
						
						<dt>else</dt>
						<dd>If the test is not true then perform a different set of commands.</dd>
						
						<dt>elif</dt>
						<dd>If the previous test returned false then try this one.</dd>
						
						<dt>&amp;&amp;</dt>
						<dd>Perform the and operation.</dd>
						
						<dt>||</dt>
						<dd>Perform the or operation.</dd>
						
						<dt>case</dt>
						<dd>Choose a set of commands to execute depending on a string matching a particular pattern.</dd>
					</dl>
				</div>
				
				<div class='importantconcepts'>
					<dl>
						<dt>Indenting</dt>
						<dd>Indenting makes your code much easier to read. It get's increasingly important as your Bash scripts get longer.</dd>
						
						<dt>Planning</dt>
						<dd>Now that your scripts are getting a little more complex you will probably want to spend a little bit of time thinking about how you structure them before diving in.</dd>
					</dl>
				</div>
				
				<h2 id='activities'>Activities</h2>
				
				<p>Now let's make some decisions.</p>
				
				<ul class='activities'>
					<li>Create a Bash script which will take 2 numbers as command line arguments.  It will print to the screen the larger of the two numbers.</li>
					<li>Create a Bash script which will accept a file as a command line argument and analyse it in certain ways. eg. you could check if the file is executable or writable.  You should print a certain message if true and another if false.</li>
					<li>Create a Bash script which will print a message based upon which day of the week it is (eg. 'Happy hump day' for Wedensday, 'TGIF' for Friday etc).</li>
				</ul>
				
				<div class='block-center'>
					<style>
					.ryanstutorials-bash-scripting-bottom { width: 320px; height: 50px; }
					@media(min-width: 500px) { .ryanstutorials-bash-scripting-bottom { width: 468px; height: 60px; } }
					@media(min-width: 750px) { .ryanstutorials-bash-scripting-bottom { width: 728px; height: 90px; } }
					</style>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- RyansTutorials Bash Scripting Bottom -->
					<ins class="adsbygoogle ryanstutorials-bash-scripting-bottom"
					style="display:inline-block"
					data-ad-client="ca-pub-9971420945046594"
					data-ad-slot="1766064874"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				
				<div id='bottomnavigation'>
					<div class='pull-left'><a href='./bash-arithmetic.php'><span class='glyphicon glyphicon-chevron-left'></span> Arithmetic</a></div>
					<div class='pull-right'><a href='./bash-loops.php'>Loops <span class='glyphicon glyphicon-chevron-right'></span></a></div>
				</div>
				
			</div>
			<div class='col-md-3 ' id='sideboxcol'>
				<div class="well sidebar-nav hidden-xs hidden-sm"  id='sidebox' data-spy='affix' data-offset-top='40'>
					<ul class="nav nav-list">
						<li class="nav-header">Section Breakdown</li>
						<li><a href="#introduction">Introduction</a></li>
						<li><a href="#if">Basic If Statements</a></li>
						<li><a href="#test">Test</a></li>
						<li><a href="#indenting">Indenting</a></li>
						<li><a href="#nested">Nested If Statements</a></li>
						<li><a href="#ifelse">If Else</a></li>
						<li><a href="#ifelif">If Elif Else</a></li>
						<li><a href="#boolean">Boolean Operations</a></li>
						<li><a href="#case">Case Statements</a></li>
						<li><a href='#summary'>Summary</a></li>
						<li><a href='#activities'>Activities</a></li>
						<li class="nav-header">Next Section</li>
						<li><a href="./bash-loops.php">Loops</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class='container-fluid footer-background margin-top'>
	<div class='row-fluid'>
		<div class='col-md-12'>
			<div class='container'>
				<footer>
					<p>By <a href="https://plus.google.com/105636787773904848687" rel='author'>Ryan Chadwick</a> &copy; 2020 <span style='margin-left:30px;'><a href="https://twitter.com/funcreativity" class="twitter-follow-button" data-show-count="false" >Follow @funcreativity</a></span><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
				</footer>
					
				<div id='footerbar'></div> 

				<div class='row'>
					<div class="col-sm-3 tutorial-outline">
						<a href='/' title='Kindle the flame'>
							<img src='/img/round/fire_64.png' alt='Flame' />
							<h4>Home</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/linuxtutorial/'>
							<img src='/img/round/tux_64.png' alt='Tux' />
							<h4>Linux Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/html-tutorial/'>
							<img src='/img/round/html_64.png' alt='HTML' />
							<h4>HTML Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/binary-tutorial/'>
							<img src='/img/round/abacus_64.png' alt='Abacus' />
							<h4>Binary Tutorial</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-3">
						<p>Education is the kindling of a flame, <br />not the filling of a vessel.<br />
						<i>- Socrates</i></p>
						
						<p><a href='/contact.php'>Contact</a> | <a href='/disclaimer.php' title='Privacy Policy, Terms of Use and Disclaimer'>Disclaimer</a></p>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/bash-scripting-tutorial/'>
							<img src='/img/round/hammer_64.png' alt='Hammer' />
							<h4>Bash Scripting Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/css-tutorial/'>
							<img src='/img/round/css_64.png' alt='CSS' />
							<h4>CSS Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/regular-expressions-tutorial/'>
							<img src='/img/round/search_64.png' alt='Search' />
							<h4>Regular Expressions</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-offset-3 col-sm-3 tutorial-outline">
						<a href='/programming-challenges/'>
							<img src='/img/round/rocket_64.png' alt='Rocket' />
							<h4>Programming Challenges</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/problem-solving-skills/'>
							<img src='/img/round/map_64.png' alt='Map' />
							<h4>Problem Solving</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/boolean-algebra-tutorial/'>
							<img src='/img/round/config_64.png' alt='Switches' />
							<h4>Boolean Algebra Tutorial</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-offset-3 col-sm-3 tutorial-outline">
						<a href='/graphic-design-tutorial/'>
							<img src='/img/round/brush_64.png' alt='Paint Brush' />
							<h4>Basic Design Tutorial</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/rubiks-cube-tutorial/'>
							<img src='/img/round/cube_64.png' alt='Rubiks Cube' />
							<h4>Solve the Cube</h4>
						</a>
					</div>
					<div class="col-sm-3 tutorial-outline">
						<a href='/software-design-and-development/'>
							<img src='/img/round/browser_64.png' alt='Software' />
							<h4>Software Design and Development</h4>
						</a>
					</div>
				</div>
				<div class='row'>
					<div class="col-sm-offset-9 col-sm-3 tutorial-outline">
						<a href='/microbit-tutorial/'>
							<img src='/img/round/microbit_64.png' alt='micro:bit' />
							<h4>micro:bit Tutorial</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-20188827-12', 'ryanstutorials.net');
	ga('send', 'pageview');

</script>

	<!--<div id='rhythm'></div>-->
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src='../js/base.js'></script>
</body>

</html> 
 
 
 
 
 
