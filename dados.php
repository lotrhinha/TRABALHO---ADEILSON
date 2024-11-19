<?php 
include 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Pizza Tango</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="100" height="150"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const tango = <?php echo $tango; ?>;
        const naotango = <?php echo $naotango; ?>;

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Tango', 'Outras dança'],
                datasets: [{
                    label: 'Número de danças',
                    data: [tango, naotango],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 0,
                    responsive: true
                }]
            }
        });
    </script>   

</body>
</html>