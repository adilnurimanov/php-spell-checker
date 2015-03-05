Spell checker
=====================

* For Ubuntu install packages:

```
sudo apt-get install hunspell
sudo apt-get install myspell-ru
```

* Usage example:

```php
require 'SpellChecker.php'
$checker = new SpellChecker();
$checker->spellCheckString('en', 'abracadabra valid iinnnvalid');
```