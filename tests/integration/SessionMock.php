<?php

class SessionMock implements CropTool\SessionInterface
{
	public function __invoke($r, $t, callable $next) {
		return $next($r, $t);
	}

	public function __call($f, $a) { }
}
