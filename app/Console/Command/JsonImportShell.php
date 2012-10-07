<?php

App::uses('Shell', 'Console');

class JsonImportShell extends Shell {

	public $uses = array('Course');
	
	public function main() {
		if(!isset($this->args[0]))
			die("\nUsage: JsonImprt <file>\n\n");

		$courses = $this->Course->find('all');
		$json = json_encode($courses);
		file_put_contents('junk.json', $json);
		$string = file_get_contents($this->args[0]);
		$data = json_decode($string,true);
	}
}
