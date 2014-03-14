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
	$username = $issuer->username;
	$this->api->chat->broadcast("[Boogie] You are all boogies.");
	$this->api->chat->sendTo(false, "[Boogie] You are the boogiest of them all.")
}

public function __destruct(){
}
}
?>