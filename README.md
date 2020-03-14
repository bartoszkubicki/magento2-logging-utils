# BKubicki Magento 2 Logger Utils


## Overview ##
Library provides slight adjustments for magento 2 native logger feature.

## Features ##
* custom implementation of base handler `OnlySelfSeverityLevelAwareHandler`, which doesn't use higher severity handers, so logs
are more readable


## Prerequisites
* PHP 7.2|7.3


## Installation ###

To install the extension use the following commands:

```bash
 composer require bkubicki/magento2-logger-utils
 ```

  
## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/bartoszkubicki/magento2-unit-tests-doubles/tags).


## Changelog

See changelog [here](CHANGELOG.md).


## Authors

* [Bartosz Kubicki](https://github.com/bartoszkubicki)


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.
