<?php
class page_up
{
    public function use()
    {

echo <<<END

        <script type="text/javascript" src="system/components/page_up/script.js" async></script>
        <link rel="stylesheet" type="text/css" href="system/components/page_up/style.css">
        <div class="page_up"></div>

END;

    }
}

$page_up = new page_up;
?>
