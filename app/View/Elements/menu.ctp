<script type="text/javascript">
           


        </script>  
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account">
                            
                           <?php echo $this->Html->image('shared/nav/nav_myaccount.gif',array('width'=>'93','height'=>'14')); ?>
                        </div>
			<div class="nav-divider">&nbsp;</div>
			<a href="" id="logout">
                            <?php echo $this->Html->image('shared/nav/nav_logout.gif',array('width'=>'64','height'=>'14')); ?>
                        <div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="<?php if(($this->params['controller']=="Groups")||($this->params['controller']=="Commercials")) echo "current"; else echo "select";?>"><li><a href="#nogo"><b>Activité</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="<?php if(($this->params['controller']=="Groups")||($this->params['controller']=="Commercials")) echo "select_sub show"; else echo "select_sub";?>">
			<ul class="sub">
				<li class="<?php if($this->params['controller']=="Groups") echo "sub_show";?>"><a  href="<?php echo $this->Html->url(array("controller" => "Groups", "action" => "index")); ?>">Groups</a></li>
				<li class="<?php if($this->params['controller']=="Commercials") echo "sub_show";?>" ><a  href="<?php echo $this->Html->url(array("controller" => "Commercials", "action" => "index")); ?>">Représentants</a></li>
			
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		  <ul class="<?php if(($this->params['controller']=="Collections")) echo "current"; else echo "select";?>"><li><a href="#nogo"><b>ZIED</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="<?php if(($this->params['controller']=="Collections")) echo "select_sub show"; else echo "select_sub";?>">
			<ul class="sub">
				
				<li class="<?php if($this->params['controller']=="Collections") echo "sub_show";?>"><a  href="<?php echo $this->Html->url(array("controller" => "Collections", "action" => "index")); ?>">Collections</a></li>
			</ul>
		</div>                  
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
