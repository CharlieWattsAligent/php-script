<?php


include('CalFileParser.php');
$cal = new CalFileParser();
set_timezone($timezone); // i.e. "Europe/Berlin", "UTC", "Australia/Sydney", ...

$url = "https://aligentconsulting.pagerduty.com/private/d0bcdc3784d075b980054df2529a5cd58934c3736b9c8655fa7240a76b84fae6/feed/P1RNYOY";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, $url );
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

$result = curl_exec($ch);

//echo $result;





$example3 = $cal->parse($result);

echo $example3;




?>




<!-- 
Ical file format for a single event.

BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//ZContent.net//Zap Calendar 1.0//EN
CALSCALE:GREGORIAN
METHOD:PUBLISH
BEGIN:VEVENT
SUMMARY:Abraham Lincoln
UID:c7614cff-3549-4a00-9152-d25cc1fe077d
SEQUENCE:0
STATUS:CONFIRMED
TRANSP:TRANSPARENT
RRULE:FREQ=YEARLY;INTERVAL=1;BYMONTH=2;BYMONTHDAY=12
DTSTART:20080212
DTEND:20080213
DTSTAMP:20150421T141403
CATEGORIES:U.S. Presidents,Civil War People
LOCATION:Hodgenville\, Kentucky
GEO:37.5739497;-85.7399606
DESCRIPTION:Born February 12\, 1809\nSixteenth President (1861-1865)\n\n\n
 \nhttp://AmericanHistoryCalendar.com
URL:http://americanhistorycalendar.com/peoplecalendar/1,328-abraham-lincol
 n
END:VEVENT
END:VCALENDAR

-->