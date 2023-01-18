<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale-1.0">
<meta http-equiv="X-Un-Compatible" content="ie-edge">
<title>stat</title> 
<script src="https://cdn. jsdelivr.net/npm/bootstraplS .0.8-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://ww.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://cdn. jsdelivr.net/npm/bootstrapÿs.e.

<script type="text/javascript"> beta3/dist/css/bootstrap.min.css" />
var analytics = <?php echo $genre;?>

 
google. charts.load( 'current', {'packages':[corechart]});
google. charts .setOnLoadCallback (drawChart);
function érauChart(}

{

‘corechart" ]});

 

var data = google.visualization.arrayTobataTable(analytics);
var options = {title : “Pourcentage d'étudiants masculins et féminins};
var chart = new google. visualization.PieChart(document .get£lement8y1d('pie_chart"));
chart.drau(data, options);
}
<script>
</head>
<body>
<div class="rou pt-4 d-flex justify-content-center">
<div class="col-8 d-flex justify-content-center">
<div class="card border-info text-center” style="width: S2rem
<div class="card-header border-info">
<h$ class="card-title">Pourcentage d'étudiants masculins et féminins</h5>
<idiv>
<div class="card-body" align="center">
<div id="pie_ chart" style="width:758px; height:458px;">
<éiv>
<idiv>
</div>
<div
<i>
</body>
</htnl>