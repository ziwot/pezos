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

class ConfigGetResponse200FeeParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParameters::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParameters::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParameters();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('publish', $data)) {
            $object->setPublish($this->denormalizer->denormalize($data['publish'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersPublish::class, 'json', $context));
            unset($data['publish']);
        }
        if (\array_key_exists('add_messages', $data)) {
            $object->setAddMessages($this->denormalizer->denormalize($data['add_messages'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class, 'json', $context));
            unset($data['add_messages']);
        }
        if (\array_key_exists('cement', $data)) {
            $object->setCement($this->denormalizer->denormalize($data['cement'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersCement::class, 'json', $context));
            unset($data['cement']);
        }
        if (\array_key_exists('timeout', $data)) {
            $object->setTimeout($this->denormalizer->denormalize($data['timeout'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersTimeout::class, 'json', $context));
            unset($data['timeout']);
        }
        if (\array_key_exists('refute', $data)) {
            $object->setRefute($this->denormalizer->denormalize($data['refute'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersRefute::class, 'json', $context));
            unset($data['refute']);
        }
        if (\array_key_exists('recover', $data)) {
            $object->setRecover($this->denormalizer->denormalize($data['recover'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersRecover::class, 'json', $context));
            unset($data['recover']);
        }
        if (\array_key_exists('execute_outbox_message', $data)) {
            $object->setExecuteOutboxMessage($this->denormalizer->denormalize($data['execute_outbox_message'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersExecuteOutboxMessage::class, 'json', $context));
            unset($data['execute_outbox_message']);
        }
        if (\array_key_exists('publish_dal_commitment', $data)) {
            $object->setPublishDalCommitment($this->denormalizer->denormalize($data['publish_dal_commitment'], \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersPublishDalCommitment::class, 'json', $context));
            unset($data['publish_dal_commitment']);
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
        if ($data->isInitialized('publish') && null !== $data->getPublish()) {
            $dataArray['publish'] = $this->normalizer->normalize($data->getPublish(), 'json', $context);
        }
        if ($data->isInitialized('addMessages') && null !== $data->getAddMessages()) {
            $dataArray['add_messages'] = $this->normalizer->normalize($data->getAddMessages(), 'json', $context);
        }
        if ($data->isInitialized('cement') && null !== $data->getCement()) {
            $dataArray['cement'] = $this->normalizer->normalize($data->getCement(), 'json', $context);
        }
        if ($data->isInitialized('timeout') && null !== $data->getTimeout()) {
            $dataArray['timeout'] = $this->normalizer->normalize($data->getTimeout(), 'json', $context);
        }
        if ($data->isInitialized('refute') && null !== $data->getRefute()) {
            $dataArray['refute'] = $this->normalizer->normalize($data->getRefute(), 'json', $context);
        }
        if ($data->isInitialized('recover') && null !== $data->getRecover()) {
            $dataArray['recover'] = $this->normalizer->normalize($data->getRecover(), 'json', $context);
        }
        if ($data->isInitialized('executeOutboxMessage') && null !== $data->getExecuteOutboxMessage()) {
            $dataArray['execute_outbox_message'] = $this->normalizer->normalize($data->getExecuteOutboxMessage(), 'json', $context);
        }
        if ($data->isInitialized('publishDalCommitment') && null !== $data->getPublishDalCommitment()) {
            $dataArray['publish_dal_commitment'] = $this->normalizer->normalize($data->getPublishDalCommitment(), 'json', $context);
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
        return [\Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParameters::class => false];
    }
}
