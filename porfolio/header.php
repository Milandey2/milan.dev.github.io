
<?php 

include("cdn.php");

?>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <head>
    <title>Sticky Navbar Example</title>

    <style>
      *{
        margin: 0;
        padding: 0;
      }
      .sticky-top{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      }

      .navbar-nav {
        margin-left: 800px;
      }

      .nav-link {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
        font-weight: bold;
      }
      .main-content{
        
      }
      .home-section{
        background-color: #f6f6f6;
        padding-bottom: 106px;
      }
      .home-section h2{
        font-size: 60px;
        font-weight: 700;
      }
      .home-section h4{
        color: #767676;
        font-weight: 300;
      }
      .about-section,
      .projects-section,
      .contact-section{
        padding-top: 0px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
      <a class="navbar-brand" href="#">Milan.Dev</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    


  </body>