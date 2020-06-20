<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1 class="center">Edit Category in <?php echo $category->name; ?></h1>
            <?php echo form_open('');?>
           
            <div class="input-field">
                <?php
                echo form_label('Name','name');
                echo form_error('name');
                echo form_input('name',$category->name);
                ?>
            </div>
            <div class="input-field">
                <?php
                $count_pos = array();
                for($i=0; $i<= $position; $i++) { array_push($count_pos,$i); }
                echo form_dropdown('position',$count_pos,$category->position);
                echo form_label('Position','position');
                ?>
            </div>
           
            <div class="input-field">
                <?php
                echo form_error('visible');
                echo form_dropdown('visible',array(0 => 'No' , 1 => 'Yes'), $category->visible == 0 ? 0 : 1);
                echo form_label('Visible','visible');
                ?>
            </div>

          
           
           
            <div class="center">
            <?php echo form_submit('submit', 'Edit Category', 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin/categories', 'Cancel','class="waves-effect waves-light btn"');?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>