<div role="tabpanel" class="tab-pane" id="tab_adviser">
	<div class="panel panel-default" style="margin-top:10px">
		<div class="panel-body">    
		<!--Adviser tab HERE-->	
		
			<div class="col-md-3">
				<div class="form-group">
					<?Php	if ($advisers != null){	?>
						<select id="adviser_sort_by" class="form-control">
							<option value="adviser_sort_alphabetically">Sort alphabetically</option>
							<option value="adviser_sort_by_advisers">Sort by number of graduates</option>
						</select>
					<?Php	}	?>
				</div>
			</div><!-- /.col-lg-3 -->
			<div class="col-md-3">
				<!-- Blank space -->
			</div>
			
			<div class="col-lg-6">
				<div class="form-inline">
					<?=form_open('admin_control/search_adviser');?>
					<div class="input-group">
						<input name="search_adviser_text"type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
					<div class="input-group">
					  <?php 
							$attr = array(
								'role'          => 'button',
								'class' 	  	=> "btn btn-primary",
								'data-toggle' 	=> "modal",
								'data-target' 	=> "#generate_Modal",
								);
							echo anchor('#generate_Modal',"GENERATE ACCOUNT <span class='glyphicon glyphicon-print' aria-hidden='true'></span>",$attr);	
						?>
					</div>
					<?=form_close();?>
				</div>
			</div><!-- /.col-lg-6 -->
		
			<?Php
				echo br(3);	
				if ($advisers != null){
			?>
					<table class="table table-hover table-striped">
						<th>Employee Number</th>
						<th>Name</th>
						<th>Email Address</th>
						<th>Contact No.</th>
						<th>Office</th>
						<th></th>
			<?Php		foreach ($advisers as $row){
				
							echo form_open('');
			?>
						<tr>
							<td>
								<?= $row->id;?>
							</td>
							
							<td>
								<?= $row->name;?>
							</td>
							
							<td>
								<?= $row->email_add;?>
							</td>
							
							<td>
								<?= $row->contact_no;?>
							</td>
							
							<td>
								<?= $row->office_no;?>
							</td>
							
							<td>
								<div class="btn-group btn-block">
								<?Php						
									$attr = array(
											'value'         => 'Do Something',
											'class' 	  => "btn btn-primary",
											);
									echo form_submit($attr);
									echo form_close();
								?>
								</div>
							</td>
						</tr>
			<?Php
					}
			?>
					</table>
			<?Php
				}else echo heading("No Students.",4);
			?>
		
		<!--Adviser tab HERE-->			
		</div>
	</div>
</div>