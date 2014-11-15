Types
=====

Object oriented PHP 5 library to handle type conversion and validation.

Eg. rather than use a procedural, utility class static boolize($var) function to convert a variable into a boolean use the Boolean class.

```
if ((new Boolean($var))->value()){
    // it's true
} else {
    // it's false
}
```

Types also support string conversion, for Booleans these are the strings 'true' and 'false'.

```
print '<element enabled="' . new Boolean($var) . '"/>';
```
