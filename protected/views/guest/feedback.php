<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title feedback.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

		<div class="subContent">
			<section class="subHead">
				<h1>Feedback</h1>
			</section>
			<section class="subContnr">
			<form id="feedback" name="feedback" method="post"  action="/guest/feedback">
				<ul class="accOverview pTB15">
					<li class="mT15">
						<p>1. How do you rate the user friendliness of the site?</p>
						<div class="radio wid120">
							<input type="radio" name="a"> <span>Poor</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="a"> <span>Bad</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="a"> <span>Average</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="a"> <span>Good</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="a"> <span>Excellent</span>
						</div>
					</li>
					<li class="mT15">
						<p>2. How would you describe marrydoor services in one word?</p>
						<div class="radio wid120">
							<input type="radio" name="b"> <span>Poor</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="b"> <span>Bad</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="b"> <span>Average</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="b"> <span>Good</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="b"> <span>Excellent</span>
						</div>
					</li>
					<li class="mT15">
						<p>3. How do you rate our privacy measures?</p>
						<div class="radio wid120">
							<input type="radio" name="c"> <span>Poor</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="c"> <span>Bad</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="c"> <span>Average</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="c"> <span>Good</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="c"> <span>Excellent</span>
						</div>
					</li>
					<li class="mT15">
						<p>4. How good is our payment method?  </p>
						<div class="radio wid120">
							<input type="radio" name="d"> <span>Poor</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="d"> <span>Bad</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="d"> <span>Average</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="d"> <span>Good</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="d"> <span>Excellent</span>
						</div>
					</li>
					<li class="mT15">
						<p>5. How good is our resellers?  </p>
						<div class="radio wid120">
							<input type="radio" name="e"> <span>Poor</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="e"> <span>Bad</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="e"> <span>Average</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="e"> <span>Good</span>
						</div>
						<div class="radio wid120">
							<input type="radio" name="e"> <span>Excellent</span>
						</div>
					</li>
					
				</ul>
				<ul class="accOverview pTB15">
					<li class="mT15">
						<div class="feedQ">Name</div>
						<div class="feedA"><input type="text" /></div>
					</li>
					<li>
						<div class="feedQ">Other</div>
						<div class="feedA"><input type="text" /></div>
					</li>
					<li>
						<div class="feedQ">Feedback</div>
						<div class="feedA">
							<select>
								<option>Sugestion</option>
								<option>Complaint</option>
							</select>
						</div>
					</li>
					<li>
						<div class="feedQ">Message</div>
						<div class="feedA">
							<textarea></textarea>
						</div>
					</li>
					<li>
						<a href="#" class="type2">Submit</a>
						<a href="#" class="type2">Reset</a>
					</li>
				</ul>
				</form>
			</section>
		