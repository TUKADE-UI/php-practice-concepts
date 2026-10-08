<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php        

// Store the student's mark

$mark = 100;   

// Start the switch

switch (true) { 

     // Check if mark is 90–100
     // Print Grade A
     // Stop the switch

    case ($mark >= 90 && $mark <= 100):   
        echo "90 - 100 = Grade A";       
        break; 

     // Check if mark is 80–89
    // Print Grade B
    // Stop the switch

    case ($mark >= 80 && $mark < 90):     
        echo "80 - 89 = Grade B";         
        break;                             \

          // Check if mark is 70–79
          // Print Grade C
          // Stop the switch

    case ($mark >= 70 && $mark < 80):      
        echo "70 - 79 = Grade C";         
        break;    

         // Check if mark is 60–69 
         // Print Grade D   
         // Stop the switch   


    case ($mark >= 60 && $mark < 70):      
        echo "60 - 69 = Grade D";          
        break;     

        // If mark is below 60
         // Print Fail                        

    default:                              
        echo "Below 60 = Fail";           
}

?>                                         

</body>
</html>