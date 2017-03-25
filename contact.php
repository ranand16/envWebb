<!DOCTYPE html>
<html>
  <?php include("includes/head.php"); ?>
  <body>
    <?php include("includes/header.php"); ?>
    <div class="container">
      <h1 style="text-align:center">Contact</h1>
      <div class="j2 jumbotron">
        <form action="includes/submit.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Name*</label>
            <input type="name" name="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Name*">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail">E-mail*</label>
            <input type="text" class="form-control" name="email"  id="inputEmail" placeholder="Email*">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPhone">Phone*</label>
            <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone*">
          </div>
          <div class="form-group">
            <label for="exampleInputSubject">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Textarea*</label>
            <textarea class="form-control" name="content" id="exampleTextarea" rows="3" placeholder="Comment*"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <?php
      session_start();
      if(isset($_SESSION["success"]))
      {
        echo "<h3>";
        echo $_SESSION["succcess"];
        echo "</h3>";
      }
     ?>
    <?php include("includes/footer.php"); ?>
    <h3></h3>
  </body>
</html>
