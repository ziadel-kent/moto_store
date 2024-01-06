<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width initial-scale=1 maximum-scale=1 minimum-scale=1" />
  <title>GMA - Admin</title>
  <link rel="icon" href="../assets/img/logo.png" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="css/admin.css" />
</head>
<style>
  body {
    font-family: "Arial", sans-serif;
    background-color: #000000;
    margin: 0;
  }

  .calendar {
    max-width: 100%;
    margin-left: 200px;
    background: #262829;
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    color: #fff;
    border-radius: 16px;
    overflow: auto;
    margin-top: 80px;
    margin-right: 20px;
    flex-shrink: 0;
  }

  .calendar-inner {
    padding: 10px;
    margin-bottom: px;
  }

  .calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
  }

  .calendar-body div {
    padding: 8px;
    border: 1px solid transparent;
  }

  .calendar-today {
    background: linear-gradient(to bottom, #03a9f4, #2196f3);
    border-radius: 4px;
  }

  .calendar-prev a,
  .calendar-next a {
    color: #fff;
    text-decoration: none;
    padding: 4px 12px;
    display: inline-block;
    background: transparent;
  }

  .calendar-prev a svg,
  .calendar-next a svg {
    height: 20px;
    width: 22px;
    fill: #fff;
  }
</style>

<body>
  <div id="wrapper">
    <nav class="navbar align-items-start sidebar accordion p-0">
      <div class="container-fluid d-flex flex-column p-0">
        <div class="m-0 p-0">
          <img style="top: 20px; position: relative" id="admin_logo" src="assets/img/logo.png" />
        </div>
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0 p-0" href="index.html">
          <div class="sidebar-brand-text" style="position: relative; bottom: 10px; font-size: 0.9rem">
            Gold Medal AutoMotive
          </div>
        </a>
        <div style="
              background-color: white;
              position: absolute;
              top: 165px;
              width: 220px;
              height: 2px;
            "></div>
        <ul class="nav navbar-nav mt-5">
          <li class="nav-item">
            <a class="text-white nav-link" id="btn_mainPage" style="cursor: pointer">Dashboard</a>
            <img style="
                  position: absolute;
                  top: 7px;
                  left: 125px;
                  width: 30px;
                  height: 30px;
                " src="assets/icon/admin/icons8_home_64.png" />
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" id="btn_CustomerPage" style="cursor: pointer">Customers</a>
            <img style="
                  position: absolute;
                  top: 7px;
                  left: 125px;
                  width: 30px;
                  height: 30px;
                " src="assets/icon/admin/icons8_customer_64.png" />
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" id="btn_CarPage" style="cursor: pointer">Car</a>
            <img style="
                  position: absolute;
                  top: 7px;
                  left: 125px;
                  width: 30px;
                  height: 30px;
                " src="assets/icon/admin/icons8_car_64.png" />
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" id="btn_PaymentPage" style="cursor: pointer">Payments</a>
            <img style="
                  position: absolute;
                  top: 7px;
                  left: 125px;
                  width: 30px;
                  height: 30px;
                " src="assets/icon/admin/icons8_payment_history_64.png" />
          </li>
        </ul>
      </div>
    </nav>

    <div class="d-flex flex-column bg-light" id="content-wrapper">
      <div id="content" class="m-0 p-0">
        <nav class="navbar navbar-light navbar-expand bg-white shadow topbar static-top">
          <div class="container-fluid">
            <button class="btn btn-link d-md-none rounded-circle mr-3" type="button"></button>
            <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." />
                <div class="input-group-append">
                  <button class="btn py-0" type="button">
                    <img src="assets/icon/icons8_search.ico" />
                  </button>
                </div>
              </div>
            </form>
            <div class="nav-item dropdown no-arrow">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                <span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 1rem">Admin</span>
                <img class="rounded-circle img-profile" src="assets/icon/icons8_businessman_32.png" /></a>
            </div>
          </div>
        </nav>
      </div>

      <div class="main-panel bg-light m-0 p-0">
        <!--  Start Admin Home Page-->
        <div style="display: block" id="admin_Home_Page">
          <h3 class="text-dark mb-4 mt-4 ml-4">Dashboard</h3>
          <div class="container-fluid">
            <div class="row mt-4">
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-left-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col mr-2">
                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                          <span>Customers</span>
                        </div>
                      </div>
                      <div class="col-auto">
                        <img id="custom_pic" src="assets/icon/icons8_customer_64.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-left-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col mr-2">
                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                          <span>Cars</span>
                        </div>
                        <div class="text-dark font-weight-bold h5 mb-0">
                          <span id="txtCarCount">15</span>
                        </div>
                      </div>
                      <div class="col-auto">
                        <img id="car_pic" src="assets/icon/icons8_car_64.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-left-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col mr-2">
                        <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                          <span>rentCars</span>
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="text-dark font-weight-bold h5 mb-0" id="txtDriverCount">
                              5<span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <img id="driver_pic" src="assets/icon/icons8_driver_64.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="adminHomePageSection">
              <div class="row">
                <div class="col-lg-7 col-xl-8">
                  <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <div class="dropdown no-arrow">
                        <h6 class="text-primary font-weight-bold m-0">
                          calender
                        </h6>
                        <div class="calendar"></div>
                        <div class="dropdown no-arrow">
                          <button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">
                            <i class="fas fa-ellipsis-v text-gray-400"></i>
                          </button>
                          <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
                            <p class="text-center dropdown-header">
                              dropdown header:
                            </p>
                            <a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart-area"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const calendar = document.querySelector(".calendar");

      function generateCalendar() {
        const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
        const currentDate = new Date();
        const currentMonth = currentDate.getMonth();
        const currentYear = currentDate.getFullYear();
        const lastDayOfMonth = new Date(
          currentYear,
          currentMonth + 1,
          0
        ).getDate();
        const firstDayOfWeek = new Date(
          currentYear,
          currentMonth,
          1
        ).getDay();

        let calendarHtml = `<div class="calendar-inner">
            <div class="calendar-body">`;

        daysOfWeek.forEach((day) => {
          calendarHtml += `<div>${day}</div>`;
        });

        for (let i = 1; i <= lastDayOfMonth + firstDayOfWeek; i++) {
          const dayNumber = i - firstDayOfWeek;

          if (dayNumber > 0) {
            calendarHtml += `<div class="date${
                dayNumber === currentDate.getDate() ? " calendar-today" : ""
              }">${dayNumber}</div>`;
          } else {
            calendarHtml += `<div></div>`;
          }
        }

        calendarHtml += `</div>
            <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
            <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>`;

        calendar.innerHTML = calendarHtml;
      }

      generateCalendar();
    });
  </script>
  </script>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/admin/chart.min.js"></script>
  <script src="../js/admin/bs-init.js"></script>
  <script src="../js/admin/theme.js"></script>
  <script src="../js/admin/AdminOrder.js"></script>
  <script src="../js/admin/Admin.js"></script>
  <script src="../js/admin/AdminProfile.js"></script>
  <script src="../js/admin/AdminCustomers.js"></script>
  <script src="../js/admin/AdminCar.js"></script>
  <script src="../js/admin/AdminDriver.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../src/testing/testing.js"></script>
</body>

</html>