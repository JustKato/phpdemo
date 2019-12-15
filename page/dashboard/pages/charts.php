<div class="chart">
    <div class="canvas0" style="max-width: 85%; margin: 0 auto;">
        <h1>Administrative Logs</h1>
        <canvas width="1000" style="width: 100%;" id="ctx0"></canvas>
    </div>
</div>

<div class="chart">
    <div class="canvas1" style="max-width: 85%; margin: 0 auto;">
        <h1>Client Logs</h1>
        <canvas width="1000" style="width: 100%;" id="ctx1"></canvas>
    </div>
</div>

<script>


var ctx0 = document.getElementById('ctx0').getContext('2d');
var chart0 = new Chart(ctx0, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Database Logs',
                backgroundColor: 'rgb(255, 99, 132, .5)',
                borderColor: 'rgb(255, 99, 132)',
                data: [242, 322, 411, 552, 410, 447, 612]
            },
            {
                label: 'Client Logins',
                backgroundColor: 'rgb(100, 99, 255, .5)',
                borderColor: 'rgb(80, 80, 255)',
                data: [142, 412, 521, 462, 390, 457, 482]
            },
            {
                label: 'Admin Logins',
                backgroundColor: 'rgb(100, 255, 111, .5)',
                borderColor: 'rgb(100, 255, 80)',
                data: [42, 12, 21, 62, 90, 57, 82]
            },
        ]
    },

    // Configuration options go here
    options: {

    }
});

var ctx1 = document.getElementById('ctx1').getContext('2d');
var chart1 = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Clients Lost',
                backgroundColor: 'rgb(255, 99, 132, .5)',
                borderColor: 'rgb(255, 99, 132)',
                data: [1, 2, 1, 0, 0, 3, 1]
            },
            {
                label: 'Clients Satisfied',
                backgroundColor: 'rgb(100, 99, 255, .5)',
                borderColor: 'rgb(80, 80, 255)',
                data: [52, 31, 45, 33, 56, 42, 21]
            },
            {
                label: 'Leads',
                backgroundColor: 'rgb(100, 255, 111, .5)',
                borderColor: 'rgb(100, 255, 80)',
                data: [42, 12, 21, 62, 90, 57, 82]
            },
        ]
    },

    // Configuration options go here
    options: {

    }
});


</script>