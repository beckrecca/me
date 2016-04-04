@extends('master')

@section('title', 'Resume')

@section('header')
    <header>
    	<div class="container">
    		<h2>Resume</h2>
    		<a href="download-resume">Click here</a> to download a PDF version designed by 
    		the talented <a href="http://erinthorpfreelancing.com/" target="_blank">Erin Thorp</a>.
    	</div>
	</header>
@stop

@section('content')
	<div class="row">

		<div class="col-sm-7">

			<h3>Education</h3>

			<p>
				<span class="resume-date">January 2011 – present</span> <br>
				<a href="http://extension.harvard.edu" target="_blank">Harvard Extension School</a>, Cambridge, MA <br>
				Candidate for ALM in Extension Studies, admitted January 2014 <br>
				Concentration: Information Technology <br>
				Major: Digital Media Arts and Instructional Design <br>
				Current GPA: 3.95 <br>
				<a href="#" id="show-coursework">Click for courses covered</a>
			</p>

			<p>
				<span class="resume-date">September 2006 – January 2010</span>  <br>
				<a href="http://bu.edu" target="_blank">Boston University</a>, Boston, MA  <br>
				Major: Linguistics 	 <br>
				Minor: French 	 <br>	
				GPA: 3.82  <br>
				Awards: 
				<ul class="resume-list">
					<li><a href="http://ling.bu.edu/people/awards" target="_blank">Barbara Argote Junior Award in Linguistics 2009</a></li>
					<li><a href="http://ling.bu.edu/people/awards">Ken Hale Award 2010</a></li>
				   	<li>College of Arts and Sciences College Scholars Member</li>
				</ul>
			</p>

			<h3>Work Experience</h3>

			<p>
				<span class="resume-date">October 2010 – present</span><br>
				<a href="http://extension.harvard.edu" target="_blank">Harvard Extension School</a>, Academic Services Office, Cambridge MA<br>
				Records Specialist
				<ul class="resume-list">
					<li>In-person, telephone, and email reception and for a high-volume student service office.</li>
					<li>Process requests for transcripts and letters of enrollment, research student records, verify student status, maintain confidentiality policies.</li>
				</ul>
			</p>

			<p>
				<span class="resume-date">February 2010 – August 2010</span><br>
				<a href="http://summer.harvard.edu" target="_blank">Harvard Summer School</a>, Registrar’s Office, Cambridge MA <br>
				I-20 Assistant 
				<ul class="resume-list">
					<li>Process paper applications for the I-20 Certificate of Eligibility for a student visa. </li>
					<li>Timely, accurate data entry, handling a high volume of submissions.</li>
				</ul>
			</p>

			<p>
				<span class="resume-date">May 2008 – January 2010 (during summer and winter breaks)</span> <br>
				<a href="http://www.communitybank.com" target="_blank">The Community Bank</a> (now Eastern Bank), Bridgewater MA <br>
				Teller 
				<ul class="resume-list">
					<li>Provide customer service, answer phones, sell products, contact customers with updates. </li>
					<li>Handle large cash transactions, balance ATM transactions, scan deposited checks, file reports. </li>
				</ul>
			</p>

			<p>
				<span class="resume-date">September 2006 – December 2009 (during Fall and Spring semesters)</span> <br>
				<a href="http://www.bu.edu/cas/" target="_blank">College of Arts and Sciences</a> Business Office, Boston University, Boston MA <br>
				Office Assistant 
				<ul class="resume-list">
					<li>Student employee assisting reception, accounting and payroll staff.</li>
					<li>Answer phones, file records, copy and hand-deliver documents, make bank deposits, pick up and distribute paychecks.</li>
				</ul>
			</p>
		</div>
		<div class="col-sm-5">
			<div id="coursework" class="hidden">
				<p><a href="#" id="hide">Hide</a></p>
				<h4>IT Course Work</h4>
				<ul>
					<li>
						Fall 2011: Introduction to Java/Computer Science I</li>
						<ul>
							<li>problem-solving, algorithmic development, object-oriented design</li>
						</ul>
					<li>Fall 2012: Intensive Introduction to Computer Science</li>
						<ul>
							<li>C, PHP, JavaScript, SQL, CSS, HTML</li>
						</ul>
					<li>Spring 2013: Introduction to Java/Computer Science II</li>
						<ul>
							<li>file I/O, exception handling, events, GUI with Swing, MIPS</li>
						</ul>
					<li>Fall 2013: Understanding and Developing Interactive Media</li>
						<ul>
							<li>HTML, CSS, Bootstrap, JavaScript</li>
						</ul>
					<li>Spring 2014: Web Content Management Systems</li>
						<ul>
							<li>Joomla, Wordpress, Drupal</li>
						</ul>
					<li>Fall 2014: Dynamic Web Applications</li>
						<ul>
							<li>PHP, model-view-controller frameworks, Laravel</li>
						</ul>
					<li>Spring 2015: Introduction to Web Programming with JavaScript</li>
						<ul>
							<li>DOM manipulation and traversal, event handling, objects, form validation, jQuery, Canvas</li>
						</ul>
					<li>Spring 2015: Exploring Digital Media</li>
						<ul>
							<li>photography, audio, video</li>
						</ul>
					<li>Fall 2015: Introduction to Instructional Design</li>
						<ul>
							<li>instructional design theories and frameworks</li>
						</ul>
				</ul>
			</div>
		</div>
	</div>
@stop

@section('end')
	<script>
		$('#show-coursework').click(function(){
			$('#coursework').removeClass('hidden');
		});
		$('#hide').click(function(){
			$('#coursework').addClass('hidden');
		});
	</script>
@stop