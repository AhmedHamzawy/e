<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
      <h1 class="center">Edit group</h1>
      <?php echo form_open('');?>
        <div class="input-field">
          <?php echo form_label('Group name','group_name');?>
          <?php echo form_error('group_name');?>
          <?php echo form_input('group_name',set_value('group_name',$group->name));?>
        </div>
        <div class="input-field">
          <?php echo form_label('Group description','group_description');?>
          <?php echo form_error('group_description');?>
          <?php echo form_input('group_description',set_value('group_description',$group->description));?>
        </div>
        <?php echo form_hidden('group_id',set_value('group_id',$group->id));?>

        <div class="center">
        <?php echo form_submit('submit', 'Edit group', 'class="waves-effect waves-light btn"');?>
        <br/><br/>
        <?php echo anchor('/admin/groups', 'Cancel','class="waves-effect waves-light btn"');?>
        </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>