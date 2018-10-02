<?php

class BattleLevelsController extends AppController
{
	public function index()
	{
		if(!empty($this->request->data['q'])){
			$this->redirect([
				'controller' => 'BattleLevels',
				'action' => 'player',
				'plugin' => 'BattleLevels',
				'player' => $this->request->data['q']]);
		}
		
		$list = $this->Server->call('GET_BATTLELEVEL_LIST', $config['serverid'])['GET_BATTLELEVEL_LIST'];
		
        $this->set(compact('list'));
	}
	
	public function player($player)
	{
		$stats = $this->Server->call(['GET_BATTLELEVEL_PLAYER' => $player], $config['serverid'])['GET_BATTLELEVEL_PLAYER'][0];
		
		$this->set(compact('stats'));
	}
	
}