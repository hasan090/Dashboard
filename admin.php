<?php include 'sidebar.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <!-- <link rel="stylesheet" href="styles.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="numbers.css">

</head>

<body>
  <section class="home-section">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <!-- <dir class="head" style="display: flex; justify-content: space-between;"> -->
      <h2 style="text-align: center !important; margin-left: 35%">Welcome TO Muhriz InfoTech</h2>
      <a href="login.php">
        <span class="btn btn-danger" style="float: right;" type="button">Logout</span></a>
        <div class="counter_boxes">

<div class="col-md-3 col-sm-6">
  <div class="counter pink">
    <div class="counter-icon">
      <i class="bx bx-menu"></i>
    </div>
    <h3>Number Tasks:</h3>
    
        <br>
            <iframe  class="counter-value" style="width: 100px; height: 80px; border:none;     border: 2px solid #ff5d94;
border-radius: 5px; " scrolling="no" src="https://script.google.com/macros/s/AKfycbxGU1JchU9RgeTd7buB89nAFV-KWafT2AH3bT5m0kLTfVBcRvzoSqCdDwmGLI8Oo3mFMw/exec" ></iframe>
    </div>
    <!-- <a href="display_sheet.php">
    <button class="btn btn-primary">Display Sheet</button>
    </a> -->
    
  </div>
    <iframe style="width: 1000px; height: 610px; overflow:hidden; overflow:hidden;
border:none;" frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTeXH3bTB1yecz6dDMUaQNLjoDIAtJ9w8rGNA469wgrfQF17egNTYSh-6Tm2MgyDjrUtvw95u96EDhU/pubhtml?gid=708016645&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
    

  </section>

  <script src="style.js"></script>



</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
</script>


</html>
