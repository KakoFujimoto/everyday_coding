<?php

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}


// echo h("");

// echo htmlspecialchars("", ENT_QUOTES | ENT_HTML5, 'UTF-8');

// echo htmlspecialchars_decode('&#039;', ENT_QUOTES);
