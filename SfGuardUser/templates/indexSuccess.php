<h1>Sfguardusers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Email address</th>
      <th>Username</th>
      <th>Algorithm</th>
      <th>Salt</th>
      <th>Password</th>
      <th>Is active</th>
      <th>Is super admin</th>
      <th>Last login</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sfguardusers as $sfguarduser): ?>
    <tr>
      <td><a href="<?php echo url_for('SfGuardUser/edit?id='.$sfguarduser->getId()) ?>"><?php echo $sfguarduser->getId() ?></a></td>
      <td><?php echo $sfguarduser->getFirstName() ?></td>
      <td><?php echo $sfguarduser->getLastName() ?></td>
      <td><?php echo $sfguarduser->getEmailAddress() ?></td>
      <td><?php echo $sfguarduser->getUsername() ?></td>
      <td><?php echo $sfguarduser->getAlgorithm() ?></td>
      <td><?php echo $sfguarduser->getSalt() ?></td>
      <td><?php echo $sfguarduser->getPassword() ?></td>
      <td><?php echo $sfguarduser->getIsActive() ?></td>
      <td><?php echo $sfguarduser->getIsSuperAdmin() ?></td>
      <td><?php echo $sfguarduser->getLastLogin() ?></td>
      <td><?php echo $sfguarduser->getCreatedAt() ?></td>
      <td><?php echo $sfguarduser->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('SfGuardUser/new') ?>">New</a>
