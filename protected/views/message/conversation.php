<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Dileep Gopalan
* @title conversation.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
      <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
   <section class="data-contnr2">
        <h1 class="mB10">Messages</h1>
        <div class="interstTab">
			<div class="edit-option">
				<div class="check">
					<input type="checkbox" />
					<span>Sellect All</span>
				</div>
				<div class="check">
					<span><a href="#">Delete</a></span>
				</div>
			</div>
			<ul class="msgHead">
				<li>
					<a href="<?php echo Utilities::createAbsoluteUrl('message','index',array()); ?>" class="wid120">Back to messages</a>
				</li>
			</ul>
			<ul class="tab-data" >
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/biju.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="sent_message">Your messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="recvd_message">Your friend messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/biju.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="sent_message">Your messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="recvd_message">Your friend messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/biju.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="sent_message">Your messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="recvd_message">Your friend messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/biju.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="sent_message">Your messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="recvd_message">Your friend messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/biju.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="sent_message">Your messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#" class="user_name">Biju George</a>
					<div class="recvd_message">Your friend messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
				<li>
					<div class="message_reply">
						<textarea type="text" placeholder="Type your message here.." ></textarea>
						<a href="#" class="type6">Send</a>
					</div>
					
				</li>
			</ul>
			
		</div>
    </section>
      <?php $this->widget('application.widgets.menu.Rightmenu'); ?>
  