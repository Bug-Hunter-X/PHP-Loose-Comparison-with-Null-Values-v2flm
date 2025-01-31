# PHP Loose Comparison with Null Values

This example demonstrates a common error in PHP related to loose comparison (`==`) when dealing with null values.  PHP's loose comparison can lead to unexpected results, particularly when distinguishing between `null`, `0`, `false`, and empty strings. Using strict comparison (`===`) is vital for reliable null checks.

The `bug.php` file shows the issue, while `bugSolution.php` offers a corrected version.

## How to Reproduce

1.  Run `bug.php`.
2. Observe the unexpected output where `false` and empty string are treated same as `null`. 

## Solution

The `bugSolution.php` file demonstrates the correct way to handle null checks using strict comparison.