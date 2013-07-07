#!/usr/bin/perl -- 
# a simple JSON service

use strict;
use CGI;
use JSON;

my $q = CGI->new();
print $q->header(-type=>"application/json");
my $params = { now => time() };
print encode_json($params);

  
