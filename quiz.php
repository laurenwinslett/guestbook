  <?php
        echo "<html><body><center><table>\n\n";
  
        // Open a file
        $file = fopen("courses.csv", "r");
  
        // Fetching data from csv file row by row
        while (($data = fgetcsv($file)) !== false) {
  
            // HTML tag for placing in row format
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td>" . htmlspecialchars($i) 
                    . "</td>";
            }
            echo "</tr> \n";
        }

//i do not know what i am doing on 27-5 sorry!