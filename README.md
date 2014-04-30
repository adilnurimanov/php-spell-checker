Spell checker
=====================

* For Ubuntu install packages:

```
hunspell
myspell-ru
```

* Usage example:

```php
$Hunspell = new Hunspell();
$Hunspell->spellCheckString('en', 'abracadabra valid iinnnvalid');
```
