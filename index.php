<h1>PHP Formation</h1>
<p>You will find below the available projects we will go through the course:</p>

<?php
$ignore = ['.docker', 'config','data', 'logs', '.git'];

//list all folders as URLs
echo "<ul>";
$folders = scandir('.');
foreach($folders as $folder){
    if(is_dir($folder) && $folder != '.' && $folder != '..'){
        if(in_array($folder, $ignore)){
            continue;
        }
        echo "<li><a href='$folder'>$folder</a></li>";
    }
}
echo "</ul>";