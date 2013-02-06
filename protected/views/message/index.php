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
* @title index.php
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
			<ul class="tab-head">
				<li id="tab1">
					<a id="tab1" href="#" <?php if($page == 'inbox'){ ?>class="select " <?php }?>>Inbox</a>
				</li>
				<li id="tab2"> 
					<a id="tab2" href="#" <?php if($page == 'outbox'){ ?>class="select " <?php }?>>Outbox</a>
				</li>
				<li id="tab3">
					<a id="tab3" href="#" <?php if($page == 'acknowledgement'){ ?>class="select " <?php }?> style="width: 166px;">Delivery acknowledgement</a>
				</li>
			</ul>
			<!--  inbox starts here -->
			<ul id="tab1_data" class="tab-data" <?php if($page == 'inbox'){ ?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<?php if(!empty($inbox)):?>
				<?php foreach($inbox as $inmessage):?>     
				<li>
					<input type="checkbox" />
					<a href="#"><img src="<?php echo Utilities::getProfileImage($inmessage['senderMarryId'],$inmessage['senderImageName']); ?>" alt="" /></a>
					<a href="<?php echo Utilities::createAbsoluteUrl('message','conversation',array()); ?>" class="user_name"><?php echo $inmessage['senderName']; ?></a>
					<div class="user_message"><?php echo $inmessage['message']; ?></div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date"><?php echo $inmessage['sendDate']; ?></div>
					</div>
				</li>
				<?php endforeach;?>  
				<?php else:?> 
				<li>
					No messages found!
				</li>
				<?php endif;?>
			</ul>
			<!--  inbox ends here -->
			<!--  outbox starts here -->
			<ul id="tab2_data" class="tab-data" <?php if($page == 'outbox'){ ?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
			<?php if(!empty($outbox)):?>
				<?php foreach($outbox as $outmessage):?>
				<li class="unread">
					<input type="checkbox" />
					<a href="#"><img src="./images/user/nayana.jpg" alt="" /></a>
					<a href="<?php echo Utilities::createAbsoluteUrl('message','conversation',array()); ?>" class="user_name">Biju George</a>
					<div class="sent_message">Your friends messages will show here. This is a test message..</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
						<div class="date">September 7</div>
					</div>
				</li>
			<?php endforeach;?>
			<?php else:?> 
				<li>
					No messages found!
				</li>  
				<?php endif;?>	
			</ul>
			<!--  outbox ends here -->
			<!--  acknoledge starts here -->
			<ul id="tab3_data" class="tab-data" <?php if($page == 'acknowledgement'){ ?> style="display: block;" <?php }else{ ?> style="display: none;" <?php }?>>
				<?php if(!empty($ackowledge)):?>
				<?php foreach($ackowledge as $ackmessage):?>
				<li>
					<input type="checkbox" />
					<a href="#"><img src="./images/user/anu.jpg" alt="" /></a>
					<a href="<?php echo Utilities::createAbsoluteUrl('message','conversation',array()); ?>" class="user_name">Biju George</a>
					<div class="user_message">She saw your message on 07/07/12 7.30 pm</div>
					<div class="msge_data">
						<a href="#" class="close"></a>
					</div>
				</li>
				<?php endforeach;?> 
				<?php else:?> 
				<li>
					No messages found!
				</li>
				<?php endif;?>
			</ul>
			<!--  acknoledge ends here -->
		</div>
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
		</div>
    </section>
      <?php $this->widget('application.widgets.menu.Rightmenu'); ?>
  