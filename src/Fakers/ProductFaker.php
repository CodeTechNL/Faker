<?php

namespace CodeTechNL\Faker\Fakers;

/**
 *
 */
class ProductFaker
{
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
    public static array $products = [
        'phones' => [
            "USB Lader 12W",
            "Magsafe 2 AC Adapter 45W",
            "Magsafe 2 AC Adapter 85W",
            "Magsafe 2 AC Adapter 60W",
            "MagSafe Oplader 60W",
            "MagSafe Laptop AC Adapter 85W",
            "MacBook Air MagSafe Oplader 45W",
            "USB Lader 5W",
            "VGA Adapter",
            "Wereld Reis Adapter set 30-pins",
            "Lightning - USB Kabel",
            "Lightning naar 30pin Adapter (0.2m)",
            "Lightning to 30 pin adapter",
            "Lightning naar USB Camera Adapter",
            "Lightning - HDMI Adapter",
            "Thunderbolt to FireWire Adapter",
            "USB-C naar VGA Multi-Poort Adapter Wit",
            "MJ1M2ZM/A USB-C naar USB Adapter",
            "MMX62ZM/A Lightning 3.5mm Wit kabeladapter/verloopstukje",
            "MMEL2ZM/A Thunderbolt 3 (USB-C) Thunderbolt 2 Wit kabeladapter/verloopstukje",
            "MLL82ZM/A 2m USB C USB C Wit USB-kabel",
            "USB-C naar Lightning Kabel (1 meter)",
            "Apple Macbook Pro 13 inch M1 8GB 512GB silver",
            "Apple iPhone 13 Pro Max 512gb silver",
            "Apple iPhone 13 Pro Max 512gb blauw",
            "Apple iPhone 13 Pro 512gb silver",
            "Apple iPhone 13 Pro 512gb blauw",
            "Apple Macbook Pro 13 inch M1 8GB 256GB spacegray",
            "Apple Macbook Pro 13 inch M1 8GB 256GB silver",
            "Apple iPhone 13 Pro Max 256gb silver",
            "Apple iPhone 13 Pro Max 256gb grafiet",
            "Apple Macbook Air M1 8GB 512GB silver",
            "Apple Macbook Air M1 8GB 512GB spacegray",
            "Apple iPad Pro 12.9\" (2021) 256GB wifi spacegray",
            "Apple iPhone 13 Pro 256gb grafiet",
            "Apple iPhone 13 Pro 256gb silver",
            "Apple iPhone 13 Pro 256gb goud",
            "Apple iPhone 13 512GB wit",
            "Apple iPhone 13 512GB zwart",
            "Apple iPhone 13 512GB blauw",
            "Apple iPad Pro 12.9\" (2021) 128GB wifi spacegray",
            "Apple iPad Pro 12.9\" (2021) 128GB wifi silver",
            "Apple iPhone 12 Pro 256GB oceaanblauw",
            "Apple iPhone 12 Pro 256GB goud",
            "Apple iPhone 12 Pro 256GB grafiet",
            "Apple iPhone 13 Mini 512GB wit",
            "Apple Macbook Air M1 8GB 256GB spacegray",
            "Apple Macbook Air M1 8GB 256GB silver",
            "Apple iPhone 13 256GB zwart",
            "Apple iPhone 13 256GB blauw",
            "Apple iPhone 13 256GB rood",
            "Apple iPhone 13 256GB roze",
            "Apple iPhone 13 256GB wit",
            "Apple iPhone 13 Mini 256GB zwart",
            "Apple iPhone 13 Mini 256GB roze",
            "Apple iPhone 13 Mini 256GB blauw",
            "Apple iPhone 13 Mini 256GB rood",
            "Apple iPhone 13 Mini 256GB wit",
            "Apple iPhone 12 128GB groen",
            "Apple iPhone 12 128GB zwart",
            "Apple iPhone 13 128GB wit",
            "Apple iPhone 13 128GB roze",
            "Apple iPhone 13 128GB rood",
            "Apple iPhone 13 128GB blauw",
            "Apple iPhone 13 128GB zwart",
            "Apple iPhone 12 128GB blauw",
            "Apple iPhone 12 128GB wit",
            "Apple iPhone 12 128GB rood",
            "Apple iPhone 12 128GB paars",
            "Apple iPhone 12 64GB blauw",
            "Apple iPhone 12 64GB wit",
            "Apple iPhone 12 64GB zwart",
            "Apple iPhone 13 Mini 128GB wit",
            "Apple iPhone 13 Mini 128GB blauw",
            "Apple iPhone 12 64GB paars",
            "Apple iPhone 13 Mini 128GB rood",
            "Apple iPhone 13 Mini 128GB zwart",
            "Apple iPhone 12 64GB groen",
            "Apple iPhone 12 64GB rood",
            "Apple iPhone 12 Mini 128GB wit",
            "Apple iPhone 12 Mini 128GB paars",
            "Apple iPhone 12 Mini 128GB zwart",
            "Apple iPhone 11 128GB wit",
            "Apple iPhone 11 128GB zwart",
            "Apple iPhone 11 128GB groen",
            "Apple iPhone 12 Mini 64GB zwart",
            "Apple iPhone 12 Mini 64GB wit",
            "Apple iPhone 12 Mini 64GB rood",
            "Apple iPhone 12 Mini 64GB groen",
            "Apple iPhone 12 Mini 64GB blauw",
            "Apple iPhone 11 64GB zwart",
            "Apple iPhone 11 64GB wit",
            "Apple iPhone 11 64GB RED",
            "Apple iPhone 11 64GB groen",
            "Apple iPhone 11 64GB paars",
            "Apple iPad Air 10.9 64GB wifi spacegray",
            "Apple iPhone XR 64GB wit",
            "Apple iPhone XR 64GB zwart",
            "Apple iPhone SE 128GB zwart",
            "Apple iPhone SE 128GB rood",
            "Apple iPhone SE 128GB wit",
            "Apple iPhone XR 64GB red",
            "Apple AirPods Max pink",
            "Apple AirPods Max groen",
            "Apple AirPods Max Zilver",
            "Apple iPhone SE 64GB zwart",
            "Apple iPhone SE 64GB wit",
            "Apple iPhone SE 64GB rood",
            "Apple AirPods Pro",
            "Apple AirPods 2 ( draadloze oplaadcase )",
            "Apple AirPods 2 ( oplaadcase )",
            "Apple AirTag 4 pack",
            "Apple AirTag",
            "Apple AirPods Pro Met MagSafe Oplaadcase",
            "Apple iPad Mini 4 Silicone Case Pink MLD52ZM/A",
            "Apple iPad Mini 4 Silicone Case Lavender MLD62ZM/A",
            "Apple iPad Mini 4 Silicone Case Turquoise MLD72ZM/A",
            "Apple iPhone 7/8 Silicone Case Pink Sand MQGQ2ZM/A",
            "Apple iPhone XS Max Silicone Case White MRWF2ZM/A",
            "Apple iPad Pro 11 inch (2018) Smart Folio Charcoal Grey MRX72ZM/A",
            "Apple iPhone 6/6S/7/8/SE (2020/2022) Leather Case Black MXYM2ZM/A",
            "Apple iPhone 12 Mini Leather Case with Magsafe Saddle Brown MHK93ZM/A",
            "Apple iPhone 12 / 12 Pro Silicone Case with MagSafe Citrus Pink MHL03ZM/A",
            "Apple AirTag Leather Key Ring Baltic Blue MHJ23ZM/A",
            "Apple AirTag Leather Key Ring - Saddle Brown MX4M2ZM/A",
            "Apple AirTag Leather Loop Saddle Brown MX4A2ZM/A",
            "Apple AirTag Leather Loop (PRODUCT) RED MK0V3ZM/A",
            "Apple AirTag Loop Sunflower MK0W3ZM/A",
            "Apple AirTag Loop Electric Orange MK0X3ZM/A",
            "Apple AirTag Loop Deep Navy MHJ03ZM/A ",
            "Apple AirTag Loop White MX4F2ZM/A",
            "Apple iPhone 12 / 12 Pro Silicone Case with MagSafe Pistachio MK003ZM/A",
            "Apple iPhone 12 / 12 Pro Silicone Case with MagSafe Cantaloupe MK023ZM/A",
            "Apple iPhone 12 / 12 Pro Silicone Case with MagSafe Amethyst MK033ZM/A",
            "Apple iPhone 12 Mini Silicone Case with MagSafe Pistachio MJYV3ZM/A",
            "Apple iPhone 12 Mini Silicone Case with MagSafe Capri Blue MJYU3ZM/A",
            "Apple iPhone 12 Mini Silicone Case with MagSafe Amethyst MJYX3ZM/A",
            "Apple iPhone 12 Mini Silicone Case with MagSafe Pink Citrus MHKP3ZM/A",
            "Apple Smart Cover Apple iPad 10.2 (2019/2020/2021)/Apple iPad Air 10.5 (2019) Black MX4U2ZM/A",
            "Apple iPhone 13 Silicone Case with MagSafe Midnight (Black)",
            "Apple iPhone 13 Pro Silicone Case with MagSafe Abyss Blue",
            "Apple iPhone 13 Pro Silicone Case with MagSafe Midnight (Black)",
            "Apple AirPods 2021 (3e generatie)",
            "iPad 2 home button ",
            "iPad 2 scherm ",
            "iPad 4 achterkant ",
            "iPad 3 / 4 scherm ",
            "IPad 2017 scherm ",
            "iPad 4 home button ",
            "iPad Air achterkant ",
            "iPad Air (2017) scherm",
            "iPad Air 2 achterkant ",
            "iPad Air 2 home button ",
            "iPad 2 achterkant ",
            "iPad Mini 4 scherm",
            "iPad 3 achterkant ",
            "iPad Air home button ",
            "iPad Mini 3 scherm",
            "iPad Mini achterkant ",
            "iPad Mini scherm",
            "iPhone 4S achterkant ",
            "iPhone 5 achterkant ",
            "iPhone 5 home button ",
            "iPhone 5 scherm  - kopie",
            "iPhone 5 scherm  - Origineel refurbished",
            "iPad Pro 9.7 inch scherm ",
            "iPhone 5C achterkant ",
            "iPhone 5S achterkant ",
            "iPad Mini Retina scherm",
            "iPhone 5S/SE scherm  - Origineel refurbished",
            "iPhone 6 achterkant ",
            "iPhone 5S home button ",
            "iPhone 6 Plus achterkant ",
            "iPhone 6 Plus scherm  - Refurbished",
            "BF-DEAL! iPhone 6 scherm  - kopie",
            "iPhone 6 Plus home button ",
            "iPhone 6 scherm  - Refurbished",
            "iPhone 6 glas / scherm  - 100% Origineel",
            "iPhone 6 home button ",
            "iPhone 6S home button ",
            "iPhone 6S Plus achterkant ",
            "iPhone 6S Plus home button ",
            "iPhone 6S Plus scherm  - Origineel nieuw",
            "iPhone 6 Plus scherm  - 100% Origineel",
            "iPad 3 home button ",
            "iPhone 4S home button ",
            "iPhone 7 achterkant ",
            "iPhone 7 scherm  - 100% Origineel",
            "iPhone 8 Plus scherm  - 100%  Origineel",
            "iPhone 7 Plus scherm  - 100% Origineel",
            "iPhone 6S achterkant ",
            "iPhone 7 Plus scherm  - Refurbished",
            "iPhone 6S scherm  - Origineel refurbished",
            "iPhone 7 scherm  - Refurbished",
            "iPod Touch 6 scherm ",
            "iPhone 8 scherm  - 100% Origineel",
            "iPhone SE achterkant",
            "iPhone 6S Plus scherm  - Origineel refurbished",
            "iPhone 6S scherm  - Origineel nieuw",
            "BF-DEAL! iPhone 8 scherm  - Kopie",
            "BF-DEAL! iPhone 8 Plus scherm  - Kopie",
            "iPod Touch 5 glas / scherm ",
            "iPod Touch 4 glas / scherm ",
            "iPod Touch 4 home button ",
            "iPad 3 wifi antenne ",
            "iPhone 4S aan en uit / volume knop",
            "iPhone 4S camera",
            "iPhone 4S oorspeaker",
            "iPhone 4S front camera",
            "iPhone 4S luidspreker",
            "iPhone 4S trilmotor",
            "iPhone 4S batterij ",
            "iPhone 5C batterij",
            "iPhone 5 front camera",
            "iPhone 5 trilmotor",
            "iPhone 5 oorspeaker ",
            "iPhone 5C oorspeaker ",
            "iPhone 5S laadconnector",
            "iPhone 5S aan uit knop ",
            "iPhone 5C home knop ",
            "iPhone 6 camera",
            "iPhone 5C laadconnector ",
            "iPhone 5S front camera",
            "iPhone 4S oplaadpunt ",
            "iPhone 5C luidspreker",
            "iPhone 5S oorspeaker",
            "iPhone 5 laadconnector",
            "iPhone 6 laadconnector",
            "iPhone 4S wifi antenne",
            "iPhone 5 wifi antenne",
            "iPhone 5S luidspreker",
            "iPhone 5C trilmotor ",
            "iPhone 5C aan uit knop ",
            "iPhone 6S batterij",
            "iPhone 5S wifi antenne ",
            "iPhone 6 trilmotor",
            "iPhone 6S Plus camera",
            "iPhone 6 batterij",
            "iPhone 5S batterij",
            "iPhone 6S camera",
            "iPhone 6 Plus camera",
            "iPhone 6S camera ",
            "iPhone 7 camera-glas",
            "iPod Touch 4 Wi-Fi antenne ",
            "iPhone 4S volume knoppen",
            "iPhone 5C front camera ",
            "iPhone 5 luidspreker",
            "iPhone 5S trilmotor",
            "iPhone 6 luidspreker",
            "iPhone 6 front camera",
            "iPhone 6 Plus batterij",
            "iPod Touch 5 selfie camera ",
            "iPod Touch 4 audio ingang ",
            "iPhone 7 Plus camera-glas",
            "iPod Touch 4 home button ",
            "iPod Touch 4 achtercamera ",
            "iPad 2 luidspreker ",
            "iPad 3 audio ingang ",
            "iPad 3 batterij",
            "iPad 3 simkaart-lezer ",
            "iPad 3 LCD beeldscherm",
            "iPad 2 oplaadpunt",
            "iPad 3 oplaadpunt ",
            "iPad 2 audio ingang ",
            "iPad Air audio-ingang",
            "iPad Air wifi antenne",
            "iPad Air oplaadpunt",
            "iPad 2 batterij",
            "iPad Air 2 luidspreker ",
            "iPad Mini audio ingang",
            "iPad Mini 3 LCD Beeldscherm",
            "iPad 4 LCD beeldscherm ",
            "iPad Mini LCD beeldscherm ",
            "iPad Mini wifi antenne ",
            "iPad Air batterij",
            "iPad Mini batterij",
            "iPad 2 GPS antenne ",
            "iPad 2 Wi-Fi antenne ",
            "iPad 2 simkaartlezer ",
            "iPhone 5C trilmotor ",
            "iPhone 5 camera",
            "iPad 3 GPS antenne ",
            "iPad Mini Retina batterij",
            "iPhone 5C scherm  - Kopie",
            "iPad Mini 3 luidspreker ",
            "iPad 3 wifi antenne ",
            "iPad 4 batterij",
            "iPad 3 luidspreker ",
            "iPhone 5S luidspreker ",
            "iPhone 5S oorspeaker ",
            "iPhone 6 luidspreker ",
            "iPad 4 oplaadpunt",
            "iPad 4 luidspreker ",
            "iPad Mini Retina LCD beeldscherm",
            "iPad Mini Retina luidspreker ",
            "iPhone 5S batterij ",
            "iPhone 5C home button",
            "iPhone 5C batterij ",
            "iPhone 4S oorspeaker ",
            "iPhone 5C laadconnector",
            "iPhone 6S luidspreker",
            "iPhone 6S achter camera ",
            "iPhone 5S trilmotor ",
            "iPhone 6 Plus aan uit knop ",
            "iPhone 6 volume knoppen",
            "iPhone 6 Plus achter camera ",
            "iPhone 6 aan uit knop",
            "iPhone 5S wifi antenne",
            "iPhone 6 trilmotor ",
            "iPhone 6S batterij ",
            "iPhone 6S Plus achter camera ",
            "iPhone 6S Plus volume knoppen ",
            "iPhone 6S Plus batterij",
            "iPhone 6S Plus laadconnector",
            "iPhone 6 Plus oorspeaker",
            "iPhone 6S trilmotor",
            "iPhone 7 Plus oorspeaker",
            "iPhone 6S laadconnector",
            "iPhone 6S Plus aan uit knop",
            "iPhone 6S aan uit knop ",
            "iPhone 7 batterij",
            "iPhone 7 oorspeaker",
            "iPhone 6S front camera",
            "iPad Mini aan uit knop vervangen",
            "iPhone 4S oplaadpunt ",
            "iPhone 5 batterij",
            "iPhone 5C oorspeaker",
            "iPhone 5S camera",
            "iPad Mini Retina aan uit knop ",
            "iPad Air volume knoppen ",
            "iPhone 5S front camera ",
            "iPhone 6 front camera",
            "iPhone 6 Plus trilmotor",
            "iPhone 6 Plus front camera",
            "iPhone 6 Plus batterij ",
            "iPhone 6S camera lens",
            "iPhone 6 oorspeaker",
            "iPhone 6 laadconnector ",
            "iPhone 7 laadconnector",
            "iPhone 6 camera lens",
            "iPad Mini luidspreker ",
            "iPad 4 wifi antenne",
            "iPhone 5C scherm  - Origineel refurbished",
            "iPhone 4S batterij",
            "iPhone 5C luidspreker ",
            "iPhone 5 aan en uit knop",
            "iPhone 6 Plus camera lens",
            "iPhone 6 Plus laadconnector",
            "iPhone 6 batterij  new",
            "iPhone 6S volume knoppen",
            "iPhone 7 Plus batterij",
            "iPhone 6S Plus front camera",
            "iPod Touch 5 selfie camera ",
            "iPhone 8 batterij",
            "iPhone 7 front camera",
            "iPod Touch 5 camera ",
            "iPod Touch 5 volume knoppen",
            "iPod Touch 5 oplaad-connector ",
            "iPhone X batterij",
            "iPod Touch 4 audio ingang",
            "iPhone 7 camera lens",
            "iPhone 7 Plus front camera",
            "iPhone SE batterij",
            "iPhone 6S Plus trilmotor",
            "iPhone 7 Plus camera lens",
            "iPod Touch 4 camera ",
            "iPhone SE oplaadpunt",
            "iPod Touch 5 audio ingang ",
            "iPod Touch 4 Wi-Fi antenne ",
            "iPod Touch 5 luidspreker ",
            "iPad 2 aan uit knop ",
            "iPad 2 display ",
            "iPad 3 aan uit knop ",
            "iPad Air 2 batterij",
            "iPhone 5C front camera",
            "iPad Air (2017) LCD beeldscherm",
            "iPhone 6S oorspeaker",
            "iPhone 7 camera",
            "iPhone 5S oplaadpunt ",
            "iPhone 6S Plus camera lens ",
            "iPhone 7 Plus camera",
            "iPhone 7 Plus laadconnector",
            "BF-DEAL! iPhone 6S Plus scherm  - kopie",
            "iPhone 5S/SE scherm  - kopie",
            "BF-DEAL! iPhone 7 scherm  - kopie",
            "BF-DEAL! iPhone 7 Plus scherm  - kopie",
            "BF-DEAL! iPhone 6 Plus scherm  - kopie",
            "BF-DEAL! iPhone 6S scherm  - kopie",
            "iPhone 6 Plus luidspreker",
            "iPhone 7 luidspreker",
            "iPhone 6S Plus luidspreker",
            "iPhone 7 Plus achterkant ",
            "iPhone  SE home button ",
            "iPhone 8 achterkant",
            "iPhone 8 Plus achterkant",
            "iPhone 8 Plus laadconnector",
            "iPhone 8 Plus camera lens",
            "iPhone  8 Plus front camera",
            "iPhone 8 Plus camera",
            "iPhone 8 Plus oorspeaker",
            "iPhone 8 Plus luidspreker",
            "iPhone 8 Plus trilmotor",
            "iPhone 8 Plus aan uit knop",
            "iPhone 8 laadconnector",
            "iPhone 8 camera lens",
            "iPhone 8 camera",
            "iPhone 8 front camera",
            "iPhone 8 oorspeaker",
            "iPhone 8 luidspreker",
            "iPhone 8 trilmotor",
            "iPhone 8 aan uit knop",
            "iPhone 7 Plus luidspreker",
            "iPhone 7 Plus trilmotor",
            "iPhone 7 Plus aan uit knop ",
            "iPhone 6S Plus oorspeaker",
            "iPhone 6S Plus luidspreker",
            "iPhone 6 Plus luidspreker ",
            "iPhone 6 wifi antenne",
            "iPhone  SE camera",
            "iPhone SE front camera",
            "iPhone SE aan uit knop",
            "iPhone SE oorspeaker ",
            "iPhone  SE trilmotor",
            "iPhone  SE volume knoppen ",
            "iPhone SE luidspreker",
            "iPhone 5C camera ",
            "iPhone 5C oorspeaker ",
            "iPhone 5 volume knoppen",
            "iPhone X scherm  - 100% Origineel",
            "iPhone 8 Plus scherm  - Refurbished",
            "iPhone 8 scherm  - Refurbished",
            "Boekhoes iPhone 5C",
            "iPhone X scherm  refurbished",
            "iPad Air 2 scherm ",
            "iPad Air 2 scherm",
            "iPad 2018 scherm",
            "iPhone X camera lens",
            "Copy of Siliconen hoes iPhone XS Max",
            "Siliconen bumperhoes iPhone XS Max",
            "Siliconen bumperhoes iPhone XS",
            "iPhone X laadconnector",
            "iPhone XS scherm  - 100% Origineel",
            "iPhone XS scherm  refurbished",
            "iPhone 4S scherm  Origineel",
            "iPhone 4S glas / scherm  Origineel Zwart test",
            "iPhone 4S glas / scherm  Origineel Wit test",
            "iPhone 4S glas / scherm  Origineel Wit trwst",
            "iPhone 4S glas / scherm  Origineel Zwart trwst",
            "iPad 2 camera",
            "iPad 2 volume knoppen",
            "iPad 2 wifi antenne",
            "iPad 2 camera",
            "iPad 2 volumeknop ",
            "iPad 2 wifi antenne ",
            "iPad 2 camera ",
            "iPad 2 volumeknop ",
            "iPad 2 wifi antenne ",
            "iPhone 5 scherm ",
            "iPhone 8 Plus batterij",
            "iPhone 6 scherm",
            "iPhone 6 Plus scherm",
            "iPhone 6S scherm",
            "iPhone 6S Plus scherm",
            "iPhone 7 scherm",
            "iPhone 7 Plus scherm",
            "iPhone 8 scherm",
            "iPhone 8 Plus scherm",
            "iPhone X scherm",
            "iPhone XS scherm",
            "iPhone 5S scherm - Origineel",
            "iPhone 5C scherm ",
            "iPhone XS Max scherm",
            "iPhone XR scherm",
            "iPhone X achterkant",
            "iPhone XS achterkant",
            "iPhone XS Max achterkant ",
            "iPhone XR achterkant",
            "iPhone 5 microfoon ",
            "iPhone 5S microfoon ",
            "iPhone 4S microfoon ",
            "iPhone 5 microfoon ",
            "iPhone 5S microfoon ",
            "iPhone 6 microfoon ",
            "iPhone 5C microfoon ",
            "iPhone 6 Plus microfoon ",
            "iPhone 6S microfoon ",
            "iPhone 6S Plus microfoon ",
            "iPhone 7 microfoon",
            "iPhone 7 Plus microfoon ",
            "iPhone SE microfoon ",
            "iPhone 8 Plus microfoon ",
            "iPhone 8 microfoon",
            "iPhone X microfoon",
            "iPhone XS laadconnector",
            "iPhone XS Max laadconnector",
            "iPhone XR laadconnector",
            "iPhone XS microfoon ",
            "iPhone XS Max microfoon ",
            "iPhone 5C volume knoppen",
            "iPhone 5S volume knoppen",
        ]
    ];

    /**
     * @return mixed
     */
    public function randomProduct(): string
    {
        $possibleItems = array_keys(self::$products);
        $key = array_rand($possibleItems);

        return trim($this->faker->randomElement(self::$products[$possibleItems[$key]]));
    }

    /**
     * @return mixed
     */
    public function randomPhone(): string
    {
        return trim($this->faker->randomElement(self::$products['phones']));
    }
}
