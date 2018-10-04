@extends('layout.master')
<div>
    <h1 class="text-center"><a href="calendar">START UP JUNGLE</a></h1>
</div>
<div class="container3 hcolor" style="margin-left:350px; margin-right:350px; margin-top:100px; padding:30px; background-color:  gray">
      <form id="reset_form">
        <div class="row">
          <div class="col-md-12">
            <label for="exampleInputEmail1">Email address<span class="required"></span></label>
            <input id="emailAddress" type="email" required="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="startupjungle@example.com">
            <span id="error_email" class="hide_error_name"></span>
          </div>
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-6">
            <label for="exampleInputEmail1">Location<span class="required"></span></label>
            <input id="text" class="form-control" placeholder="Where is your event?" required>
          </div>
          <div class="col-md-6">
            <label for="exampleInputEmail1">Date<span class="required"></span></label>
            <input type="date" class="form-control" placeholder="yyyy-mm-dd" required>
          </div>
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col">
            <label for="exampleFormControlTextarea1">A TWO SENTENCE Description of your event</label>
            <textarea id="description" class="form-control" placeholder="Please keep this witty and SHORT." id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col-md-12"> 
            <button type="submit" class="btn hcolor" style="background-color:#1d2124db">SUBMIT</button>
          </div>   
        </div> 
      </form>
      <!-- <script>
            $emailErr = $locationErr = $dateErr = "";
            $email = $location = $desription = $date = "";

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
                
            if (empty($_POST["location"])) {
                $location = "";
            } else {
                $location = test_input($_POST["location"]);
            }

            if (empty($_POST["description"])) {
                $description = "";
            } else {
                $description = test_input($_POST["description"]);
            }

            if (empty($_POST["date"])) {
                $dateErr = "Gender is required";
            } else {
                $date = test_input($_POST["date"]);
            }
            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
                }
      </script> -->
</div>