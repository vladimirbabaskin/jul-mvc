```mysql
USE `jul-prod`;
#
INSERT
    IGNORE
        INTO `products`
            VALUES(
                NULL,
                'GoPro HERO7 Black',
                429.99,
                'gopro-hero7-black',
                '12MP (With SuperPhoto) & 4K60'
            );
#
INSERT
    IGNORE
        INTO `products`
            VALUES(
                NULL,
                'GoPro HERO7 Silver',
                329.99,
                'gopro-hero7-silver',
                '10MP (With WDR) & 4K30'
            );
#
INSERT
    IGNORE
        INTO `products`
            VALUES(
                NULL,
                'GoPro HERO7 White',
                219.99,
                'gopro-hero7-white',
                '10MP & 1080p60'
            );
#
INSERT
    IGNORE
        INTO `products`
            VALUES(
                NULL,
                'GoPro Fusion',
                629.99,
                'gopro-fusion',
                '18MP / 30 fps & 5.2K30'
            );
```