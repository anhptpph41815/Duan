<?php
$connect = new mysqli('localhost', 'root', '', 'asm_php1');
$query= "SELECT `category`.*, COUNT(product.id_category) AS 'number_category' FROM `product` INNER JOIN `category` ON product.id_category
= category.id GROUP BY product.id_category";
$result= mysqli_query($connect, $query);
$data=[];
while ($row = mysqli_fetch_array($result)){
  $data[]=$row;
}


?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['name', 'number_category'],
          <?php 
          foreach($data as $key) {
            echo "['".$key['name']."' , ".$key['number_category']."],";
          }
          ?>
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>