<?php

namespace Serge\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Serge\ShopBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Apple iPad 2');
        $product->getDescription('16GB, WiFi, Black, Apple iOS 4, Apple A5 1 GHz, 9.7" IPS TFT,
            LED backlight and Multi-Touch, 802.11 a/b/g/n, Bluetooth 2.1 EDR ,
            21.2 oz, Camera: Front: 0.7 MP, Back: 0.7 MP');
        $product->setCategories($this->getReference('tablet'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Samsung Galaxy Tab 2');
        $product->setDescription('Android 4.0 (Ice Cream Sandwich) OS
            7-inch Multitouch Screen (1024 x 600)
            8GB Internal Memory; microSD expansion up to 32GB
            Wireless N Wi-Fi (802.11b/g/n); Bluetooth 3.0
            1GHz Dual-Core Processor; 1GB RAM');
        $product->setCategories($this->getReference('tablet'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Kindle Fire HD');
        $product->setDescription('HD display, customized Dolby audio, and dual-driver stereo speakers
            Ultra-fast web browsing and streaming with built-in dual-band, dual-antenna Wi-Fi
            Integrated support for Facebook and Twitter, plus personal and Exchange email, calendar, and contacts
            Massive selection - over 23 million movies, TV shows, songs, magazines, books, audiobooks, and popular apps and games such as Netflix, Pandora, Pinterest, and Angry Birds Space
            Front-facing HD camera for taking photos or making video calls using Skype or other apps');
        $product->setCategories($this->getReference('tablet'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Coby Kyros 7-Inch');
        $product->setDescription('Android 4.0 Ice Cream Sandwich, 7 inches Display
            All winner A5 1 GHz
            4 GB Flash Memory, 0.5 GB RAM Memory
            802_11_BGN wireless
            Getjar Marketplace
            512MB Ram For Multitasking
            E-Reader With Access To Thousands Of Books
            Micro SDHC Memory Card Slot
            Rechargeable Li-Poly Battery');
        $product->setCategories($this->getReference('tablet'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Pandigital Novel 7"');
        $product->setDescription('7 inch Tablet
            General Specifications: Screen Size: 7 inch, Panel: Digital TFT LCD, Resolution: 600 x 800 Pixel
            Storage: Internal Memory: 1 GB, Card Reader: 2 in 1, Expandable Memory: SD/SDHC, MMC/MMC+ upto 32 GB
            Connections: WiFi: 802.11 b/g/n, USB Port: 1 mini-USB 2.0, Headphone jack: 1 stereo mini headphone jack
            Power: Built-in rechargeable Li-ion Battery (AC adaptor included)');
        $product->setCategories($this->getReference('tablet'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Blackberry Playbook 7-Inch Tablet');
        $product->setDescription('BlackBerry Tablet OS, 1 GHz dual-core processor
            32 GB for storage
            7 inch multi-touch capacitive LCD screen, 1024 x 600-pixel resolution
            Wireless-N Wi-Fi (802.11a/b/g/n), 3 MP forward facing, 5 MP rear
            0.9 pounds (15 ounces)');
        $product->setCategories($this->getReference('tablet'));

        $product = new Product();
        $product->setName('Apple MacBook Air MD231LL/A');
        $product->setDescription('Faster Flash Storage; USB 3.0; 720p FaceTime HD Camera
            1.8 GHz Intel Core i5 Processor
            128 GB Solid State Drive; 4 GB DDR3 RAM
            Intel HD Graphics 4000; 13.3-inch LED Display
            Ships in Certified Frustration-Free Packaging');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Apple MacBook Pro MD101LL/A');
        $product->setDescription('2.5 GHz Dual-Core Intel Core i5 processor
            4 GB DDR3 RAM; 500 GB Hard Drive
            13.3 inch LED-backlit display, 1280-by-800 resolution
            Intel HD Graphics 4000
            Ships in Certified Frustration-Free Packaging');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('ASUS UX51Vz-DH71');
        $product->setDescription('Intel Core i7 3612QM 2.1 GHz
            8 GB DDR3
            256 GB Solid-State Drive
            15.6-Inch Screen, Nvidia GT 650M 2G
            Windows 8');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Dell Inspiron i15z-2300sLV');
        $product->setDescription('Intel Core i7-3517UM 3.1 GHz
            4 GB DDR3
            500 GB 5400 rpm Hard Drive + 32 GB Solid-State Drive
            15-Inch Screen
            Windows 8');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('HP Pavilion g6-2260us');
        $product->setDescription('Intel Core i3-3110M 2.4 GHz (3 MB Cache)
            4 GB DDR3
            750 GB 5400 rpm Hard Drive
            15.6-Inch Screen, Intel HD Graphics 4000
            Windows 8, 5-hour battery life');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Samsung Series 3 NP350V5C-T02US');
        $product->setDescription('Intel Core i5 3210M 2.50 GHz
            AMD Radeon? HD 7730M 2GB Graphics
            6 GB DDR3 RAM; 500 GB HDD
            15.6-Inch Screen
            Windows 8');
        $product->setCategories($this->getReference('laptop'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Canon EOS 60D');
        $product->setDescription('18.0-megapixel CMOS sensor and DIGIC 4 Imaging Processor; ISO 100-6400 (expandable to 12800)
            Body only; lenses sold separately
            Improved EOS HD Video mode with manual exposure control; Vari-angle 3.0-inch Clear View LCD monitor
            5.3 fps continuous shooting; enhanced iFCL 63-zone, Dual-layer metering system
            Compatibility with SD/SDHC/SDXC memory cards (not included)');
        $product->setCategories($this->getReference('Digital SLRs'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Canon EOS 5D Mark II');
        $product->setDescription('21.1-megapixel full-frame CMOS sensor, 14-bit A/D conversion, wide range ISO setting 100-6400
            Includes Canon EF 24-105mm f/4 L IS USM lens
            DIGIC 4 Image Processor; high-performance 3.9 fps continuous shooting; Live View Function for stills
            Full HD video capture at 1920x1080 resolution for up to 4GB per clip ; HDMI output
            Updated EOS Integrated Cleaning System specifically designed to work with a full-frame sensor');
        $product->setCategories($this->getReference('Digital SLRs'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Nikon D5200');
        $product->setDescription('24.1 MP DX-format CMOS Sensor
            3.0 inch (921k) Vari-angle monitor
            EXPEED 3
            5 fps continuous shooting
            16 scene modes');
        $product->setCategories($this->getReference('Digital SLRs'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Nikon D800');
        $product->setDescription('Extreme resolution 36.3-megapixel FX-format (35.9 x 24.0mm) CMOS sensor
            Full 1080p HD broadcast quality video and minimized rolling shutter
            View simultaneous Live View output on external monitors and record uncompressed video via HDMI terminal
            Multi-Area Full HD D-Movie Video Recording Mode
            Comprehensive high fidelity audio recording and playback control');
        $product->setCategories($this->getReference('Digital SLRs'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Apple iPhone 5 16GB (White)');
        $product->setDescription('Product Dimensions: 2.5 x 0.5 x 4.5 inches ; 8 ounces
            Shipping Weight: 1.1 pounds');
        $product->setCategories($this->getReference('phone'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Blackberry 9650 Bold');
        $product->setDescription('CDMA model that has been unlocked for GSM use. "Some carrier features may not be supported.
            QWERTY keyboard; dual-network capable for 3G-enabled
            GSM, 3G HSDPA, Wifi, BlueTooth, GSM Worldwide
            3.2-megapixel camera/camcorder; Bluetooth stereo music; microSD memory expansion to 16 GB; access to personal and corporate email
            Up to 5 hours of talk time, up to 312 hours (13 days) of standby time');
        $product->setCategories($this->getReference('phone'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('HTC A9192 Inspire 4G');
        $product->setDescription('This unlocked cell phone is compatible with GSM carriers like AT&T and T-Mobile. Not all carrier features may be supported.
            Ultra-fast, 4G-enabled smartphone running Android 2.2 with 4.3-inch multi-touch Super LCD display.
            Wireless-N Wi-Fi networking (with optional Wi-Fi Mobile Hotspot and tethering capabilities)
            8-MP camera, HD 720p camcorder, Bluetooth stereo music, microSD memory expansion, HTML web browser, corporate and personal e-mail
            Up to 6 hours of talk time, up to 372 hours (15.5 days) of standby time, released in January, 2011
            8-MP camera; HD 720p camcorder; Bluetooth stereo music; microSD memory expansion; HTML web browser; corporate and personal e-mail
            GPS for navigation and location services
            It will not work with CDMA carriers like Verizon Wireless, Alltel and Sprint.
            Up to 6 hours of talk time, up to 372 hours (15.5 days) of standby time; released in January, 2011
            Wireless-N Wi-Fi networking (with optional Wi-Fi Mobile Hotspot and tethering capabilities); GPS for navigation and location services');
        $product->setCategories($this->getReference('phone'));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Samsung Galaxy S III Mini I8190 8GB');
        $product->setDescription('Battery Capacity (mAh) 1500mAh
            CPU Dual-core 1GHz
            Network Band : GSM 850, GSM 900, GSM 1800, GSM 1900, 3G 900, 3G 1900, 3G 2100
            Weight 111.5 g, Height 121.55 mm ,Width 63 mm ,Thickness 9.85 mm
            Internal Memory 8GB');
        $product->setCategories($this->getReference('phone'));
        $manager->persist($product);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}