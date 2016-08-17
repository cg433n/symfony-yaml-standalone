<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

try {
    $value = Yaml::parse(file_get_contents(__DIR__ . '/test.yaml'));
} catch (ParseException $e) {
    printf("Unable to parse the YAML string: %s", $e->getMessage());
}

?>
<pre>
<?php var_dump($value); ?>
</pre>
