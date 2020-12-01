<?php 
	
	[$dateParam, $locationParam, $typeParam] = $this->getParams();
	
?>
	<div class="row-fluid">
	
	<div class="list-filter" id="filter-list-filter">
		
	    <form id="filter-form" class="form-inline" accept-charset="utf-8" method="GET" action="<?= admin_url('thoughtco/ordersummary/summary'); ?>" role="form">
		    	
	        <div class="d-sm-flex flex-sm-wrap w-100 no-gutters">
		        
		        <?php
			        if (sizeof($this->getLocations()) > 1){
				?>
				<div class="col col-sm-2 mr-3">
					
					<div class="filter-scope date form-group">
						
						<select name="location" class="form-control select2-hidden-accessible">
							<?php 
								foreach ($this->getLocations() as $key=>$location) echo '<option value="'.$key.'"'.($key == $locationParam ? ' selected' : '').'>'.$location.'</option>'; 
							?>
            			</select>
            			
            		</div>
            		
		        </div>	
		        <?php 
			        }
			    ?>	        
		        
				<div class="col col-sm-2 mr-5">
					
					<div class="filter-scope date form-group">
						
						<div id="datepicker-formfixeddate-fixed-date" class="control-datepicker">
                    
							<div class="input-group">
								<input type="text" id="datepicker-formfixeddate-date-fixed-date" class="form-control" autocomplete="off" value="<?= $dateParam->format('d-m-Y'); ?>" data-control="datepicker" data-format="dd-mm-yyyy">
							    <span class="input-group-prepend" data-original-title="" title="">
							        <span class="input-group-icon" data-original-title="" title=""><i class="fa fa-calendar-o"></i></span> 
							    </span>
							    <input type="hidden" name="date" value="<?= $dateParam->format('Y-m-d'); ?>" data-datepicker-value="<?= $dateParam->format('Y-m-d'); ?>">
							</div>
            			
            			</div>						
            			
            		</div>
            		
		        </div>
		        
				<div class="col col-sm-2 mr-3">
					
					<button type="submit" class="btn btn-primary">View</button>
					
				</div>
        
	    	</div>
	    	
		</form>
		
	</div>
	
    <?= $this->renderResults(); ?>
    
</div>