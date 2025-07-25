<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Dal\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Dal\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Dal\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PublishedLevelsInt32KnownTrapsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Dal\Model\PublishedLevelsInt32KnownTrapsGetResponse200Item::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Dal\Model\PublishedLevelsInt32KnownTrapsGetResponse200Item::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Dal\Model\PublishedLevelsInt32KnownTrapsGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('delegate', $data)) {
            $object->setDelegate($data['delegate']);
            unset($data['delegate']);
        }
        if (\array_key_exists('slot_index', $data)) {
            $object->setSlotIndex($data['slot_index']);
            unset($data['slot_index']);
        }
        if (\array_key_exists('shard', $data)) {
            $values = [];
            foreach ($data['shard'] as $value) {
                $values[] = $value;
            }
            $object->setShard($values);
            unset($data['shard']);
        }
        if (\array_key_exists('proof', $data)) {
            $object->setProof($data['proof']);
            unset($data['proof']);
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
        $dataArray['delegate'] = $data->getDelegate();
        $dataArray['slot_index'] = $data->getSlotIndex();
        $values = [];
        foreach ($data->getShard() as $value) {
            $values[] = $value;
        }
        $dataArray['shard'] = $values;
        $dataArray['proof'] = $data->getProof();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Dal\Model\PublishedLevelsInt32KnownTrapsGetResponse200Item::class => false];
    }
}
