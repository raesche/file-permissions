<?php

namespace Propel\Generator\Behavior\FilePermission;

use Propel\Generator\Builder\Om\QueryBuilder;
use Propel\Generator\Model\Behavior;
use Propel\Generator\Model\Column;
use Propel\Generator\Model\ForeignKey;
use Propel\Generator\Util\PhpParser;
use Propel\Runtime\Exception\PropelException;


class FilePermissionBehavior extends Behavior
{
  // default parameters value
  protected $parameters = array(
    'name' => null,
  );
}
