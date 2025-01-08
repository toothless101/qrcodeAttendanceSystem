@extends('layout.app')
@section('title', 'SSEA | Officer Home')
@section('content')

<link rel="stylesheet" href="{{ asset('css/student-officer-css/mobile-view/mobile-view.css')}}">

@include('student-officers/stud-partials.std-sidebar')

<x-header-section>
    Home
</x-header-section>

<section id="main" class="main">

    <div class="section dashboard d-flex">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="wlcm_card">

                <div class="card-body">

                  <div class="d-flex align-items-center">
                    
                    <div class="card-date">
                        <label id="date"></label>
                    </div>
                   
                  </div> 
                  
                  <h5 id="wlcm_mssge_card" class="wlcm_mssge_card">Welcome back!</h5>

                </div>
                 
              </div>
            </div><!-- Welcome message -->  
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card current-card">
  
                  <div class="card-body">
  
                    <div class="current_event_card">
                      <div class="ps-1 card-info">
                        <h6 class="event-card-title">Current Event</h6>  
                      </div>
                    </div>
                    <h5 id="current_event" class="current_event">TCCSTFI Intramurals 2024</h5>

                  </div>

                 <!-- <div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->

                </div>
              </div><!-- End Total Assessmet -->
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card current-card">
  
                  <div class="card-body">
  
                    <div class="current_event_card attendees-card">
                      <div class="ps-1 card-info">
                        <h6 class="event-card-title">Current Attendees</h6>  
                      </div>
                    </div>
                      <div class="current-attendees-table">
                        <table>
                          <thead>
                            <th>Student Name</th>
                            <th>Year Level</th>
                            <th>Time</th>
                          </thead>
                          <tbody id="student_info">
                            <tr>
                              <td>Hilary Mae E. Poralan</td>
                              <td>4th Year</td>
                              <td>8:30 am</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                  
                  <!--<div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->

                </div>
              </div><!-- End Sof Current Balance -->
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card current-card">
  
                  <div class="card-body" id="chart-container">
                    <!-- Title -->
                    <div class="no-of-students">
                      <div class="ps-1">
                        <h6 class="no-of-students-title">No. of Students</h6>  
                      </div>
                    </div>
                  
                    <!-- Doughnut Chart -->
                    <canvas id="studentsDoughnutChart" style="margin-top: 20px;"></canvas>
                  
                    <!-- Chart Legend -->
                    <div class="chart-legend">
                      <div class="legend-item">
                        <div class="legend-color" style="background-color: #FFAD60;"></div>
                        <span class="legend-text">No. Of Attendees</span>
                      </div>
                      <div class="legend-item">
                        <div class="legend-color" style="background-color: #FFEEAD;"></div>
                        <span class="legend-text">Total Registered Students</span>
                      </div>
                    </div>
                  </div>
                  
  
                <!--  <div class="dash_illustrations">
                    <img src="img/images/Thesis-rafiki-removebg-preview.png" alt="student doing thesis">
                  </div>-->
                  
                </div>
              </div><!-- End Sof Current Balance -->
            </div>
              
          </div>
        </div>
        </div>
</section>
    <!-- End #main -->

@include('student-officers/stud-partials.nav-bottom')

<script>
  

    //date
    const datetoday = new Date();
    const dateformat = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const dateString = datetoday.toLocaleDateString('en-US', dateformat); // Customize format based on locale
    document.getElementById("date").innerHTML = dateString;

    //doughnut chart
    const ctx = document.getElementById('studentsDoughnutChart').getContext('2d');

let data = {
  labels: ['Current Student Attendance', 'Total Registered Students'],
  datasets: [{
    data: ["1450", "2000"], // Initial values
    backgroundColor: ['#FFEEAD', '#FFAD60'],
    hoverOffset: 2,
    borderWidth: 1,
  }]
};

const options = {
  cutout: '60%',
  responsive: false,
  maintainAspectRatio:false,
  plugins: {
    legend: {
      display: false,
    },
    tooltip: {
      callbacks: {
        label: function(tooltipItem) {
          const total = data.datasets[0].data.reduce((a, b) => a + b, 0);
          const value = data.datasets[0].data[tooltipItem.dataIndex];
          const percentage = ((value / total) * 100).toFixed(1);
          return `${value} (${percentage}%)`;
        }
      }
    }
  }
};

// Create the initial chart
const myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,
  options: options,
});



</script>

@endsection