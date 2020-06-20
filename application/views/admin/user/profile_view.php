<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="http://www.pics4world.com/vb/badeencache/2/4382showing.jpg">
      <span class="card-title"><?php echo $user->first_name.' '.$user->last_name ?></span>
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
      <span class="card-title activator grey-text text-darken-4"><i class="medium material-icons left">account_circle</i>
      Full Name : <?php echo $user->first_name.' '.$user->last_name; ?></span>
      <br/><br/>
      <span class="card-title activator grey-text text-darken-4"><i class="medium material-icons left">face</i>
      User Name : <?php echo $user->username  ?>
      </span>
      <br/><br/>
      <span class="card-title activator grey-text text-darken-4"><i class="medium material-icons left">business</i>
      Company : <?php echo $user->company  ?></span>
      <br/><br/>
      <span class="card-title activator grey-text text-darken-4"><i class="medium material-icons left">contact_phone</i>
      Phone : <?php echo $user->phone  ?></span>
      <br/><br/>
      <span class="card-title activator grey-text text-darken-4"><i class="medium material-icons left">email</i>
      Email : <?php echo $user->email  ?></span>
      

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <h1 class="center">Change Info</h1>
      <?php echo form_open('',array('class'=>'form-horizontal'));?>
        <div class="form-group">
          <?php
          echo form_label('First name','first_name');
          echo form_error('first_name');
          echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control"');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Last name','last_name');
          echo form_error('last_name');
          echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control"');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Company','company');
          echo form_error('company');
          echo form_input('company',set_value('company',$user->company),'class="form-control"');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Phone','phone');
          echo form_error('phone');
          echo form_input('phone',set_value('phone',$user->phone),'class="form-control"');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Username','username');
          echo form_error('username');
          echo form_input('username',set_value('username',$user->username),'class="form-control" readonly');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Email','email');
          echo form_error('email');
          echo form_input('email',set_value('email',$user->email),'class="form-control" readonly');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Change password','password');
          echo form_error('password');
          echo form_password('password','','class="form-control"');
          ?>
        </div>
        <div class="form-group">
          <?php
          echo form_label('Confirm changed password','password_confirm');
          echo form_error('password_confirm');
          echo form_password('password_confirm','','class="form-control"');
          ?>
        </div>
        <?php echo form_submit('submit', 'Save profile', 'class="btn btn-primary btn-lg btn-block"');?>
      <?php echo form_close();?>


    </div>
  </div>