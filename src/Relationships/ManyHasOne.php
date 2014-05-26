<?php

/**
 * This file is part of the Nextras\ORM library.
 *
 * @license    MIT
 * @link       https://github.com/nextras/orm
 * @author     Jan Skrasek
 */

namespace Nextras\Orm\Relationships;


class ManyHasOne extends HasOne
{

	protected function updateRelationship($oldEntity, $newEntity)
	{
		$key = $this->propertyMeta->name;

		if ($oldEntity) {
			$oldEntity->{$key}->remove($this);
		}

		if ($newEntity) {
			$newEntity->{$key}->add($this);
		}
	}

}