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

class ConfigGetResponse200SmartRollupNodeOperatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Rollup\Model\ConfigGetResponse200SmartRollupNodeOperator::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\ConfigGetResponse200SmartRollupNodeOperator::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Rollup\Model\ConfigGetResponse200SmartRollupNodeOperator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operating', $data)) {
            $object->setOperating($data['operating']);
            unset($data['operating']);
        }
        if (\array_key_exists('batching', $data)) {
            $object->setBatching($data['batching']);
            unset($data['batching']);
        }
        if (\array_key_exists('cementing', $data)) {
            $object->setCementing($data['cementing']);
            unset($data['cementing']);
        }
        if (\array_key_exists('recovering', $data)) {
            $object->setRecovering($data['recovering']);
            unset($data['recovering']);
        }
        if (\array_key_exists('executing_outbox', $data)) {
            $object->setExecutingOutbox($data['executing_outbox']);
            unset($data['executing_outbox']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('operating') && null !== $data->getOperating()) {
            $dataArray['operating'] = $data->getOperating();
        }
        if ($data->isInitialized('batching') && null !== $data->getBatching()) {
            $dataArray['batching'] = $data->getBatching();
        }
        if ($data->isInitialized('cementing') && null !== $data->getCementing()) {
            $dataArray['cementing'] = $data->getCementing();
        }
        if ($data->isInitialized('recovering') && null !== $data->getRecovering()) {
            $dataArray['recovering'] = $data->getRecovering();
        }
        if ($data->isInitialized('executingOutbox') && null !== $data->getExecutingOutbox()) {
            $dataArray['executing_outbox'] = $data->getExecutingOutbox();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Rollup\Model\ConfigGetResponse200SmartRollupNodeOperator::class => false];
    }
}
