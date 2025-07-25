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

class ContextIssuanceExpectedIssuanceGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Pezos\Generated\Proto\Model\ContextIssuanceExpectedIssuanceGetResponse200Item::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextIssuanceExpectedIssuanceGetResponse200Item::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\ContextIssuanceExpectedIssuanceGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cycle', $data)) {
            $object->setCycle($data['cycle']);
            unset($data['cycle']);
        }
        if (\array_key_exists('baking_reward_fixed_portion', $data)) {
            $object->setBakingRewardFixedPortion($data['baking_reward_fixed_portion']);
            unset($data['baking_reward_fixed_portion']);
        }
        if (\array_key_exists('baking_reward_bonus_per_slot', $data)) {
            $object->setBakingRewardBonusPerSlot($data['baking_reward_bonus_per_slot']);
            unset($data['baking_reward_bonus_per_slot']);
        }
        if (\array_key_exists('attesting_reward_per_slot', $data)) {
            $object->setAttestingRewardPerSlot($data['attesting_reward_per_slot']);
            unset($data['attesting_reward_per_slot']);
        }
        if (\array_key_exists('seed_nonce_revelation_tip', $data)) {
            $object->setSeedNonceRevelationTip($data['seed_nonce_revelation_tip']);
            unset($data['seed_nonce_revelation_tip']);
        }
        if (\array_key_exists('vdf_revelation_tip', $data)) {
            $object->setVdfRevelationTip($data['vdf_revelation_tip']);
            unset($data['vdf_revelation_tip']);
        }
        if (\array_key_exists('dal_attesting_reward_per_shard', $data)) {
            $object->setDalAttestingRewardPerShard($data['dal_attesting_reward_per_shard']);
            unset($data['dal_attesting_reward_per_shard']);
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
        $dataArray['cycle'] = $data->getCycle();
        $dataArray['baking_reward_fixed_portion'] = $data->getBakingRewardFixedPortion();
        $dataArray['baking_reward_bonus_per_slot'] = $data->getBakingRewardBonusPerSlot();
        $dataArray['attesting_reward_per_slot'] = $data->getAttestingRewardPerSlot();
        $dataArray['seed_nonce_revelation_tip'] = $data->getSeedNonceRevelationTip();
        $dataArray['vdf_revelation_tip'] = $data->getVdfRevelationTip();
        $dataArray['dal_attesting_reward_per_shard'] = $data->getDalAttestingRewardPerShard();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Pezos\Generated\Proto\Model\ContextIssuanceExpectedIssuanceGetResponse200Item::class => false];
    }
}
