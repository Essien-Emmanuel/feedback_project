<?php
function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero');
    }
    return 1 / $x;
}

try {
    echo inverse(10);
} catch (Exception $e) {
    echo "Exception:: " . $e->getMessage() . " ";
} finally {
    echo '<br> All done';
}
