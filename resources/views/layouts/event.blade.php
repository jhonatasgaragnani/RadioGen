<?php
$event = \Admin\Models\Event::find(request()->route()->parameters()['event']);
?>
<meta property="og:title" content="{{ preg_replace("/\r|\n/", " ", trim($event->title)) }}">
<meta property="og:image" content="{{ preg_replace("/\r|\n/", " ", trim(request()->getSchemeAndHttpHost().$event->image)) }}">
<meta property="og:description" content="{{ preg_replace("/\r|\n/", " ", str_limit(trim(strip_tags($event->body)), 150)) }}">
<meta property="og:url" content="{{ preg_replace("/\r|\n/", " ", trim(url()->current())) }}">
<meta property="og:type" content="article">
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="{{ preg_replace("/\r|\n/", " ", trim(url()->current())) }}">
<meta name="twitter:title" content="{{ preg_replace("/\r|\n/", " ", trim($event->title)) }}">
<meta name="twitter:image" content="{{ preg_replace("/\r|\n/", " ", trim(request()->getSchemeAndHttpHost().$event->image)) }}">
<meta name="twitter:description" content="{{ preg_replace("/\r|\n/", " ", str_limit(trim(strip_tags($event->body)), 150)) }}">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116316904-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-116316904-1');
</script>
