<!--   Core JS Files   -->
<script src="<?php echo $rootPath; ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
<!-- Kanban scripts -->
<script src="<?php echo $rootPath; ?>/assets/js/plugins/nouislider.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/chartjs.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/fullcalendar.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/dropzone.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/jquery-3.7.1.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/moment.min.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/datatables.js"></script>
<script src="<?php echo $rootPath; ?>/assets/js/plugins/leaflet.js"></script>

<script>
  // var ctx1 = document.getElementById("chart-line").getContext("2d");

  // var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

  // gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
  // gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
  // gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
  // new Chart(ctx1, {
  //   type: "line",
  //   data: {
  //     labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
  //     datasets: [{
  //       label: "Mobile apps",
  //       tension: 0.4,
  //       borderWidth: 0,
  //       pointRadius: 0,
  //       borderColor: "#5e72e4",
  //       backgroundColor: gradientStroke1,
  //       borderWidth: 3,
  //       fill: true,
  //       data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
  //       maxBarThickness: 6

  //     }],
  //   },
  //   options: {
  //     responsive: true,
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         display: false,
  //       }
  //     },
  //     interaction: {
  //       intersect: false,
  //       mode: 'index',
  //     },
  //     scales: {
  //       y: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5]
  //         },
  //         ticks: {
  //           display: true,
  //           padding: 10,
  //           color: '#fbfbfb',
  //           font: {
  //             size: 11,
  //             family: "Open Sans",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //       x: {
  //         grid: {
  //           drawBorder: false,
  //           display: false,
  //           drawOnChartArea: false,
  //           drawTicks: false,
  //           borderDash: [5, 5]
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#ccc',
  //           padding: 20,
  //           font: {
  //             size: 11,
  //             family: "Open Sans",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //     },
  //   },
  // });
</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo $rootPath; ?>/assets/js/argon-dashboard.min.js"></script>



<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('<?php echo $rootPath; ?>/assets/js/service-worker.js')
        .then(reg => console.log("Service Worker Registered", reg))
        .catch(err => console.log("Service Worker Registration Failed", err));
    });
  }
</script>

<script>
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      // Send the coordinates to the server
      console.log(latitude + "," + longitude);
    }, function (error) {
      console.error('Error getting location: ', error);
    });
  } else {
    alert('Geolocation is not supported by this browser.');
  }
</script>