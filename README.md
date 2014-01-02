## Wtngrm-NetGearman
---
***DEPRECATED***

Use [wtngrm-gearman](https://github.com/desyncr/wtngrm-gearman) which support Net_Gearman through configuration.

===

**master:** [![Build Status master](https://api.travis-ci.org/desyncr/wtngrm-netgearman.png?branch=master)](http://travis-ci.org/desyncr/wtngrm-netgearman) |
**development:** [![Build Status development](https://api.travis-ci.org/desyncr/wtngrm-netgearman.png?branch=development)](http://travis-ci.org/desyncr/wtngrm-netgearman)

Zend2 base module [Gearman][4] queue job services. Using Net_Gearman.

## Installation

Recommended installation method is through composer:

    composer require desyncr/wtngrm-netgearman dev-master

## Configuration

Register the module in the main application: `config/application.config.php`

    'modules' => array(
        ...
        'Desyncr\\Wtngrm\\Netgearman'
        ...
    )

## Feedback

If you'd like to contribute to the project or file a bug or feature request, please visit [the project page][1].

## License

The project is licensed under the [GNU GPL v3][2] ([tldr][3]) license. Which means you're allowed to copy, edit, change, hack, use all or any part of this project *as long* as all of the changes and contributions remains under the same terms and conditions.

  [1]: https://github.com/desyncr/wtngrm-netgearman/
  [2]: http://www.gnu.org/licenses/gpl.html
  [3]: http://www.tldrlegal.com/license/gnu-general-public-lic
  [4]: http://gearman.org/
