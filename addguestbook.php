<?php
if(isset($_POST['submit']))
{
  include('connect.php');
  $uname = $_POST['username'];
  $title = $_POST['title'];
  $paragraph = $_POST['paragraph'];
  $datetime = $_POST['datetime'];
 
  // $date = date('y-m-d h:i:s');
  if(empty($uname) || empty($title) || empty($paragraph) || empty($datetime)){
    echo "<p style='color:red; margin-left: 20px; margin-top: 20px;'>Could not enter data. Please fill up the required details</p>";
  }
  else{
    $sql = "INSERT INTO guestbook ".
        "(username, title, description, datetime) ".
        "VALUES('$uname', '$title', '$paragraph', '$datetime')";
    $retval = mysqli_query( $con, $sql );
       
    if(!$retval)
    {
      die("<p style='color:red; margin-left: 20px; margin-top: 20px;'>Could not enter data: " . mysql_error());
    }  

    echo "<p style='color:green; margin-left: 20px; margin-top: 20px;'>Entered data successfully\n</p>";
  }
  mysqli_close($con);
}

?>

<div class="container">
      

  <form class="form-horizontal" method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
        
    <div class="form-group">
      
      <div><h3 style="text-align: center;">Test guestbook</h3></div>        
          
    </div>
    <div class="form-group">
      <p style="background-color: transparent; font-size: 12px; color: red; margin-left: 20px;">Required * </p>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Username*</label>           
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" placeholder="Enter your username">            
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Title*</label>  
      <div class="col-sm-10">
        <input type="text" class="form-control" name="title" placeholder="Give title">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Paragraph*</label>  
      <div class="col-sm-10">
         <textarea placeholder="Write something" class="form-control" name="paragraph"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Date*</label>
      <div class="col-sm-10"> 
        <input id="datetimepicker" type="text" class="form-control" name="datetime" placeholder="Enter date-time">
      </div>
    </div>
        
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Save</button>
      </div>
    </div>

  </form>

</div> <!-- /container -->

