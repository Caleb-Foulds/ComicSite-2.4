<?php
    // connect to the MySQL server
    include( 'db-connect.php' );

    // define the SQL query to run
    $query = 'SELECT name, alter_ego, distributor, allegance, first_publication, location, human, powers, affiliation, affiliation_id FROM comic_characters';

    // pass the query to the server, hopefully getting back a set of results
    $results = mysqli_query( $link, $query ) or die( mysqli_error( $link ) );
    include( 'common-top.php' );
    // loop to keep fetching records from the results, until none left
    while( $character = mysqli_fetch_assoc( $results ) )
    {
    print '<table class="pet-table">';
    print '  <thead>';
    print '    <tr>';
    print '      <th>Name</th>';
    print '      <th>Alter Ego</th>';
    print '      <th>Distributor</th>';
    print '      <th>Allegiance</th>';
    print '      <th>First Publication</th>';
    print '      <th>Location</th>';
    print '      <th>Human</th>';
    print '      <th>Powers</th>';
    print '      <th>Affiliation</th>';
    print '      <th>Affiliation ID</th>';
    print '    </tr>';
    print '  </thead>';
    print '  <tbody>';
    }
    include( 'common-bottom.php' );
    // close the MySQL server connection
    mysqli_close( $link );
?>