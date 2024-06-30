<?php

$hewans = ["ayam", "sapi", "kambing"];

for ($i = 0; $i < count($hewans) ; $i++) { 
  echo "hewan ke $i : $hewans[$i]" . PHP_EOL;
}

foreach ($hewans as $hewan) {
  echo "hewan : $hewan" . PHP_EOL;
}

foreach ($hewans as $key => $hewan) {
  echo "hewan ke $key : $hewan" . PHP_EOL;
}