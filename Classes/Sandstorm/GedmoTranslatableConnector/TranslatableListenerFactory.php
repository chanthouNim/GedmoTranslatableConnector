<?php
namespace Sandstorm\GedmoTranslatableConnector;

/*                                                                            *
 * This script belongs to the Package "Sandstorm.GedmoTranslatableConnector". *
 *                                                                            *
 * It is free software; you can redistribute it and/or modify it under        *
 * the terms of the GNU Lesser General Public License, either version 3       *
 * of the License, or (at your option) any later version.                     *
 *                                                                            *
 * The TYPO3 project - inspiring people to share!                             *
 *                                                                            */


use Neos\Flow\Annotations as Flow;
use Gedmo\Translatable\TranslatableListener;

/**
 * Builder for TranslatableListener; injecting locale and default locale from settings
 *
 * @Flow\Scope("singleton")
 */
class TranslatableListenerFactory {

	/**
	 * @Flow\InjectConfiguration(path="defaultLocale")
	 * @var string
	 */
	protected $defaultLocale;

	/**
	 * @Flow\InjectConfiguration(path="locale")
	 * @var string
	 */
	protected $locale;

	public function create() {
		$listener = new TranslatableListener();
		$listener->setDefaultLocale($this->defaultLocale);
		$listener->setTranslatableLocale($this->locale);
		return $listener;
	}

}
