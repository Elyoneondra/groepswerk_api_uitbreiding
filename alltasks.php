<?php
require_once "lib/function.php";
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <title>Task Manager</title>
          <link href="opmaak.css" rel="stylesheet">
     </head>
     <body>
          <div class="container">
               <header id="mainheader"><a href="index.html" title="go home"><h1>Task Manager</h1></a></header>
               <nav id="mainnav">
                    <ul>
                         <a href="#" title="see all tasks"><li>See all tasks</li></a>
                         <a href="onetask.php" title="see one task"><li>See one task</li></a>
                         <a href="addtask.php" title="add one task"><li>Add one task</li></a>
                         <a href="edit.php" title="change a task"><li>Change a task</li></a>
                         <a href="delete.php" title="delete a task"><li>Delete a task</li></a>
                    </ul>
               </nav>
               <main>
               <table class="table">
         <thead>
              <tr>
                   <th>Taak id</th>
                   <th>Datum</th>
                   <th>Omschrijving</th>
              </tr>
         </thead>
         <tbody>
         <?php allTasks(taskManager( "taken" )); ?>
         </tbody>
    </table>

               </main>
               <footer id="mainfooter"><p>Made by Maya and Hannelore</p></footer>
          </div> <!-- container -->
     </body>
</html>