<?php

function remove_footer_admin () {
echo '&copy; Katie Lee Wedding Photography';
}

add_filter('admin_footer_text', 'remove_footer_admin');

?>