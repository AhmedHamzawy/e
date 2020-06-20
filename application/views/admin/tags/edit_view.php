<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1>Edit Tag in <?php echo $tag->name ?></h1>
            <?php echo form_open('');?>
          


            <div class="input-field">
                <?php
                echo form_label('Name','name');
                echo form_error('name');
                echo form_input('name',$tag->name);
                ?>
            </div>
          
            
            <div class="input-field">
                <?php
                echo form_label('Description','description');
                echo form_error('description');
                echo form_input('description',set_value('description',$tag->description));
                ?>
            </div>

           
            <div class="center">
            <?php echo form_submit('submit', 'Edit translation', 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin/tags', 'Cancel','class="waves-effect waves-light btn"');?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>