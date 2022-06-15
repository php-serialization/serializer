<?php

declare(strict_types=1);

namespace PhpSerializer\Serializer;

interface UnserializeObject
{
    /**
     * @template T of object
     *
     * @param class-string<T> $class
     * @param array $payload
     * @param array<string, mixed> $context
     *
     * @return T
     *
     * @throws UnableToUnserializeObject
     */
    public function unserialize(string $class, array $payload, array $context = []): object;
}
