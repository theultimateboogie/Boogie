<?php

/*
__PocketMine Plugin__
name=Boogs
version=0.0.1
author=larbob
class=boogs
apiversion=12
*/

class boogs implements Plugin{

	private $api;
	
	public function __construct(ServerAPI $api, $server = false){
	$this->api = $api;
	
}

public function init(){
$this->api->console->register("boogie","Boogie!",array($this, "boogie"));
$this->api->ban->cmdWhitelist("boogie");
}

public function boogie($cmd){
$this->api->chat->broadcast("[Boogie] You are all boogies.");
}

public function __destruct(){
}
}
?>