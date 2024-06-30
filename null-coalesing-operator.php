<?php

//daripada manual if isset

$data = [];


if (isset($data["action"])) {
  $action = $data["action"];
} else {
  $action = "Nothing";
}

$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
echo isset($data["action"]) . PHP_EOL;