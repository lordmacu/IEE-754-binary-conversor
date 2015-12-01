# IEEE 754 single-precision binary floating-point format: binary32 PHP CONVERSOR

Create a PHP function that takes an array of 32 boolean values

(zeroes and ones) as parameter, and answers with a numeric value.

The result value must be calculated by processing the array

parameter, which symbolizes an IEE-754 compliant Floating Point 

Single Precision 32bit value, as shown in the following example:

![alt tag](https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Float_example.svg/590px-Float_example.svg.png)

In order to do so, you must use the following formula:

![alt tag](https://upload.wikimedia.org/math/7/2/e/72e88d2227467fc70a7e53013b5c5280.png)

# USAGE:
```

$binaryArray = array(0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$result = getFloatFromBits($binaryArray);
echo $result;

```


