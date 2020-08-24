<?php
   /*  echo '<br>Список всех констант: <br>';
    print_r (get_defined_constants());
    echo '<br><br>Список всех расширений: <br>';
    print_r (get_loaded_extensions()); */

    $file_extensions = "extensions.txt";
    $extensions = (array)get_loaded_extensions();
    file_put_contents($file_extensions,$extensions);
    $file_constants = "constants.txt";
    $constants = (array)get_defined_constants();
    file_put_contents($file_constants,$constants);

    echo "<br>Файлы $file_constants и $file_extensions созданы!<br>";