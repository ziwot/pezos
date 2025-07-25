<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Shell\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConfigNetworkDalGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Shell\Model\ConfigNetworkDalGetResponse200::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Shell\Model\ConfigNetworkDalGetResponse200::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigNetworkDalGetResponse200();
        if (\array_key_exists('activated', $data) && \is_int($data['activated'])) {
            $data['activated'] = (bool) $data['activated'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activated', $data)) {
            $object->setActivated($data['activated']);
            unset($data['activated']);
        }
        if (\array_key_exists('bootstrap_peers', $data)) {
            $values = [];
            foreach ($data['bootstrap_peers'] as $value) {
                $values[] = $value;
            }
            $object->setBootstrapPeers($values);
            unset($data['bootstrap_peers']);
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
        if ($data->isInitialized('activated') && null !== $data->getActivated()) {
            $dataArray['activated'] = $data->getActivated();
        }
        $values = [];
        foreach ($data->getBootstrapPeers() as $value) {
            $values[] = $value;
        }
        $dataArray['bootstrap_peers'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Shell\Model\ConfigNetworkDalGetResponse200::class => false];
    }
}
