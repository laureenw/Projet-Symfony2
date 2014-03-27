<?php
// src/Fallen\FallenBundle/FallenBundle.php
namespace Fallen\FallenBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FallenBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}


