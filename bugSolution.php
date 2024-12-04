function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'something') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a' => 1, 'b' => 2, 'c' => 'something', 'd' => 4];
$result = foo($arr);
print_r($result); // Output is now more predictable
