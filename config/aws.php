<?php defined('SYSPATH') or die('No direct access allowed.');

//NOTE: These instructsions were copied out of the example config that is packaged with the sdk.
/*###################################################################################################

    As of version 1.5, the AWS SDK for PHP uses the CFCredentials class to handle credentials.
	This class has the advantage of being able to support multiple sets of credentials at a time,
	including the ability for credential sets to inherit settings from other credential sets.

	Some example uses are noted at https://gist.github.com/1478912

	Notes:

	* You can define one or more credential sets.

	* Credential sets can be named anything that PHP allows for an associative array key;
	  "production", "staging", etc., are just sample values. Feel free to rename them.

	* A credential set only has four required entries: key, secret, default_cache_config and
	  certificate_authority. Aside from these, you can add any additional bits of information
	  you'd like to keep easily accessible (e.g., multi-factor authentication device key, your
	  AWS Account ID, your canonical identifiers).

	* Additional credential sets can inherit the properties of another credential set using the
	  @inherit keyword.

	* If more than one credential set is provided, a default credential set must be specified
	  using the @default keyword.

	* If you only have one credential set, you can set it to the @default keyword.

	* View the documentation for the CFCredentials::set() method to view usage examples.

###################################################################################################*/

return array(

    // Credentials for the development environment.
    'development' => array(

        // Amazon Web Services Key. Found in the AWS Security Credentials. You can also pass
        // this value as the first parameter to a service constructor.
        'key' => 'development-key',

        // Amazon Web Services Secret Key. Found in the AWS Security Credentials. You can also
        // pass this value as the second parameter to a service constructor.
        'secret' => 'development-secret',

        // This option allows you to configure a preferred storage type to use for caching by
        // default. This can be changed later using the set_cache_config() method.
        //
        // Valid values are: `apc`, `xcache`, or a file system path such as `./cache` or
        // `/tmp/cache/`.
        'default_cache_config' => '',

        // Determines which Cerificate Authority file to use.
        //
        // A value of boolean `false` will use the Certificate Authority file available on the
        // system. A value of boolean `true` will use the Certificate Authority provided by the
        // SDK. Passing a file system path to a Certificate Authority file (chmodded to `0755`)
        // will use that.
        //
        // Leave this set to `false` if you're not sure.
        'certificate_authority' => false
    ),

    // Specify a default credential set to use if there are more than one.
    '@default' => 'development'
);