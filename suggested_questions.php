<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to Campus Cauldron!</title>
  <!-- SPACE FOR FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINKS -->
  <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <style>
        #my-submit{
            background-color:#6b6cb2;
            color:white;
        }
        #my-submit:hover{
            background-color:#31326f;
        }
    </style>
</head>


<body>
  <!-- NAVBAR -->

      <?php
      include 'include/navbar.php';
      ?>


  <br><br>
  <center>
    <section class="sug_ques">
      <div class="container-fluid">
        <?php
        include 'conn.php';
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        };
        $start_from = ($page - 1) * 20;
        $sql = "select * from q_and_a WHERE ques_answered<>1 ORDER BY id DESC LIMIT $start_from, 20 ";
        $rs_result = mysqli_query($con, $sql);
        ?>

        <table class="table">
          <thead>
            <tr>
              <th width="20%">
                <h2>Questions for You!</h2>
              </th>
              <th colspan=2 width="18%">
                <h2>Want to Answer!</h2>
              </th>
            </tr>
          </thead>

          <?php
          while ($row = mysqli_fetch_assoc($rs_result)) {
          ?>

            <tbody>
              <tr>
                <td> <?php echo $row["question"]; ?> </td>
                <td>
                  <?php
                  if (!isset($_SESSION['email'])) {
                  ?> <a class="btn btn-light" href="sign-in.php">Sign-in to Answer</a>
                  <?php } else {
                  ?> <button class="btn" id="my-submit" href="answer_it.php?key1=<?php echo $row["id"]; ?>">Answer it</button>
                  <?php
                  }
                  ?> </td>
              </tr>

            </tbody>

          <?php
          };
          ?>
        </table>
        <strong>Pages </strong>


        <!-- STOP WORK HERE -->



      </div>
      <!-- /.container-fluid -->

    </section>
  </center>


  <!-- FOOTER EXPERIMENT -->
  <br><br>
  <!-- Footer -->
  <?php include 'include/footer.php' ?>

  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
