mkdir -p $CIRCLE_TEST_REPORTS/phpunit
phpunit --log-junit $CIRCLE_TEST_REPORTS/phpunit/junit.xml unittest.php
