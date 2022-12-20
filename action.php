<?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $username = $_POST['uname'];
             $password = $_POST['pass'];
             echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>';
             // Submit these to a database
         }


         ?>