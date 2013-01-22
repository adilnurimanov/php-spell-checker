1. For Ubuntu install packages:

hunspell
myspell-ru

2. Using example:

$Hunspell = new Hunspell();
$Hunspell->spellCheckString('en', 'abracadabra valid iinnnvalid');
