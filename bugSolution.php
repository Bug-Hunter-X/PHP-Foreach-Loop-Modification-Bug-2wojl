function foo(array $arr) {
  $i = 0;
  while ($i < count($arr)) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    } else {
      $i++;
    }
  }
  return array_values($arr); // added array_values to reindex the array
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [1] => baz )