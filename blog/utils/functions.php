<?php

require_once "database.php";

function get_posts() {
    return DB::query("SELECT * FROM `posts`");
}
