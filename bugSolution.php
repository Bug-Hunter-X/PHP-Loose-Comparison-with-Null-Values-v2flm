```php
function myFunction($param) {
  if ($param === null) {
    return 'null';
  }
  return $param;
}

$result = myFunction(null);
echo $result; // Output: null

$result = myFunction(0);
echo $result; // Output: 0

$result = myFunction('');
echo $result; // Output: 

$result = myFunction(false);
echo $result; // Output: boolean false
```