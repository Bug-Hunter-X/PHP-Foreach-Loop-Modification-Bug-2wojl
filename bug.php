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

//The bug is that the foreach loop modifies the array while it's being iterated over.
//When an element is unset, the index is changed. This could lead to skipping elements.
//Consider using a while loop or iterating over the keys instead.
