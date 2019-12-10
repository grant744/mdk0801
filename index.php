<?php
/////////////////////////////////////////////////////////////////////
///////////////////////////////// system loader
/////////////////////////////////////////////////////////////////////

// creation initial tools
class initial
{
    public function scandir($dir, $sort = 0)
    {
      	$list = scandir($dir, $sort);

      	if ($list == false)
        {
            return false;
        }

      	if ($sort == 0)
        {
            unset($list[0], $list[1]);
        }
      	else
        {
            unset($list[count($list)-1], $list[count($list)-1]);
        }

        $list = array_values($list);
      	return $list;
    }
}

$initial = new initial;

// setting for errors
error_reporting(0);

// autoload basic components
$basic_components = $initial->scandir('system/basic_components');

for ($counter = 0; $counter < count($basic_components); $counter++)
{
    $component_file_location = 'system/basic_components/'.$basic_components[$counter].'/component_file.php';
    include($component_file_location);
}

// configuration loading
include('configuration/main_configuration_file.php');
?>
