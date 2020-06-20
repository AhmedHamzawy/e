<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div style="padding:20px;">
    <div class="card">
        <div class="card-content">
            <h1 class="center">Add Page </h1>
            <?php echo form_open_multipart(''); ?>

            <div class="input-field">
                <?php
                echo form_error('name');
                echo form_input('name',set_value('name'),'class="validate"');
                echo form_label('Name','name');
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
            
             <div class="input-field">
                <?php
                echo form_label('Content','content');
                echo form_error('content');
                echo form_textarea('content',set_value('content','',false),'class="materialize-textarea"');
                ?>
            </div>

            <div class="input-field">
                <?php
                echo form_label('Description','description');
                echo form_error('description');
                echo form_input('description',set_value('description'),'class="validate"');
                ?>
            </div>
            <div class="input-field">
                <?php
                echo form_label('Keywords','keywords');
                echo form_error('keywords');
                echo form_input('keywords',set_value('keywords'),'class="validate"');
                ?>
            </div>

            <div class="input-field">
                <?php
                $c = array();
                foreach($categories as $category) { array_push($c,$category->name); }
                echo form_dropdown('category',$c,set_value('category'));
                echo form_label('Category','category');
                ?>
            </div>

                <?php
                echo form_label('Tags','tags');
                echo "<br/>";
                foreach ($tags as $tag) {
                    echo form_checkbox('gtags[]', $tag->id, False,"id='$tag->name'");
                    echo form_label($tag->name,$tag->name);
                    echo "<br/>";
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
            <?php echo form_submit('submit', 'Add Page' , 'class="waves-effect waves-light btn"');?>
            <br/><br/>
            <?php echo anchor('/admin/pages', 'Cancel','class="waves-effect waves-light btn"');?>
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