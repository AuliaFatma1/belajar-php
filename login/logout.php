<?php
session_start();
session_destroy();
echo "Yeayyy..😄, Anda berhasil Logout ";

echo "<meta http-equiv='refresh' content='2; url=index.php'>";
?>