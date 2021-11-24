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

use SymfonyNew\Component\Translation\Exception\InvalidResourceException;
use SymfonyNew\Component\Translation\Exception\LogicException;
use SymfonyNew\Component\Yaml\Exception\ParseException;
use SymfonyNew\Component\Yaml\Parser as YamlParser;
use SymfonyNew\Component\Yaml\Yaml;

/**
 * YamlFileLoader loads translations from Yaml files.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class YamlFileLoader extends FileLoader
{
    private $yamlParser;

    /**
     * {@inheritdoc}
     */
    protected function loadResource(string $resource)
    {
        if (null === $this->yamlParser) {
            if (!class_exists(\SymfonyNew\Component\Yaml\Parser::class)) {
                throw new LogicException('Loading translations from the YAML format requires the SymfonyNew Yaml component.');
            }

            $this->yamlParser = new YamlParser();
        }

        try {
            $messages = $this->yamlParser->parseFile($resource, Yaml::PARSE_CONSTANT);
        } catch (ParseException $e) {
            throw new InvalidResourceException(sprintf('The file "%s" does not contain valid YAML: ', $resource).$e->getMessage(), 0, $e);
        }

        if (null !== $messages && !\is_array($messages)) {
            throw new InvalidResourceException(sprintf('Unable to load file "%s".', $resource));
        }

        return $messages ?: [];
    }
}
