Spell checker
=====================

Wrapper class for hunspell command line utility.

* For Ubuntu install packages:

```
sudo apt-get install hunspell
sudo apt-get install myspell-ru
```

* Usage example:

```php
require 'SpellChecker.php'
$checker = new SpellChecker();
$checker->spellCheckString(SpellChecker::LANG_EN, 'abracadabra valid iinnnvalid');
```