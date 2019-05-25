<?php
require("dbi.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

$result_marker = "SELECT * FROM markers";
$resultado_markers = mysqli_query($conexao, $result_marker);

header("Content-type: text/xml");

echo '<markers>';

while ($row = @mysqli_fetch_assoc($resultado_markers)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . $row['id'] . '" ';
    echo 'nome="' . parseToXML($row['nome']) . '" ';
    echo 'endereco="' . parseToXML($row['endereco']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo '/>';
    $ind = $ind + 1;
  }

echo '</markers>';