<?php
/////////////////////////////////////////////////////////////////////
///////////////////////////////// application logic
/////////////////////////////////////////////////////////////////////

    if (isset($_GET['application']))
    {
        $application = $_GET['application'];

        // index.php?application=example
        switch ($application)
        {
            // case 'example': include('configuration/applications/example/application_file.php'); break;
            default: include('configuration/applications/404/application_file.php');
        }

    } else include('configuration/applications/main_application/application_file.php');
?>
