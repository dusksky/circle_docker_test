mkdir -p $CIRCLE_TEST_REPORTS/phpunit
vendor/bin/phpunit --log-junit $CIRCLE_TEST_REPORTS/phpunit/junit.xml unittest.php
