<?php


class PageLoadTest {
    
    public function run() {
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "📄 PAGE LOAD TESTS\n";
        echo str_repeat("=", 60) . "\n";
        
        $passed = true;
        
        // Test index.php loads
        $indexContent = @file_get_contents(__DIR__ . '/../index.php');
        if ($indexContent !== false && strpos($indexContent, 'QuickPOS') !== false) {
            echo "✅ PASS: Index page loads successfully\n";
        } else {
            echo "❌ FAIL: Index page failed to load\n";
            $passed = false;
        }
        
        // Test thank-you.html loads
        $thankyouContent = @file_get_contents(__DIR__ . '/../thank-you.html');
        if ($thankyouContent !== false && strpos($thankyouContent, 'Thank You') !== false) {
            echo "✅ PASS: Thank-you page loads successfully\n";
        } else {
            echo "❌ FAIL: Thank-you page failed to load\n";
            $passed = false;
        }
        
        // Test header.php exists
        if (file_exists(__DIR__ . '/../includes/header.php')) {
            echo "✅ PASS: Header file exists\n";
        } else {
            echo "❌ FAIL: Header file missing\n";
            $passed = false;
        }
        
        // Test footer.php exists
        if (file_exists(__DIR__ . '/../includes/footer.php')) {
            echo "✅ PASS: Footer file exists\n";
        } else {
            echo "❌ FAIL: Footer file missing\n";
            $passed = false;
        }
        
        echo str_repeat("=", 60) . "\n";
        return $passed;
    }
}

$test = new PageLoadTest();
$success = $test->run();
exit($success ? 0 : 1);
?>