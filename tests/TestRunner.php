<?php
 #as
echo "\n";
echo "╔════════════════════════════════════════════════════════════╗\n";
echo "║              QUICKPOS AUTOMATED TEST SUITE                ║\n";
echo "║                    Jira: POS-200 to POS-206               ║\n";
echo "╚════════════════════════════════════════════════════════════╝\n";

$tests = [
    'PageLoadTest.php',
    'ContactValidationTest.php'
];

$allPassed = true;
$testResults = [];

foreach ($tests as $test) {
    echo "\n▶ Running: $test\n";
    echo str_repeat("─", 60) . "\n";
    
    exec("php " . __DIR__ . "/$test", $output, $exitCode);
    echo implode("\n", $output) . "\n";
    
    if ($exitCode === 0) {
        $testResults[$test] = 'PASSED';
        echo "\n✅ $test PASSED\n";
    } else {
        $testResults[$test] = 'FAILED';
        $allPassed = false;
        echo "\n❌ $test FAILED\n";
    }
}

echo "\n" . str_repeat("═", 60) . "\n";
echo "📊 FINAL SUMMARY\n";
echo str_repeat("═", 60) . "\n";

foreach ($testResults as $test => $result) {
    $icon = $result === 'PASSED' ? '✅' : '❌';
    echo "$icon $test: $result\n";
}

echo "\n" . str_repeat("═", 60) . "\n";
if ($allPassed) {
    echo "🎉 ALL TESTS PASSED! Ready for deployment.\n";
    exit(0);
} else {
    echo "⚠️ SOME TESTS FAILED! Please fix before merging.\n";
    exit(1);
}
?>