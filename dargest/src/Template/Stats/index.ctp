<h2>Index tableau de bord</h2>
<?php echo $UsersCount; ?>


<canvas id="myChart" width="400" height="400"></canvas>

<script type="text/javascript">
var msg='<?PHP echo $UsersLabels;?>';
 alert(msg);
</script>

<script src="/dargest/js/Chart.js" type="text/javascript"></script>
<script src="/dargest/js/Chart.graph.js" type="text/javascript"></script>