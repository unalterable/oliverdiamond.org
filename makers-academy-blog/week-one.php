<?php include($_SERVER['DOCUMENT_ROOT'].'/theme/header.php');?>
			<div id="frame-header"><div id="frame-title">Week One</div></div>

			<div id="main-text">
			<P>
			Day 1:
			So, the course began. No work on Day 1, no surprise there.<BR>
			Women in tech.
			<P>
			Day 2:<BR>
			Day 2, and straight upstairs to the working floor. I get in at 8:45 and expect the arrivals 40mins earlier that the start time, to be thin. They are not. I'd say half are already in the building.<BR>
			<BR>
			I grab a spare seat with an empty neighbour (for my pair today). And, after an introduction to git pong (which could have touched on merging issues) we crack on. Today I'm with Carlos, and i feel that we make some good progress.<BR>
			<BR>
			I also watched a wonderful YouTube lecture by Sandi Metz **LINK** that discusses removing conditionals from your program. I learned that she started in SmallTalk, which has only 6 keywords (as opposed to Ruby's ~40 and Java's 1000's). The idea appeals to me, and I like the idea of pushing conditionals out (or at least to the edge) of your program. The lecture looked at the idea of breaking open the 'ObjectClass', 'TrueClass', 'FalseClass', and 'NilClass', and yielding from within new methods to acheive 'if True/Truthy/False/Falsey/Nil' type effects, but without actually using 'if'. It ended in the 'Null Object Pattern' - which i love. The 'Null Object Pattern' certainly seems like it would've solved a lot of my issues.<BR>
			<P>
			Day 3:
			Today I was fortunate (although the coaches might even say unfortunate) enough to be paired again with someone who already understood most things. This helps because it means we can focus on the things we both find difficult. It#s bad because it's not allowing me to try 'learning by teaching'.<BR>
			Today I came across the issue of doubles as objects that can fake any other object (for the purpose of RSpec tests). It irritated me when I discovered that i shouldn't use doubles to simulate instance variables. But i am beginning to understand that if a double was needed to change like that, then your test isn't specific enough, and the class you're testing is probably to dependent on whatever you're mocking.<BR>
			This evening I asked our cohort coach about a bit of PHP. She didn't know PHP but the question was about relative paths and she was able to give me enough info to be able to Google it. This website now uses PHP to import the header and footer code. YAY! My website is now much drier because of 1 PHP command:
			<pre class="code">include($_SERVER['DOCUMENT_ROOT'].'/theme/footer.php');</pre>
			<P>
			Day 4:




<?php include($_SERVER['DOCUMENT_ROOT'].'/theme/footer.php');?>