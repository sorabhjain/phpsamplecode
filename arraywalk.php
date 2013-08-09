<ul>
<?php
$lampstack = array('MacOs','Apache','MySQL','PHP');
$labels = array('Operating System','Server','Database','Language');
$length = sizeof($lampstack);
for( $i = 0;$i < $length;$i++ ){
  echo '<li>' . $labels[$i] . ':' . $lampstack[$i] . '</li>';
}
?>
</ul>
