#!/bin/bash
#
# Database generator script
# It simply runs Kohana in CLI with Generator controller though
# (Including whole minion module for one controller would be silly)
#

# You may need to change 'php' to your PHP5 parser path
php ./public_html/index.php --uri=cli/generator
