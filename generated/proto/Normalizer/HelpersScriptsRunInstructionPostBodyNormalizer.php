<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HelpersScriptsRunInstructionPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBody();
        if (\array_key_exists('legacy', $data) && \is_int($data['legacy'])) {
            $data['legacy'] = (bool) $data['legacy'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('input', $data)) {
            $values = [];
            foreach ($data['input'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBodyInputItem::class, 'json', $context);
            }
            $object->setInput($values);
            unset($data['input']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (\array_key_exists('chain_id', $data)) {
            $object->setChainId($data['chain_id']);
            unset($data['chain_id']);
        }
        if (\array_key_exists('gas', $data)) {
            $object->setGas($data['gas']);
            unset($data['gas']);
        }
        if (\array_key_exists('now', $data)) {
            $object->setNow($data['now']);
            unset($data['now']);
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
            unset($data['level']);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($data['sender']);
            unset($data['sender']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
            unset($data['self']);
        }
        if (\array_key_exists('parameter', $data)) {
            $object->setParameter($data['parameter']);
            unset($data['parameter']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        if (\array_key_exists('other_contracts', $data)) {
            $values_1 = [];
            foreach ($data['other_contracts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBodyOtherContractsItem::class, 'json', $context);
            }
            $object->setOtherContracts($values_1);
            unset($data['other_contracts']);
        }
        if (\array_key_exists('big_maps', $data)) {
            $values_2 = [];
            foreach ($data['big_maps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBodyBigMapsItem::class, 'json', $context);
            }
            $object->setBigMaps($values_2);
            unset($data['big_maps']);
        }
        if (\array_key_exists('unparsing_mode', $data)) {
            $object->setUnparsingMode($data['unparsing_mode']);
            unset($data['unparsing_mode']);
        }
        if (\array_key_exists('legacy', $data)) {
            $object->setLegacy($data['legacy']);
            unset($data['legacy']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getInput() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['input'] = $values;
        $dataArray['code'] = $data->getCode();
        $dataArray['chain_id'] = $data->getChainId();
        if ($data->isInitialized('gas') && null !== $data->getGas()) {
            $dataArray['gas'] = $data->getGas();
        }
        if ($data->isInitialized('now') && null !== $data->getNow()) {
            $dataArray['now'] = $data->getNow();
        }
        if ($data->isInitialized('level') && null !== $data->getLevel()) {
            $dataArray['level'] = $data->getLevel();
        }
        if ($data->isInitialized('sender') && null !== $data->getSender()) {
            $dataArray['sender'] = $data->getSender();
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['source'] = $data->getSource();
        }
        if ($data->isInitialized('self') && null !== $data->getSelf()) {
            $dataArray['self'] = $data->getSelf();
        }
        if ($data->isInitialized('parameter') && null !== $data->getParameter()) {
            $dataArray['parameter'] = $data->getParameter();
        }
        $dataArray['amount'] = $data->getAmount();
        if ($data->isInitialized('balance') && null !== $data->getBalance()) {
            $dataArray['balance'] = $data->getBalance();
        }
        if ($data->isInitialized('otherContracts') && null !== $data->getOtherContracts()) {
            $values_1 = [];
            foreach ($data->getOtherContracts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['other_contracts'] = $values_1;
        }
        if ($data->isInitialized('bigMaps') && null !== $data->getBigMaps()) {
            $values_2 = [];
            foreach ($data->getBigMaps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['big_maps'] = $values_2;
        }
        if ($data->isInitialized('unparsingMode') && null !== $data->getUnparsingMode()) {
            $dataArray['unparsing_mode'] = $data->getUnparsingMode();
        }
        if ($data->isInitialized('legacy') && null !== $data->getLegacy()) {
            $dataArray['legacy'] = $data->getLegacy();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Proto\Model\HelpersScriptsRunInstructionPostBody::class => false];
    }
}
