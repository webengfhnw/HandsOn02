<?php
session_start();
if (!isset ($_SESSION['viewCount'])) {
    $_SESSION['viewCount'] = 1;
} else {
    $_SESSION['viewCount']++;
}
?>
<a href="sessionCountView.php">Show Session Count</a>