<?php
class jqueryformstyler
{
    public function use()
    {

echo <<<END
        <link href="system/components/jqueryformstyler/dist/jquery.formstyler.css" rel="stylesheet" />
      	<link href="system/components/jqueryformstyle/dist/jquery.formstyler.theme.css" rel="stylesheet" />
      	<script src="system/components/jqueryformstyle/dist/jquery.formstyler.min.js"></script>
      	<script src="system/components/jqueryformstyle/settings.js"></script>
END;

    }
}

$jqueryformstyler = new jqueryformstyler;

?>
