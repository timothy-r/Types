Types
=====

Object oriented PHP 5 library to handle type conversion.

Rather than use a procedural utility class static boolize($var) function to convert a variable into a boolean use the Boolean class.

```$bool = new Boolean($var);
if ($bool->value()){
    // it's true
} else {
    // it's false
}
```

Types also support string conversion, for Booleans these are the strings 'true' and 'false'.

```
print 'value = ' . new Boolean($var) . "\n";
```
