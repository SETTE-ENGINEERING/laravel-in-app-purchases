<?php

declare(strict_types=1);

namespace Imdhemy\Purchases\Contracts;

use Imdhemy\AppStore\Receipts\ReceiptResponse;
use Imdhemy\AppStore\ServerNotifications\V2DecodedPayload;
use Imdhemy\GooglePlay\Subscriptions\SubscriptionPurchase;
use Imdhemy\GooglePlay\Subscriptions\SubscriptionPurchaseV2;
use Imdhemy\Purchases\ValueObjects\Time;

/**
 * Interface SubscriptionContract.
 */
interface SubscriptionContract
{
    // List of providers
    public const PROVIDER_APP_STORE = 'app_store';
    public const PROVIDER_GOOGLE_PLAY = 'google_play';

    public function getExpiryTime(): Time;

    public function getItemId(): string;

    public function getProvider(): string;

    public function getUniqueIdentifier(): string;

    /**
     * @return mixed|SubscriptionPurchase|SubscriptionPurchaseV2|ReceiptResponse|V2DecodedPayload
     */
    public function getProviderRepresentation();
}
