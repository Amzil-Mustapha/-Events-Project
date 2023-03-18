<?php

function build_calendar($month, $year) {

    $mysqli = new mysqli('localhost', 'root', '', 'contact_db');

    $stmt = $mysqli->prepare("SELECT * FROM bookings_record WHERE MONTH(DATE) = ? AND YEAR(DATE) = ?");

    $stmt->bind_param('ss', $month, $year);

    $bookings = array();

    if($stmt->execute()){

        $result = $stmt->get_result();

        if($result->num_rows>0){

            while($row = $result->fetch_assoc()){

                $bookings[] = $row['DATE'];

            }

            

            $stmt->close();

        }

    }

     $daysOfWeek = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');
     $month_num = date('n', strtotime($month));
     $firstDayOfMonth = mktime(0, 0, 0, $month_num, 1, $year);
     
    //  $ = mktime(0,0,0,$month,1,$year);

     $numberDays = date('t',$firstDayOfMonth);

     $dateComponents = getdate($firstDayOfMonth);

     $monthName = $dateComponents['month'];

     $dayOfWeek = $dateComponents['wday'];



    $datetoday = date('Y-m-d');

   

    $calendar = "<table class='table table-bordered'>";

    $calendar .= "<center><h2>$monthName $year</h2>";

    $calendar.= "<a class='btn btn-xs btn-success' href='?month=".date('m', mktime(0, 0, 0, intval($month)-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, intval($month)-1, 1, $year))."'>Mois précédent</a> ";

    $calendar .= " <a class='btn btn-xs btn-danger' href='?month=".date('F')."&year=".date('Y')."'>Mois en cours</a> ";

    $calendar .= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, intval($month)+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, intval($month)+1, 1, $year))."'>Mois prochain</a></center><br>";

    

   

      $calendar .= "<tr>";

     foreach($daysOfWeek as $day) {

          $calendar .= "<th  class='header'>$day</th>";

     } 



     $currentDay = 1;

     $calendar .= "</tr><tr>";
     if ($dayOfWeek > 0) { 

         for($k=0;$k<$dayOfWeek;$k++){

                $calendar .= "<td  class='empty'></td>"; 
         }

     }
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
     while ($currentDay <= $numberDays) {
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0; 
               $calendar .= "</tr><tr>";



          }

          

          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

          $date = "$year-$month-$currentDayRel";

          

            $dayname = strtolower(date('l', strtotime($date)));

            $eventNum = 0;

            $today = $date==date('Y-m-d')? "today" : "";

         if($date<date('Y-m-d')){

             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs' disabled >Pas disponible</button>";

         }elseif(in_array($date, $bookings)){

             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'> <span class='glyphicon glyphicon-lock

             '></span>Déjà résérvé</button>";

         }else{

             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='contact.php?date=".$date."' class='btn btn-success btn-xs'> <span class='glyphicon glyphicon-ok' ></span> Résérver</a>";

         }

            

          $calendar .="</td>";

          $currentDay++;

          $dayOfWeek++;

     }



     if ($dayOfWeek != 7) { 

     

          $remainingDays = 7 - $dayOfWeek;

            for($l=0;$l<$remainingDays;$l++){

                $calendar .= "<td class='empty'></td>"; 

         }

     }

     

     $calendar .= "</tr>";

     $calendar .= "</table>";

     echo $calendar;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
   body {
  max-width: 100%;
  
   background: url(images_site/pint.jpg) ;
   background-size: cover;
   background-position: center;
   background-attachment: fixed;


}

  @media only screen and (max-width: 760px),
        (min-device-width: 802px) and (max-device-width: 1020px) {
            /* Force table to not be like tables anymore */
            table, thead, tbody, th, td, tr {
                display: block;
            }
            .empty {
                display: none;
            }
          .btn{
            display: inline-block;
            padding:1rem 3rem;
            border:var(--border);
            background: var(--transparent-white);
            color:var(--black);
            border-radius: .5rem;
            font-size: 1rem;
            text-transform: capitalize;
            margin-top: 1rem;
            cursor: pointer;
           }
          .btn:hover{
            background: var(--black);
            color:var(--white);
            }
            /* Hide table headers (but not display: none;, for accessibility) */
            th {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            tr {
                border: 2px solid #ccc;
            }
            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 2px solid #eee;
                position: relative;
                padding-left: 50%;
            }
                    /*

		Label the data
		*/
            td:nth-of-type(1):before {
                content: "Sunday";
            }
            td:nth-of-type(2):before {
                content: "Monday";
            }
            td:nth-of-type(3):before {
                content: "Tuesday";
            }

            td:nth-of-type(4):before {

                content: "Wednesday";

            }

            td:nth-of-type(5):before {

                content: "Thursday";

            }

            td:nth-of-type(6):before {

                content: "Friday";

            }

            td:nth-of-type(7):before {

                content: "Saturday";

            }





        }



        /* Smartphones (portrait and landscape) ----------- */



        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {

            body {

                padding: 0;

                margin: 0;

            }

        }



        /* iPads (portrait and landscape) ----------- */



        @media only screen and (min-device-width: 802px) and (max-device-width: 1020px) {

            body {

                width: 495px;

            }

        }



        @media (min-width:641px) {

            table {

                table-layout: fixed;

            }

            td {

                width: 33%;

            }

        }

        

        .row{

            margin-top: 20px;

        }

        

        .today{

            background: yellow; 

        }
    </style>

</head>
<body>
<div class="container">
<section>
    <div class="row">
        <div class="col-md-12">
        <div class="alert-alert-danger">
    <h1> Calendrier de résérvation de Votre Mariage</h1>
    <?php
        $dateComponents=getdate();
    if(isset($_GET['month']) && isset($_GET['year'])){
        $month=$_GET['month'];
        $year =$_GET['year'];
    }else{
        $month=$dateComponents['month'];
        $year =$dateComponents['year'];
    }
    echo build_calendar($month,$year);
    ?>

</div>
        </div>
    </div>
</section>
    
</div>

</body>
</html>



    