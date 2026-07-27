<?php
$files = ['toefl.php', 'sat.php', 'pte.php', 'oet.php', 'gre.php', 'ielts.php', 'gmat.php', 'german.php', 'french.php', 'duolingo.php'];

foreach ($files as $f) {
    if (file_exists($f)) {
        $content = file_get_contents($f);
        $idx_faq = strpos($content, 'Frequently Asked Questions');
        $idx_cta = strpos($content, 'Ready to Achieve Your Target Score?');
        if ($idx_faq !== false && $idx_cta !== false) {
            if ($idx_faq < $idx_cta) {
                echo "$f: FAQs before CTA (NEEDS FIX)\n";
            } else {
                echo "$f: CTA before FAQs (OK)\n";
            }
        } else {
            echo "$f: Missing one or both sections\n";
        }
    }
}
?>
