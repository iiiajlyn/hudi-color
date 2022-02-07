<?php
if (!empty($_POST['statistics'])) {
    file_put_contents('test.txt', $_POST['statistics']);
} else {
    file_put_contents('test.txt', "hello");
}
