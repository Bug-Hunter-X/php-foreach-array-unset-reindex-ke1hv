function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'something') {
      unset($arr[$key]); // This can cause issues if you're relying on array keys
    }
  }
  return $arr;
}

$arr = ['a' => 1, 'b' => 2, 'c' => 'something', 'd' => 4];
$result = foo($arr);
print_r($result); // Output might be unexpected due to re-indexing
