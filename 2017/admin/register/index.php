<?php
error_reporting(E_WARNING);
// header('Content-type: text/text');
if(!isset($_GET['r']) || empty($_GET['r'])) {
  die("Peace");
}
function proper_format($data) {
  $data = str_replace("\n","<br>", $data);
  return $data;
}
$c_dir = "../../registrations/";
// print_r(scandir($c_dir));
$rtem = trim($_GET['r']);
echo "<table border=1>";
foreach (glob($c_dir."$rtem-*.json") as $filename) {
  echo "<tr>";
  $data = file_get_contents($filename);
  $data = json_decode($data);
  echo "<td>".proper_format($data->college)."</td>";
  echo "<td>".proper_format($data->fname)."</td>";
  echo "<td>".proper_format($data->year)."</td>";
  echo "<td>".proper_format($data->branch)."</td>";
  echo "<td>".proper_format($data->email)."</td>";
  echo "<td>".proper_format($data->phone)."</td>";
  for($i=0;$i<count($data->name);$i++) {
    echo "<td>".proper_format($data->name[$i])."</td>";
  }
  echo "<td>".proper_format($data->extra)."</td>";
  echo "</tr>";
}
echo "</table>";