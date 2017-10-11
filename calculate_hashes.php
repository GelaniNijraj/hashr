<?php
	require("function.php");
	foreach (hash_algos() as $i => $algo) { 
?>
	<div class="hash_algo">
		<p class="algo"><b><?= $algo; ?></b></p>
		<p>Hash: <span style="font-family: Nunito"><?= $hashes[$i]; ?></span></p>
        <small>Execution time: <?= number_format($hashTime[$algo] * 1000000000, 0); ?> nanoseconds</small>
	</div>
<?php } ?>