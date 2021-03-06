<?php

namespace BlockHorizons\BlockPets\pets\creatures;

use BlockHorizons\BlockPets\pets\SmallCreature;
use BlockHorizons\BlockPets\pets\WalkingPet;

class WolfPet extends WalkingPet implements SmallCreature {

	public $speed = 1.6;
	public $networkId = 14;

	public $name = "Wolf Pet";
	public $tier = self::TIER_EPIC;

	public $width = 0.72;
	public $height = 0.9;

	public function generateCustomPetData() {
		$randomColour = mt_rand(0, 15);
		$this->setDataProperty(self::DATA_COLOUR, self::DATA_TYPE_BYTE, $randomColour);
	}
}