<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taro</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png" type="image/x-icon')}}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- bootsrtap css -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- all css -->
    <link rel="stylesheet" href="{{asset('admin/css/all.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{asset('admin/css/flaticon.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('admin/css/slick.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- dark css -->
    <link rel="stylesheet" href="{{asset('admin/css/dark-mode.css')}}">
    <!-- responsive fonts -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
</head>
<body>

<!-- left-sidebar start -->
<aside>
    <div class="left-sidebar">
        <div class="logo-area">
            <div class="main-logo">
                <a href="index.html"><img src="images/soft-bank.png" alt="images" /></a>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{URL::to('admin/dashboard')}}">
                        <i class="flaticon-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('admin/subscribe-emails')}}">
                        <i class="flaticon-user"></i>
                        <span>Emails</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>
<!-- left-sidebar end -->
<!-- top-bar start -->
<header>
    <div class="top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-3">
                    <div class="top-heading">
                        <h2>Overview</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="search-bar">
                        <form action="#">
                            <button><i class="flaticon-magnifying-glass"></i></button>
                            <input type="text" placeholder="Search for something">
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="settings">
                        <a href="#">
                            <i class="flaticon-settings-1"></i>
                        </a>
                    </div>
                    <div class="notofication">
                        <a href="#">
                            <i class="flaticon-notification"></i>
                        </a>
                    </div>
                    <div class="profile">
                        <a href="#">
                            <img src="images/profile.png" alt="images" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="toogle-bar">
            <span id="toggle"><i class="fas fa-bars"></i></span>
        </div>
    </div>
</header>
<div class="main-content">


                @yield('content')


</div>

<!-- jquery js -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<!-- bootstrap min js -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- bootstrap.bundle js -->
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- canvasjs js -->
<script src="{{asset('admin/js/jquery.canvasjs.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('admin/js/slick.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('admin/js/main.js')}}"></script>
<script>
    window.onload = function () {

        //Better to construct options first and then pass it as a parameter
        var options = {
            dataPointWidth: 15,
            axisY: {
                gridColor: "#F3F3F5",
                lineThickness: 0,
                tickLength: 0,
                interval: 100,
                includeZero: true,
            },
            axisX: {
                gridColor: "transparent",
                lineThickness: 0,
                tickLength: 0,
            },
            data: [
                {
                    type: "column",
                    color: "#FDAA0A",
                    cornerRadius: 10,
                    dataPoints: [
                        { label: "Sat",  y: 475  },
                        { label: "Sun", y: 350  },
                        { label: "Mon", y: 320  },
                        { label: "Tue",  y: 450  },
                        { label: "Wed",  y: 150  },
                        { label: "Thu",  y: 380  },
                        { label: "Fri",  y: 395  }
                    ]
                },
                {
                    type: "column",
                    color: "#16DBCC",
                    cornerRadius: 10,
                    dataPoints: [
                        { label: "Sat",  y: 240  },
                        { label: "Sun", y: 130  },
                        { label: "Mon", y: 260  },
                        { label: "Tue",  y: 370  },
                        { label: "Wed",  y: 240  },
                        { label: "Thu",  y: 240  },
                        { label: "Fri",  y: 350  }
                    ]
                }
            ]
        };

        $("#chartContainer").CanvasJSChart(options);


        var options = {
            exportEnabled: true,
            animationEnabled: true,
            data: [{
                type: "pie",
                toolTipContent: "<b>{name}</b>: ${y} (#percent%)",
                indexLabel: "{name}",
                legendText: "{name} (#percent%)",
                indexLabelPlacement: "inside",
                dataPoints: [
                    { y: 35, color:"#4D78FF", name: "35% Others", exploded: true, },
                    { y: 30, color:"#FFBB38", name: "20% Investment", },
                    { y: 30, color:"#16DBCC", name: "30% Entertainment", exploded: true, },
                    { y: 15, color:"#FF82AC", name: "15% Bill Expense", exploded: true, }
                ]
            }]
        };
        $("#piechartContainer").CanvasJSChart(options);


        var options = {
            exportEnabled: true,
            animationEnabled: true,
            axisX: {
                includeZero: true,
                gridColor: "#DFE5EE",
                gridThickness: 1,
                gridDashType: "dash",
                tickColor: "#718EBF", //tick color
                tickLength: 2, //tick height
                tickThickness: 2, // tick wight
                lineThickness: 0,
            },
            axisY: {
                gridColor: "#DFE5EE",
                gridDashType: "dash",
                includeZero: true,
                gridThickness: 1,
                tickColor: "#718EBF", //tick color
                tickLength: 6, //tick height
                tickThickness: 2, // tick wight
                lineThickness: 0,
            },
            data: [
                {
                    type: "splineArea",
                    markerType: "",
                    dataPoints: [
                        { y: 100, label: "Jul"},
                        { y: 370, label: "Aug"},
                        { y: 550, label: "Sep"},
                        { y: 400, label: "Oct"},
                        { y: 700, label: "Nov "},
                        { y: 200, label: "Dec"},
                        { y: 580, label: "Jan"},
                        { y: 220, label: "Feb"},
                        { y: 600, label: "March"}
                    ]
                }
            ]
        };
        $("#areachartContainer").CanvasJSChart(options);

    }
</script>
</body>
</html>