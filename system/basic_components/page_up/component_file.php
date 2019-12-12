<?php
class page_up
{
    public function use()
    {

echo <<<END

        <script type="text/javascript" src="system/basic_components/page_up/script.js"></script>
        <link rel="stylesheet" type="text/css" href="system/basic_components/page_up/style.css">

END;

    }

    public function insert_button()
    {

echo <<<END

        <div class="page_up"></div>

END;

    }
}

$page_up = new page_up;
?>
