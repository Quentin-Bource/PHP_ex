
<?php
//1.1 clean room
// Create the array of possible states
$possible_states = array(
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"
);
// When testing, change the index value to navigate to the possible array values
$room_is_filthy = $possible_states[0];

if ($room_is_filthy == $possible_states[0]) {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
    //cleanup_room();
    echo "<br>Room is now clean!";
} else if ($room_is_filthy == $possible_states[1]) {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
    //cleanup_room();
    echo "<br>Room is now clean!";
} else if ($room_is_filthy == $possible_states[2]) {

    echo "Yuk, Room is dirty : let's clean it up !";
} else {
    echo "<br>Nothing to do, room is neat.";
}
?>