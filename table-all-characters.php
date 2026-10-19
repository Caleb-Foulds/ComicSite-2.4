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
    print '      <th>Name</th>'.$character['name'];
    print '      <th>Alter_ego</th>'.$character['alter_ego'];
    print '      <th>Distributor</th>'.$character['distributor'];
    print '      <th>Allegiance</th>'.$character['allegance'];
    print '      <th>First_publication</th>'.$character['first_publication'];
    print '      <th>Location</th>'.$character['location'];
    print '      <th>Human</th>'.$character['human'];
    print '      <th>Powers</th>'.$character['powers'];
    print '      <th>Affiliation</th>'.$character['affiliation'];
    print '      <th>Affiliation_id</th>'.$character['affiliation_id'];
    print '    </tr>';
    print '  </thead>';
    print '  <tbody>';
    }
    include( 'common-bottom.php' );
    // close the MySQL server connection
    mysqli_close( $link );
?>