<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main>
    <h2 class="center">İstatistikler</h2>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="chart-container">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            
            <div class="col s12 m6">
                <div class="chart-container">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
</main>


<script>
// For a pie chart
new Chart(document.getElementById("myChart"),
{"type":'polarArea',"options":{"responsive": true},"data":{"labels":["Onaylanmayan","Ana Grup","Hazırlık", "Toplam"],
"datasets":[{"label":"My First Dataset","data":[<?php echo getNonConfUsers(); ?>,<?php echo getMainUsers(); ?>,<?php echo getPrepUsers(); ?>, <?php echo getAllUsers(); ?>],
"backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]}]}});
</script>