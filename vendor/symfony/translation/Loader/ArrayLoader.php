<?php

/*
 * This file is part of the SymfonyNew package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SymfonyNew\Component\Translation\Loader;

use SymfonyNew\Component\Translation\MessageCatalogue;

/**
 * ArrayLoader loads translations from a PHP array.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load($resource, string $locale, string $domain = 'messages')
    {
        $resource = $this->flatten($resource);
        $catalogue = new MessageCatalogue($locale);
        $catalogue->add($resource, $domain);

        return $catalogue;
    }

    /**
     * Flattens an nested array of translations.
     *
     * The scheme used is:
     *   'key' => ['key2' => ['key3' => 'value']]
     * Becomes:
     *   'key.key2.key3' => 'value'
     */
    private function flatten(array $messages): array
    {
        $result = [];
        foreach ($messages as $key => $value) {
            if (\is_array($value)) {
                foreach ($this->flatten($value) as $k => $v) {
                    $result[$key.'.'.$k] = $v;
                }
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
