
<div class='col-sm-5' style='margin-bottom:20px'>
  <form action="search" method="post">
   <div class="sparkline16-list responsive-mg-b-30" >
                            <div class="sparkline16-hd">
                                <div class="main-sparkline16-hd">
                                    <h1>Date picker</h1>
                                </div>
                            </div>
                            <div class="sparkline16-graph">
                                <div class="date-picker-inner">
                                
                                    <div class="form-group data-custon-pick" id="data_2">
                                        <label>Year</label>
                                        <div class="input-group date">

                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <select class="form-control" name='year'>
                                            <option value=""></option>
                                                
                                                <?php
                                                    for ($year = (int)date('Y'); 2015 <= $year; $year--): ?>
                                                    <option value="<?=$year;?>"><?=$year;?></option>
                                                <?php endfor; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group data-custon-pick" id="data_3">
                                        <label>Month</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <select class="form-control" name='mounth'>
                                                <option value=""></option>

                                                <option value="1">Janury</option>
                                                <option value="2">february</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Augest</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group data-custon-pick" id="data_4">
                                        <label>Day</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <select  class="form-control" name="day" id="">
                                                <option value=""></option>
                                               <?php for($i=1; $i<=31; $i++):?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                    <?php endfor;?>
                                            </select>
                                        </div>

                                    </div>
                                    <input type='submit' name='submit' value='search' class=' btn btn-primary pull-right'>
                                    </br>

                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class='col-sm-7'>
                <div class="sparkline16-list responsive-mg-b-30 main-sparkline16-hd" >
                <h1>Description</h1>
                <h4><?php if(isset($_POST['year'])!=null){
                    echo $_POST['year'];
                    }
                  if(isset($_POST['mounth'])!=null){
                        echo '/'.$_POST['mounth'];
                        }
                   if(isset($_POST['day'])!=null){
                            echo '/'.$_POST['day'];
                            }
                 
                    ?>
                    
                  </h4>
                
                <?php $totalIncome=0;
                    $totalOutcome=0;
                    $totalExpences=0;
                    $total=0;
                //calculate total Incomes...
                foreach ($result as $object):?>
                   <?php $totalExpences +=$object->amount;?> 
                <?php endforeach;?>
                
                <p>Total Expenses : <?php echo $totalExpences;?></p> 
                
                <?php 
                //calculate total Outcomes...
                foreach ($outcomes as $object):?>
                   <?php $totalOutcome+=$object->outcomeAmount;?> 
                <?php endforeach;?>
                <p>Total Outcome : <?php echo $totalOutcome;?></p> 
                <?php
                //calculate total expences...
                foreach ($incomes as $income):?>
                   <?php $totalIncome+=$income->amount;?> 
                <?php endforeach;?>
                <p>Total Income : <?php echo $totalIncome;?></p> 
                <?php $total=$totalIncome+$totalOutcome-$totalExpences;?>
                <?php if($total>$totalIncome){
                    $profit=$total-$totalIncome;
                    }else{
                    $profit=0;

                    }
                    if($total<$totalIncome){
                        $loss=$totalIncome-$total;
                    }
                    else{
                        $loss=0;
                    }
                    
                    ?>
                    <p>Total Invest :<?php echo $totalIncome+$totalOutcome?></p>
                    <p>Profit :<?php echo $profit;?></p>
                    <p>loss : <?php echo $loss;?></p>
                
                
                
                </div>
                
                
            </div>

<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Expenses <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="idusers">ID</th>
                                                <th data-field="FirstName" data-editable="true">By</th>
                                                <th data-field="lastName" data-editable="true">Amount</th>
                                                <th data-field="email" data-editable="true">Description</th>
                                                <th data-field="userName" data-editable="true">Date</th>
                                                <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                    <th>Action</th>
                                                <?php endif;?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($result as $object):?>
                                                <tr>
                                                    <td><?php echo $object->id;?></td>
                                                    <td><?php echo $object->fullName;?></td>
                                                    <td><?php echo $object->amount;?></td>
                                                    <td><?php echo $object->description;?></td>
                                                    <td><?php echo $object->expenceDate;?></td>
                                                    <?php if($this->session->userdata('user_type') == 'admin'):?>
                                                        <td>
                                                            <a href="<?php echo base_url();?>forms/expence/edit/<?php echo $object->id;?>"><i class="fa fa-pencil-square-o btn btn-success pd-setting-ed" aria-hidden="true"></i></a> /
                                                            <a href="<?php echo base_url();?>forms/expence/delete/?id=<?php echo $object->id;?>"> <i class="fa fa-trash pd-setting-ed btn btn-danger" aria-hidden="true"></i></a>
                                                        </td>
                                                    <?php endif;?>
                                                </tr> 
                                            <?php endforeach;?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

