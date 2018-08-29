<?php

namespace JSC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JSCUserBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
