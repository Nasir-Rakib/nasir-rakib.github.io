<?php
$file = 'Portfolio_NasirRakib.pdf';
$counterFile = 'counter.txt';

// Increment counter
if (file_exists($counterFile)) {
    $count = (int) file_get_contents($counterFile);
    $count++;
} else {
    $count = 1;
}
file_put_contents($counterFile, $count);

// Display the count
echo "<p>This portfolio PDF has been viewed <strong>{$count}</strong> times.</p>";

// Serve the PDF
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="Portfolio_NasirRakib.pdf"');
readfile($file);
?>
