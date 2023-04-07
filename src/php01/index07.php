<?php





// $people = array("person1" =>"Taro","person2" => "Jiro","person3" => "Saburo");

// $age =["person1"=>"20",
//        "person2"=>"15",
//        "person3"=>"10"];


// echo $people["person2"]."は".$age["person2"]."です";

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

foreach($people as $person){
    echo $person["first_name"]."(".$person["age"].$person["gender"].")";
    echo "<br />";
}

// $pepole = [
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// ];

// foreach ($pepole as $person => $name) {
//     echo $person . "は" . $name;
//     echo "<br />";
// }

// echo $people[0]["last_name"];