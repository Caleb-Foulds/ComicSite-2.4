<?php
// Connect to the MySQL server
include('db-connect.php');

// Define the SQL query
$query = 'SELECT name, alter_ego, distributor, allegance, first_publication, location, human, powers, affiliation, affiliation_id FROM comic_characters';

// Execute the query
$results = mysqli_query($link, $query) or die(mysqli_error($link));

include('common-top.php');
?>

<table class="character-table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Alter Ego</th>
      <th>Distributor</th>
      <th>Allegiance</th>
      <th>First Publication</th>
      <th>Location</th>
      <th>Human</th>
      <th>Powers</th>
      <th>Affiliation</th>
      <th>Affiliation ID</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($character = mysqli_fetch_assoc($results)): ?>
      <tr>
        <td><?= htmlspecialchars($character['name'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['alter_ego'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['distributor'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['allegance'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['first_publication'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['location'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['human'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['powers'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['affiliation'] ?? '') ?></td>
        <td><?= htmlspecialchars($character['affiliation_id'] ?? '') ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<?php
include('common-bottom.php');

// Close the MySQL server connection
mysqli_close($link);
?>