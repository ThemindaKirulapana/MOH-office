<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>

<html>
  <head>
    <title>DOCTOR HOME</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      body {
        background-color: #28ffff;
        color: #000000;
      }
      .navbar {
        background-color: #37fdfd;
        border-radius: 0;
        margin: 0;
        padding: 0;
        text-align: center;
      }
      .navbar a {
        color: #000000;
        font-size: 18px;
        padding: 15px;
        text-decoration: none;
        transition: background-color 0.5s;
      }
      .navbar a:hover {
        background-color: #00a1a1;
      }

      #search {
        padding: 10px;
        text-align: center;
      }
      .card {
        background-color: #444;
        border: none;
        color: #fff;
        margin: 10px;
        padding: 10px;
        text-align: center;
      }

      #calendar {
        max-width: 900px;
        margin: 40px auto;
        color: rgb(13, 13, 14);
        background-color: rgb(205, 223, 240);
        height:500px;
      }

      footer {
        background-color: #37fdfd;
        color: #000000;
        padding: 10px;
        text-align: center;
        font-weight: bolder;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">DOCTOR HOME</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Approved vaccine reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NonApproved vaccine reports</a>
          </li>
        </ul>
        <form id="search" class="form-inline ml-auto">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
        <a href="index.html">logout</a>
      </div>
    </nav>
    <!-- <div class="container mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img
              src="https://dummyimage.com/400x200/000/fff"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a sample card. You can add more cards like this to
                display information or data in
              </p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2>Welcome Doctor</h2>
          <p>This is where you can add related information to the webpage.</p>
          <!-- add a image -->
          <img
            src="images/clinic_01.jpg"
            class="card-img-top"
            alt="..."
          />
        </div>
        <div class="col-md-4">
          <h2>Calendar</h2>
          <div id="calendar"></div>
        </div>
      </div>
    </div>

    <footer>
      <p>MOH &copy; 2023</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"
    />

    <script>
      $(document).ready(function () {
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
          },
          defaultDate: moment(),
          navLinks: true,
          editable: true,
          eventLimit: true,
          events: [
            {
              title: 'Event 1',
              start: '2023-03-23T12:30:00',
              end: '2023-03-23T14:30:00',
            },
            {
              title: 'Event 2',
              start: '2023-03-24T12:30:00',
              end: '2023-03-24T14:30:00',
            },
          ],
        });
      });
    </script>
  </body>
</html>
