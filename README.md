kohana_aws
==========

This project is a kohana module containing the Amazon Web Services SDK for PHP. There is a companion blog post [here](http://dev.strategystar.net/2012/05/amazon-web-services-and-kohana/).

## Installation ##
* Download the module and put it in your project's MODPATH (By default this is /your/project/modules).
* Add the kohana_aws module to your bootstrap file.
* Copy the aws.php config file from /your/project/modules/config/aws.php to the config directory in your project's application directory.
* Set the public and private keys for your aws account in the aws.php config file. (Note: this config file will work just like the aws config file, meaning that you can support multiple aws accounts. See the example config file for more details.

### Links ###
Amazon Web Services: http://aws.amazon.com/
AWS SDK for PHP: http://aws.amazon.com/sdkforphp/
SDK reference docs: http://docs.amazonwebservices.com/AWSSDKforPHP/latest/