:: Compare current version with original phpBB content
T:\usr\local\php5\php.exe .\..\MODX\modx_gen.php -f -i .\..\clean-install\forum .\forum -r .\cache_guests_pages -m .\install-original.xml
:: From 1.1.1 to 1.1.2
T:\usr\local\php5\php.exe .\..\MODX\modx_gen.php -f -i .\..\mod_CGP_1.1.1\forum .\forum -m .\from_1.1.1_to_1.1.2.xml
:: From 1.0.0-1.1.0 to 1.1.2
T:\usr\local\php5\php.exe .\..\MODX\modx_gen.php -f -i .\..\mod_CGP_1.0.0\forum .\forum -m .\from_1.0.0-1.1.0_to_1.1.2.xml
