<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
$users = [
    "user1"=>[
        'id'=>1,
        'name'=>'ahmed',
        'hobbies'=>[
            'football','swimming','running'
        ],
        'activities'=>(object)[
            "school"=>'drawing',
            'home'=>'painting'
        ],
        "gender"=>(object)[
            'gender'=>'m'
        ],
    ],
    "user2"=>[
        'id'=>2,
        'name'=>'mohamed',
        'hobbies'=>[
            'swimming','running',
        ],
        'activities'=>(object)[
            "school"=>'x',
            'home'=>'drawing'
        ],
        "gender"=>(object)[
            'gender'=>'f'
        ],
    ],
    "user3"=>[
        'id'=>3,
        'name'=>'mena',
        'hobbies'=>[
            'running',
        ],
        'activities'=>(object)[
            "school"=>'painting',
            'home'=>'drawing'
        ],
        "gender"=>(object)[
            'gender'=>'m'
        ]
        
    ]
];
foreach($users AS $k11=>$v11){
    if (($v11['gender']->gender) == "m"){
        $v11['gender']->gender = "male";
        
    }
    else if (($v11['gender']->gender) == "f"){
        $v11['gender']->gender = "female";
        
    }
    
}
echo "<table class='table'>";
echo "<thead>
    <tr>
      <th scope='col'>id</th>
      <th scope='col'>name</th>
      <th scope='col'>hobbies</th>
      <th scope='col'>activities</th>
      <th scope='col'>gender</th>
    </tr>
  </thead>";
echo "<tbody>";
        
foreach ( $users as $k1=> $user ) {
    echo '<tr>';
        foreach ( $user as $key => $value ) {

            if($key == "hobbies"){
                echo '<td>';
                foreach ($user['hobbies'] as $k2 => $v2) {
                    print_r($v2."<br>");
                    }
                    continue;
                echo '</td>';
            }
            if($key == "activities"){
                echo '<td>';
                foreach ($user['activities'] as $k3 => $v3) {
                    echo($v3."<br>");
                    }
                    continue;
                echo '</td>';
            }
             if($key == "gender"){
                echo '<td>';
                foreach ($user['gender'] as $k4 => $v4) {
                    echo($v4."<br>");
                    }
                    continue;
                echo '</td>';
            }
            
            print_r("<td>$value</td>");
            }
           
    echo '</tr>';
}
echo "</tbody>";
echo "</table>";
?>
</body>
</html>

