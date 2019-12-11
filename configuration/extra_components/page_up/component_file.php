<?php
class page_up
{
    public function use()
    {

echo <<<END

        <script type="text/javascript" src="configuration/extra_components/page_up/script.js"></script>
        <link rel="stylesheet" type="text/css" href="configuration/extra_components/page_up/style.css">

END;

    }
}

$page_up = new page_up;
?>
