<H1><?php echo $msg?></H1>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Tel</th>
<th>Email</th>
<th>Address</th>
<th>Username</th>
<th>Password</th>
</tr>
<?php foreach($rec as $row){ ?>
<tr>
<td><?php echo $row->id; ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->tel; ?></td>
<td><?php echo $row->email; ?></td>
<td><?php echo $row->address; ?></td>
<td><?php echo $row->username; ?></td>
<td><?php echo $row->password; ?></td>
</tr>
<?php
}
?>
</table>
<a href="../controller/form_register">register again</a>