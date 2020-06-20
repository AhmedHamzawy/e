<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="center" style="margin-top: 5px;">
  <a href="<?php echo site_url('admin/groups/create');?>" class="btn-floating btn-large waves-effect waves-light">
    <i class="material-icons">add</i>
  </a>
</div>
<?php
if(!empty($groups))
{
echo '<table class="striped">';
echo '<thead>
  <tr>
    <th>ID</th>
    <th>Group name</th>
    <th>Group description</th>
    <th>Operations</th>
  </tr>
</thead>';
foreach($groups as $group)
{
echo '<tr>';
echo '<td>'.$group->id.'</td>
<td>'.anchor('admin/users/index/'.$group->id,$group->name).'</td>
<td>'.$group->description.'</td>
<td>'.anchor('admin/groups/edit/'.$group->id,'<i class="material-icons">mode_edit</i>');
if(!in_array($group->name, array('admin','members'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<i class="material-icons">delete</i>');
}
echo '</table>';
}
?>
 