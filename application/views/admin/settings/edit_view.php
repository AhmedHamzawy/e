<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1 class="center">Settings</h1>
            <?php echo form_open_multipart(''); ?>
          
            <div class="input-field">
                <?php
                echo form_label('Name','name');
                echo form_error('name');
                echo form_input('name',$setting->name);
                ?>
            </div>
            
            <div class="input-field">
                <?php
                echo form_label('Description','description');
                echo form_error('description');
                echo form_textarea('description',set_value('description',$setting->description,false),'class="materialize-textarea"');
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Town','town');
                echo form_error('town');
                echo form_input('town',set_value('town',$setting->town));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('County','county');
                echo form_error('county');
                echo form_input('county',set_value('county',$setting->county));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Post_code','post_code');
                echo form_error('post_code');
                echo form_input('post_code',set_value('post_code',$setting->post_code));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Country','country');
                echo form_error('country');
                echo form_input('country',set_value('country',$setting->country));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Telephone','telephone');
                echo form_error('telephone');
                echo form_input('telephone',set_value('telephone',$setting->telephone));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Email','email');
                echo form_error('email');
                echo form_input('email',set_value('email',$setting->email));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Website','website');
                echo form_error('website');
                echo form_input('website',set_value('website',$setting->website));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Website','website');
                echo form_error('website');
                echo form_input('website',set_value('website',$setting->website));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Facebook','Facebook');
                echo form_error('facebook');
                echo form_input('facebook',set_value('facebook',$setting->facebook));
                ?>
            </div>


            <div class="input-field">
                <?php
                echo form_label('twitter','twitter');
                echo form_error('twitter');
                echo form_input('twitter',set_value('twitter',$setting->twitter));
                ?>
            </div>


            <div class="input-field">
                <?php
                echo form_label('instagram','instagram');
                echo form_error('instagram');
                echo form_input('instagram',set_value('instagram',$setting->instagram));
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('youtube','youtube');
                echo form_error('youtube');
                echo form_input('youtube',set_value('youtube',$setting->youtube));
                ?>
            </div>

            


        
            <div class="center">
            <?php echo form_submit('submit', 'Change Settings', 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin', 'Cancel','class="waves-effect waves-light btn"');?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>