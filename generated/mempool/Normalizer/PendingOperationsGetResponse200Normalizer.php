<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Mempool\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Mempool\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PendingOperationsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('validated', $data)) {
            $values = [];
            foreach ($data['validated'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200ValidatedItem::class, 'json', $context);
            }
            $object->setValidated($values);
            unset($data['validated']);
        }
        if (\array_key_exists('refused', $data)) {
            $values_1 = [];
            foreach ($data['refused'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200RefusedItem::class, 'json', $context);
            }
            $object->setRefused($values_1);
            unset($data['refused']);
        }
        if (\array_key_exists('outdated', $data)) {
            $values_2 = [];
            foreach ($data['outdated'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200OutdatedItem::class, 'json', $context);
            }
            $object->setOutdated($values_2);
            unset($data['outdated']);
        }
        if (\array_key_exists('branch_refused', $data)) {
            $values_3 = [];
            foreach ($data['branch_refused'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200BranchRefusedItem::class, 'json', $context);
            }
            $object->setBranchRefused($values_3);
            unset($data['branch_refused']);
        }
        if (\array_key_exists('branch_delayed', $data)) {
            $values_4 = [];
            foreach ($data['branch_delayed'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200BranchDelayedItem::class, 'json', $context);
            }
            $object->setBranchDelayed($values_4);
            unset($data['branch_delayed']);
        }
        if (\array_key_exists('unprocessed', $data)) {
            $values_5 = [];
            foreach ($data['unprocessed'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200UnprocessedItem::class, 'json', $context);
            }
            $object->setUnprocessed($values_5);
            unset($data['unprocessed']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getValidated() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['validated'] = $values;
        $values_1 = [];
        foreach ($data->getRefused() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['refused'] = $values_1;
        $values_2 = [];
        foreach ($data->getOutdated() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $dataArray['outdated'] = $values_2;
        $values_3 = [];
        foreach ($data->getBranchRefused() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $dataArray['branch_refused'] = $values_3;
        $values_4 = [];
        foreach ($data->getBranchDelayed() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $dataArray['branch_delayed'] = $values_4;
        $values_5 = [];
        foreach ($data->getUnprocessed() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $dataArray['unprocessed'] = $values_5;
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Mempool\Model\PendingOperationsGetResponse200::class => false];
    }
}
