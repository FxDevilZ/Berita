<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        a:link {
        text-decoration: none;
        }

        a:visited {
        text-decoration: none;
        }

        a:hover {
        text-decoration: none;
        }

        a:active {
        text-decoration: none;
        }

        .button {
          margin-bottom: 25px;
        padding: 10px 15px;
        margin: 10px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #ffffff;
        background-color: #4CAF50;
        animation: myanimation 3s infinite;
        border: none;
        border-radius: 5px;
        box-shadow: 0 9px #999;
        }

      @keyframes myanimation {
        0% {background-color:red;}
        15%{background-color:yellow;}
        40%{background-color:green;}
        70%{background-color:brown;}
        80%{background-color:violet;}
        100% {background-color:red;}
      }

        .button:hover {
        background-color: #3e8e41;
        color: #ffffff;
        }
        /* #fff */

        .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
        }

        /* pagination */
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        /* style body, h1 dkk dll etc dsb */
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
        .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
        }
</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><center>Home</a>
    <a href="Makanan.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><center>Makanan</a>
    <a href="Kesehatan.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><center>Kesehatan</a>
    <a href="Politik.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><center>Politik</a>
  </div>
</div>
<br><br>


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
    </body>