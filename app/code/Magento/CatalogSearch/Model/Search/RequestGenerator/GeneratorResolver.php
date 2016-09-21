<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogSearch\Model\Search\RequestGenerator;

class GeneratorResolver
{
    /**
     * @var GeneratorInterface[]
     */
    private $generators;

    /**
     * @var GeneratorInterface
     */
    private $defaultGenerator;

    /**
     * @param GeneratorInterface $defaultGenerator
     * @param GeneratorInterface[] $generators
     */
    public function __construct(GeneratorInterface $defaultGenerator, array $generators)
    {
        $this->defaultGenerator = $defaultGenerator;
        $this->generators = $generators;
    }

    /**
     * @param string $type
     * @return GeneratorInterface
     */
    public function getGeneratorForType($type)
    {
        return isset($this->generators[$type]) ? $this->generators[$type] : $this->defaultGenerator;
    }
}
