<?php
/////////////////////////////////////////////////////////////////////
///////////////////////////////// configuration loader
/////////////////////////////////////////////////////////////////////

// autoload extra components
$extra_components = $initial->scandir('configuration/extra_components');

for ($counter = 0; $counter < count($extra_components); $counter++)
{
    $component_file_location = 'configuration/extra_components/'.$extra_components[$counter].'/component_file.php';
    include($component_file_location);
}

// creation of applications logic
if (isset($_GET['application']))
{
    $application = $_GET['application'];

    // index.php?application=example
    switch ($application)
    {
        // case 'example': include('configuration/applications/example/application_file.php'); break;
        default: include('configuration/applications/404/application_file.php');
    }
}
else
{
    include('configuration/applications/main_application/application_file.php');
}
?>
