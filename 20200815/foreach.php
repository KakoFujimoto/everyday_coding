<?php
foreach ($_REQUEST['devices'] as $item) {
    echo '<p>', $item, '</p>';
}
echo 'が選択されています';
