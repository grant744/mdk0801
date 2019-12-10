<?php
class jqueryformstyler
{
    public function use()
    {

echo <<<END
        <link href="system/basic_components/jqueryformstyler/dist/jquery.formstyler.css" rel="stylesheet" />
      	<link href="system/basic_components/jqueryformstyle/dist/jquery.formstyler.theme.css" rel="stylesheet" />
      	<script src="system/basic_components/jqueryformstyle/dist/jquery.formstyler.min.js"></script>
      	<script src="system/basic_components/jqueryformstyle/settings.js"></script>
END;

    }
}

$jqueryformstyler = new jqueryformstyler;

?>
