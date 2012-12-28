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
* @title album.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
    <section class="data-contnr2">
        <h1>My Family Album</h1>
		<h5 class="width100 mT30">Please mouse hover on a photo to delete.</h5>
        <div class="profPicC">
            <div class="picContnr">
				<div class="ppOpt">
					<span title="Passport">Father</span><br />
					<a href="#" title="click to delete this picture">Delete</a>
				</div>
				<img src="./images/user/lilly.png" alt="" />
			</div>
			<div class="picContnr">
				<div class="ppOpt">
					<span title="Passport">Mother</span><br />
					<a href="#" title="click to delete this picture">Delete</a>
				</div>
				<img src="./images/user/lilly.png" alt="" />
			</div>
			<div class="picContnr">
				<div class="ppOpt">
					<span title="Passport">Father</span><br />
					<a href="#" title="click to delete this picture">Delete</a>
				</div>
				<img src="./images/user/lilly.png" alt="" />
			</div>
			<div class="picContnr">
				<div class="ppOpt">
					<span title="Passport">Brother</span><br />
					<a href="#" title="click to delete this picture">Delete</a>
				</div>
				<img src="./images/user/lilly.png" alt="" />
			</div>
        </div>
        <a href="#" class="type5">Add More Photos</a>
    </section>
    	<!-- right menu -->
	<?php $this->widget('application.widgets.menu.Rightmenu'); ?> 
	<!-- right menu ends -->