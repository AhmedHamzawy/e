<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1 class="center">Add Tag </h1>
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
                echo form_label('Description','description');
                echo form_error('description');
                echo form_input('description',set_value('description'));
                ?>
            </div>
            



            <div class="center">
            <?php echo form_submit('submit', 'Add Tag', 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin/tags', 'Cancel','class="waves-effect waves-light btn"');?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>