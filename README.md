# PHP Foreach Loop Modification Bug

This repository demonstrates a common bug in PHP involving the modification of an array while iterating over it using a `foreach` loop.  Unsetting elements during iteration leads to unexpected index shifts, potentially skipping elements.  The provided solution showcases a safer alternative using a `while` loop.

## Bug

The `bug.php` file contains a function that attempts to remove elements with the value 'bar' from an array. Due to the modification within the `foreach` loop, the iteration is not properly handled, leading to incorrect results.

## Solution

The `bugSolution.php` file presents a corrected version using a `while` loop to safely iterate and remove elements without encountering index issues.
