Looking for the FOSSBilling translations?

The base repo doesn't include them, you should manually download and install them from the [locale repo](https://github.com/FOSSBilling/locale/releases) or install a pre-made FOSSBilling release which will already include the correct translations.



to enable admin panel modification of languages, issue following in /var/www

chmod -R 0777 locale

to disable it and make the languages read only issue 

chmod -R 0644 locale
