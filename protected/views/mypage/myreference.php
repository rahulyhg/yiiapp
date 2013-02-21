    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
<section class="data-contnr2">
<ul class="accOverview pmB10">
		<li class="mT8">
			<a class="type4" href="<?php echo Utilities::createAbsoluteUrl('contact','referenceedit'); ?>" id="referenceEdit">Edit Reference</a>				
		</li>
		<?php if(isset($referenceList))
			{
				$index = 1;
				foreach ($referenceList as $value) {
					
			?>	
        <ul class="accOverview pmB10">
			<li>
				<div class="refHead">
					<div class="headT">Referance Person <?php echo $index;?></div>
				</div>
			</li>
			<li>
				<div class="leftC">Contact Persons Name</div>
				<div class="rightC">
					<strong>:</strong> <span><?php echo $value->referName?></span>
				</div>
			</li>
			<li>
				<div class="leftC">Convineance Time to call</div>
				<div class="rightC">
					<strong>:</strong> <span><?php echo $value->referCallFrom?> </span>
				</div>
			</li>
			<li>
				<div class="leftC">Communication address</div>
				<div class="rightC">
					<strong>:</strong>
					<div class="addrs">
						<span><?php if(isset($value->referHouseName))echo $value->referHouseName;?></span>
						<span><?php if(isset($value->referPostOffice)) echo $value->referPostOffice; 	?></span>
						<span><?php if(isset($value->referCity))echo $value->referCity?></span>
						<span><?php if(isset($value->referState) || isset($value->referCountry)) { $str = $value->referState.','.$value->referCountry; echo trim($str,","); }?></span>
						<span><?php if($value->referPostcode !=0 )echo $value->referPostcode?></span>
					</div>
				</div>
			</li>
			<li>
				<div class="leftC">Email ID.</div>
				<div class="rightC">
					<strong>:</strong> <span><?php echo $value->referEmail?></span>
				</div>
			</li>
			<li>
				<div class="leftC">Occupation</div>
				<div class="rightC">
					<strong>:</strong> <span><?php echo $value->referOccupation?></span>
				</div>
			</li>
		</ul>
			<?php 
				$index++;
				}
			}
			?>
    </section>
	<?php $this->widget('application.widgets.menu.Rightmenu'); ?>
	
	
	<script type="text/javascript">
$(document).ready(function(){
    $("#referenceEdit").colorbox({iframe:true, width:"860", height:"900",overlayClose: false});
  });


</script>	