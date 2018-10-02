<?php

Router::connect('/battlelevels', ['controller' => 'BattleLevels', 'action' => 'index', 'plugin' => 'BattleLevels']);
Router::connect('/battlelevels/p/:player', ['controller' => 'BattleLevels', 'action' => 'player', 'plugin' => 'BattleLevels'], ['pass' => ['player']]);
