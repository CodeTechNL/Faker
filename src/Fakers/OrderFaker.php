<?php

namespace CodeTechNL\Faker\Fakers;

/**
 *
 */
class OrderFaker
{
    /**
     * @var array|string[]
     */
    public static array $shipmentStatusses = [
        'shipped',
        'not_shipped'
    ];

    /**
     * @var array|string[]
     */
    public static array $shipmentTitles = [
        'Shipment by envelope',
        '24/7 Services'
    ];

    /**
     * @var array|string[]
     */
    public static array $paymentTitles = [
        'Cash',
        'On delivery',
        'Banktransfer'
    ];

    /**
     * @var array|string[]
     */
    public static array $paymentStatusses = [
        'paid',
        'not_paid'
    ];

    /**
     * @param \Faker\Generator $faker
     */
    public function __construct(protected \Faker\Generator $faker)
    {
    }

    /**
     * This list is a copy paste from https://codepen.io/DaveVan/pen/RaGGpy
     *
     * @var array|string[]
     */
    public static array $statusses = [
        'completed'
    ];

    /**
     * @var array|string[]
     */
    public static array $channels = [
        'main',
        'api'
    ];

    /**
     * @var array|string[]
     */
    public static array $paymentIds = [
        'payment_id'
    ];


    /**
     * @return mixed
     */
    public function randomOrderStatus(): string
    {
        return $this->faker->randomElement(self::$statusses);
    }

    /**
     * @return mixed
     */
    public function getRandomChannel(): string
    {
        return $this->faker->randomElement(self::$channels);
    }

    /**
     * @return string
     */
    public function getChannelMain(): string
    {
        return 'main';
    }

    /**
     * @return mixed
     */
    public function randomPaymentId()
    {
        return $this->faker->randomElement(self::$paymentIds);
    }

    /**
     * @return mixed
     */
    public function randomPaymentStatus()
    {
        return $this->faker->randomElement(self::$paymentStatusses);
    }

    /**
     * @return mixed
     */
    public function randomPaymentTitle()
    {
        return $this->faker->randomElement(self::$paymentTitles);
    }

    /**
     * @return mixed
     */
    public function randomShipmentStatus()
    {
        return $this->faker->randomElement(self::$shipmentStatusses);
    }

    /**
     * @return mixed
     */
    public function randomShipmentTitle()
    {
        return $this->faker->randomElement(self::$shipmentTitles);
    }
}
