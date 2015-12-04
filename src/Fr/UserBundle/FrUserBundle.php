<?php

namespace Fr\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
