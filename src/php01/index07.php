<?php
$people = [
  [
    "Taro",25,"Men"
  ],
  [
    "Jiro",20,"Men"
  ],
  [
    "Hanako",16,"Women"
  ]
];

foreach($people as $profile){
    echo $profile[0] . "(" . $profile[1] . "歳 " . $profile[2] . ")";
    echo '<br />';
}