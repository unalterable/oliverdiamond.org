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
			For anyone reading this interested in the actual curriculum, it's all here: **LINK!!!!!!!**. Simply: this week we learn TDD **LINK TO WIKI**, through a simulated Boris Bike system. It's tedious work (ish) but I understand it's point. First we write a Domain Model from a User Story, then we write a Feature Test. Then we write a Unit Test, run it, watch it fail. Then finally we can write what, at this stage, is probably only 1 method in 1 class with 1 line of code. Pass the test. Refactor. Wash, rinse, repeat, in excruciatingly slow increments. If it wasn't for the pair element, which means you are teaching, discussing, Googling, and debating, at every stage, i may've gone mad. But i do understand the point.
			<BR>
			I also watched a wonderful YouTube lecture by Sandi Metz **LINK** that discusses removing conditionals from your program. I learned that she started in SmallTalk, which has only 6 keywords (as opposed to Ruby's ~40 and Java's 1000's). The idea appeals to me, and I like the idea of pushing conditionals out (or at least to the edge) of your program. The lecture looked at the idea of breaking open the 'ObjectClass', 'TrueClass', 'FalseClass', and 'NilClass', and yielding from within new methods to acheive 'if True/Truthy/False/Falsey/Nil' type effects, but without actually using 'if'. It ended in the 'Null Object Pattern' - which i love. The 'Null Object Pattern' certainly seems like it would've solved a lot of my issues.<BR>
			<P>
			Day 3:<BR>
			Today I was fortunate (although the coaches might even say unfortunate) enough to be paired again with someone who already understood most things. This helps because it means we can focus on the things we both find difficult. It#s bad because it's not allowing me to try 'learning by teaching'.<BR>
			Today I came across the issue of doubles as objects that can fake any other object (for the purpose of RSpec tests). It irritated me when I discovered that i shouldn't use doubles to simulate instance variables. But i am beginning to understand that if a double was needed to change like that, then your test isn't specific enough, and the class you're testing is probably to dependent on whatever you're mocking.<BR>
			This evening I asked our cohort coach about a bit of PHP. She didn't know PHP but the question was about relative paths and she was able to give me enough info to be able to Google it. This website now uses PHP to import the header and footer code. YAY! My website is now much DRYer because of 1 PHP command:
			<pre class="code">include($_SERVER['DOCUMENT_ROOT'].'/theme/footer.php');</pre>
			<P>
			Day 4: <BR>
			Today I really learned something. Yesterday I was annoyed at how double's can't fake instance variables. This made NO sense to me, given that you may want a test to change another object. HOWEVER, if your tests on class A require another object B to change, then it's not just testing class A, it's testing class B too. So your tests need to get more specific and less. So I did some good reading about London vs Chicago testing. ***LINK TO A SHORT CHAT ABOUT LONDON VS CHICAGO
			<P>
			Day 5: <BR>
			So, as I sit down to write this I'm still fuming about something: I seem to have fallen out with my father over his anger issues. It's a pity because it really effected my wellbeing today.<BR>
			<BR>
			I write this, not to broadcast my feelings on the internet, but to explain that the daily group meditation, offered by Makers Academy, really helped. As did the group mentality of Makers students and the atmosphere cultivated by the whole place. I explained that I was angry and frustrated to anyone, and they seemed very (almost rediculously) understanding. So, I thought I'd mention that: Day 4 and these guys are already more understanding of my feelings than my own family.<BR>
			<BR>
			Also, in meditation, my pair partner for today told me I was very good at explaining things. I wonder how much he was being caught up in the 'saying nice things to people' thing we were doing, but it was still extremely nice to hear. It was one thing I was very worried about: Because I do feel stronger than most on my course, I worry that I'm not fullfilling my. Makers' philosophy says that, as a pair, you should always be moving at the pace of the 'weaker' (for lack of a better word) half. Teaching helps you understand.<BR>
			<BR>
			Putting that aside, we did 'retros' around 2 today. Apparently 'retros' are there to go over what we've learned that week. It provides a means of catching-up those who are still struggling with some of week's new concepts. As a group we also decided to do our own Git workshop together on Tuesday morning at 9am. I am still slightly in awe of the group collaborative mentality, and I should probably make more of an effort to help foster it.<BR>
			<BR>
			Lastly we all had a piss up, apparently thrown for us by the senior cohort and the staff. Free beer and karaoke. Who could start a weekend better, eh?<BR>
			<P>
			Weekend:<BR>
			This weekend we have an additional task. The weekend tasks you do alone (the only thing you do alone).


<?php include($_SERVER['DOCUMENT_ROOT'].'/theme/footer.php');?>