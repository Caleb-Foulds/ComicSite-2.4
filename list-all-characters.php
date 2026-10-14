<?php
    // connect to the MySQL server
    include( 'db-connect.php' );

    // define the SQL query to run
    $query = 'SELECT name, alter_ego, distributor, allegance, first_publication, location, human, powers, affiliation, affiliation_id FROM comic_characters';

    // pass the query to the server, hopefully getting back a set of results
    $results = mysqli_query( $link, $query ) or die( mysqli_error( $link ) );

    // loop to keep fetching records from the results, until none left
    while( $pet = mysqli_fetch_assoc( $results ) )
    {
        // show the record data
        print '<p>Name:'.$pet['name'];
        print '<br>Alter_ego:'.$pet['alter_ego'];
        print '<br>Distributor:'.$pet['distributor'];
        print '<br>Allegance:'.$pet['allegance'];
        print '<br>First_publication:'.$pet['first_publication'];
        print '<br>Location:'.$pet['location'];
        print '<br>Human:'.$pet['human'];
        print '<br>Powers:'.$pet['powers'];
        print '<br>Affiliation:'.$pet['affiliation'];
        print '<br>Affiliation_id:'.$pet['affiliation_id'];
    }

    // close the MySQL server connection
    mysqli_close( $link );
?>