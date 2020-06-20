<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="center" style="margin-top: 5px;">
  <a href="<?php echo site_url('admin/users/create');?>" class="btn-floating btn-large waves-effect waves-light">
    <i class="material-icons">add</i>
  </a>
</div>
<?php
if(!empty($users))
{
echo '<table class="striped">';
echo '<thead>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Name</th>
    <th>Email</th>
    <th>Last login</th>
    <th>Operations</th>
  </tr>
</thead>';
foreach($users as $user)
{
echo '<tr>';
echo '<td>'.$user->id.'</td>
<td>'.$user->username.'</td>
<td>'.$user->first_name.' '.$user->last_name.'</td>
<td>'.$user->email.'</td>
<td>'.date('Y-m-d H:i:s', $user->last_login).'</td>
<td>';
if($current_user->id != $user->id) echo anchor('admin/users/edit/'.$user->id,'<i class="material-icons">mode_edit</i>').' '.anchor('admin/users/delete/'.$user->id,'
<i class="material-icons">delete</i>');else echo '&nbsp;';
echo '</td>';
echo '</tr>';
}
echo '</table>';
}
?>
 