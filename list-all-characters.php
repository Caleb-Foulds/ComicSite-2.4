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
        // show the record data
        print '<p>Name:'.$character['name'];
        print '<br>Alter_ego:'.$character['alter_ego'];
        print '<br>Distributor:'.$character['distributor'];
        print '<br>Allegance:'.$character['allegance'];
        print '<br>First_publication:'.$character['first_publication'];
        print '<br>Location:'.$character['location'];
        print '<br>Human:'.$character['human'];
        print '<br>Powers:'.$character['powers'];
        print '<br>Affiliation:'.$character['affiliation'];
        print '<br>Affiliation_id:'.$character['affiliation_id'];
    }
    include( 'common-bottom.php' );
    // close the MySQL server connection
    mysqli_close( $link );
?>