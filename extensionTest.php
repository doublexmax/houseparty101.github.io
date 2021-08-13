<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");
$one = "https://nubanner.neu.edu/StudentRegistrationSsb/ssb/searchResults/getClassDetails?term=202210&courseReferenceNumber=";
$two = "&first=first";
$url = $one.$crns[0].$two;
//$url = "https://nubanner.neu.edu/StudentRegistrationSsb/ssb/classRegistration/getMeetingInformationForRegistrations?termFilter=null";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
        "Cookie: JSESSIONID=15526B6CFA726788CD28842101FAA0A3; nubanner-cookie=2334073243.36895.0000; LtpaToken2=pPt5s5l7ZLLWHM+LKHKfq1oV5N8Sr9cJURn7OI5oEDHsSLIKMJhEs0EVYxVdHWqm+nAv8LphmOhBwbL6zPY0500Qo9b0iV8qvDwZxBr1qPDRl/5vze0DXrXxmBf4wp5kLuoYOksrTcZ3p6KZ7l2aCw3LRqkZGG21sgqXgJ6Yvq8HK0nx/VhCKvNGWRSDYC7cc4jUjLGq2LikCIlkJBEWZGBa3yWz+N9xw1FxQJr9yo7LYq0LFTOjnjom13R3fc1/eqTG9ej+ldSh/W8bAVQHaN7VcwsnCLb7euElxtLugbovsFBOIH8rhmW8DK+Ze8N/wjNR29pUdwoCFC/8gYAiv/34wxQDLxoKxirhyalZdjnhS9cX8C13GiRnNvICYDE0Ug8FohDtPFksF3nshrDkmdEEuFBfoci6NtzXoTfUFCb/8ASsRE+OkXeGcyqs12F4J5I2MgTcuz2ktFL0K8to4QydRUbZPUDCFgUuYas8c9FbgqhLN7lA5T5tBmRW5ijiI1MehAWkli3Em8XKx2EIr9TKSsgRHTkLtB5zdlRTUk6gK8/puTa/ZDf1Mk+9ZBiOIQyne2WvSrPCrqbPx2CPZNT1X3GI/4DBqM//yAJ3N5vAV36b1lDqLtjt5HTBb6AmdGVZ1z0HKHrvsXiSy2r8vsSpkxkRMQeDekWZnS1jv+iI22X0Ps4D2qlimIkvpS5S73fvTMfgajrzxzrKxIBE5oUbJV3c/qcaUsC0IA1Zwl2FWl0CQztvB6vfCHEljnpXuvhRkwdnQJJX+gbHYXM4d1Y9IaOTPA2WapQjidlfM7o=",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_VERBOSE, true);
curl_setopt($curl, CURLOPT_SSL_CIPHER_LIST, 'DEFAULT:!DH');

$resp = curl_exec($curl);
curl_close($curl);
echo $resp;


?>
