<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Rollup\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Rollup\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LocalOutboxPendingUnexecutableGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Rollup\Model\LocalOutboxPendingUnexecutableGetResponse200Item::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\LocalOutboxPendingUnexecutableGetResponse200Item::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Rollup\Model\LocalOutboxPendingUnexecutableGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('outbox_level', $data)) {
            $object->setOutboxLevel($data['outbox_level']);
            unset($data['outbox_level']);
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Rollup\Model\LocalOutboxPendingUnexecutableGetResponse200ItemMessagesItem::class, 'json', $context);
            }
            $object->setMessages($values);
            unset($data['messages']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['outbox_level'] = $data->getOutboxLevel();
        $values = [];
        foreach ($data->getMessages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['messages'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Rollup\Model\LocalOutboxPendingUnexecutableGetResponse200Item::class => false];
    }
}
