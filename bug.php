function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr; 
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

// Unexpected behaviour with numerical keys:
$arr = [0 => 'foo', 1 => 'bar', 2 => 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )