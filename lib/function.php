<?php
// functie om taken op te halen en weer te geven
function taskManager( $taakUrl ) {
     $url = "localhost/groepswerk/api/" . $taakUrl;

     $ch = curl_init();
     $headers = array();
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPTTIMEOUT, 30);
     $response = curl_exec($ch);
      curl_close($ch);

     $data = json_decode($response, true);
     return $data;
 }

 function taskChanger( $taakUrl, $request ) {
     $url = "localhost/groepswerk/03/5/api/" . $taakUrl;

     $ch = curl_init();
     $headers = array();
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPTTIMEOUT, 30);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request );
     $response = curl_exec($ch);
      curl_close($ch);

     $data = json_decode($response, true);
     return $data;
 }




 function allTasks( $data ){
     foreach ($data as $row) {
          // var_dump( $row );
          echo '<tr><td>' . $row["taa_id"] . '</td>
                    <td>' . $row["taa_datum"] . '</td>
                    <td>' . $row["taa_omschr"] . '</td></tr>';
     }
 }
