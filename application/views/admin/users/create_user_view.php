<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
      <h1 class="center">Create user</h1>
      <?php echo form_open_multipart(''); ?>
      <div class="input-field">
        <?php
        echo form_label('First name','first_name');
        echo form_error('first_name');
        echo form_input('first_name',set_value('first_name'),'class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Last name','last_name');
        echo form_error('last_name');
        echo form_input('last_name',set_value('last_name'),'class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Company','company');
        echo form_error('company');
        echo form_input('company',set_value('company'),'class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Phone','phone');
        echo form_error('phone');
        echo form_input('phone',set_value('phone'),'class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Username','username');
        echo form_error('username');
        echo form_input('username',set_value('username'),'class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Email','email');
        echo form_error('email');
        echo form_input('email','','class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Password','password');
        echo form_error('password');
        echo form_password('password','','class="form-control"');
        ?>
      </div>
      <div class="input-field">
        <?php
        echo form_label('Confirm password','password_confirm');
        echo form_error('password_confirm');
        echo form_password('password_confirm','','class="form-control"');
        ?>
      </div>

        <?php
        if(isset($groups))
        {
          echo form_label('Groups','groups[]');
          echo '&nbsp;&nbsp;&nbsp;';
          foreach($groups as $group)
          {
            echo form_checkbox('groups[]', $group->id, set_checkbox('groups[]', $group->id),"id='$group->name'");
            echo form_label($group->name,$group->name);
            echo '&nbsp;&nbsp;&nbsp;';
          }
        }
        ?>


       <div class="input-field">
                
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" name="image" onchange="readURL(this);">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>

        </div>

         <div class="image-wrapper" style="margin: 50px 350px;">
                    <img id="blah" src="#" alt="image" />
                    </div>
                     <div class="space"></div>
           

      <div class="center">
      <?php echo form_submit('submit', 'Create user', 'class="waves-effect waves-light btn"');?>
      <br/><br/>
      <?php echo anchor('/admin/users', 'Cancel','class="waves-effect waves-light btn"');?>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>

<script type="text/javascript">
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .css('width' , '100%')
                    .css('height' , '400px')
            };

            $('.space').css('margin-top' , '150px');
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>