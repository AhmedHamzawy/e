<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="center" style="margin-top: 5px;">
  <a href="<?php echo site_url('admin/categories/create');?>" class="btn-floating btn-large waves-effect waves-light">
    <i class="material-icons">add</i>
  </a>
</div>
<?php
if(!empty($categories))
{
echo '<table class="striped">';
echo '<thead>
  <tr>
    <th>ID</th>
    <th>Category name</th>
    <th>Operations</th>
  </tr>
</thead>';
foreach($categories as $category)
{
echo '<tr>';
echo '<td>'.$category->id.'</td>
<td>'.$category->name.'</td>
<td>';
echo anchor('admin/categories/edit/'.$category->id,'<i class="material-icons">mode_edit</i>').' '.anchor('admin/categories/delete/'.$category->id,'
<i class="material-icons">delete</i>');
echo '</td>';
echo '</tr>';
}
echo '</table>';
}
?>
 