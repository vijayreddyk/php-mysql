<?php
class bus{
	function bus(){
		$this->wheels = 4;
		$this->name = "volvo";
	}
	function route(){
		$this->roue = "NH 9";
		return $this->roue;
	}
}
$newbus = new bus();
echo $newbus->name."\n";
echo $newbus->wheels."\n";
echo $newbus->route()."\n";
echo $newbus->roue;
?>
