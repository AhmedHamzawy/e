<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1 class="center">Add Category</h1>
            <?php echo form_open('');?>
            


            <div class="input-field">
                <?php
                echo form_label('Name','name');
                echo form_error('name');
                echo form_input('name',set_value('name'));
                ?>
            </div>

            <div class="input-field">
                <?php
                $count_pos = array();
                for($i=0; $i<= $position; $i++) { array_push($count_pos,$i); }
                echo form_dropdown('position',$count_pos,set_value('position',(isset($position) ? $position : '0')));
                echo form_label('Position','position');
                ?>
            </div>
           
            <div class="input-field">
                <?php
                echo form_error('visible');
                echo form_dropdown('visible',array(0 => 'No' , 1 => 'Yes'),set_value('option',(isset($option) ? $option : '0')));
                echo form_label('Visible','visible');
                ?>
            </div>
           
            
            <div class="center">
            <?php echo form_submit('submit', 'Add Category', 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin/pages', 'Cancel','class="waves-effect waves-light btn"');?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>