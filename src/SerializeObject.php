<?php

declare(strict_types=1);

namespace PhpSerializer\Serializer;

interface SerializeObject
{
    /**
     * @param object $object
     * @param array<string, mixed> $context
     *
     * @return string
     *
     * @throws UnableToSerializeObject
     */
    public function serialize(object $object, array $context = []): string;
}
