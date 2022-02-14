<?php
$data = [1,2,3,4];
$jsData = json_encode($data);
?>

<script type="text/javascript">
var data = <?=$jsData?>;
console.log(data);
</script>