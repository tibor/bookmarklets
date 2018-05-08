<?php
$bookmarklets=[
	"Facebook Debugger"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20l%3Dd.location%3Blet%20q%3Dd.querySelector(%22link%20%5Brel%3Dcanonical%5D%22)%3B!q%20%26%26%20(q%3Dl.origin%20%2B%20l.pathname)%3Bwindow.open(%22https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fdebug%2Fsharing%2F%3Fq%3D%22%2BencodeURI(q))%7D)()",
		"title"=>"Facebook Debugger",
		"desc"=>"Öffnet den aktuellen Link im Facebook Debugger",
		"code"=>"let d=document;
let l=d.location;
//get canonical url
let q=d.querySelector(\"link [rel=canonical]\");
//get current tabs url, if canonical isn‘t defined
!q && (q=l.origin + l.pathname);
//open facebook debugger with current url prefilled in new tab
window.open(\"https://developers.facebook.com/tools/debug/sharing/?q=\"+encodeURI(q))"
	],
	"Link-Tweets"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20l%3Dd.location%3Blet%20q%3Dd.querySelector(%22link%20%5Brel%3Dcanonical%5D%22)%3B!q%20%26%26%20(q%3Dl.origin%20%2B%20l.pathname)%3Bwindow.open(%22https%3A%2F%2Ftwitter.com%2Fsearch%3Ff%3Dtweets%26vertical%3Ddefault%26q%3D%22%2BencodeURI(q))%7D)()",
		"title"=>"Tweets zum Link",
		"desc"=>"Öffnet die Twitter-Suche mit Tweets zum Link",
		"code"=>"let d=document;
let l=d.location;
//get canonical URL
let q=d.querySelector(\"link [rel=canonical]\");
//get current tabs URL, if canonical URL isn‘t defined
!q && (q=l.origin + l.pathname);
//open twitter search with current url in new tab
window.open(\"https://twitter.com/search?f=tweets&vertical=default&q=\"+encodeURI(q))
"
	],
	"AMP-Cache"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20t%3Dd.createElement(%22a%22)%3Bt.href%3Dd.querySelector(%22*%5Brel%3D'amphtml'%5D%22).getAttribute(%22href%22)%3Blet%20e%3D%22https%3A%2F%2F%22%2Bt.host.split(%22.%22).join(%22-%22)%2B%22.cdn.ampproject.org%2Fc%2Fs%2F%22%2Bt.host%2Bt.pathname%3Bwindow.open(e)%7D)()",
		"title"=>"AMP-Cache leeren",
		"desc"=>"Liest den aktuellen Link in Googles AMP-Cache neu ein",
		"code"=>"let d=document;
//create helper to get URL
let t=d.createElement(\"a\");
//get URL from helper element
t.href=d.querySelector(\"*[rel='amphtml']\").getAttribute(\"href\");
//build AMP cache URL from regular URL
let e=\"https://\"+t.host.split(\".\").join(\"-\")+\".cdn.ampproject.org/c/s/\"+t.host+t.pathname;
//open AMP cache in new tab and thus empty cache
window.open(e)
"
	],
	"Share Quote"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20w%3Dwindow%3Bw.open(%22https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3D%22%2BencodeURI(w.location)%2B%22%26quote%3D%22%2Bw.getSelection().toString())%7D)()",
		"title"=>"Share Quote",
		"desc"=>"Lets you share selected text on a website as a link quote to facebook",
		"code"=>"let w=window;
w.open(\"https://www.facebook.com/sharer/sharer.php?u=\"+encodeURI(w.location)+\"&quote=\"+w.getSelection().toString())"
	],
	"WWW/AMP"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20l%3Dlocation%3Blet%20d%3Ddocument%3Blet%20c%3Dd.querySelector(%22link%5Brel%3Dcanonical%5D%22).href%3Bc%3D%3Dl%20%3F%20l.href%3Dd.querySelector(%22link%5Brel%3Damphtml%5D%22).href%20%3A%20l.href%3Dc%7D)()",
		"title"=>"WWW/AMP",
		"desc"=>"Lets you switch between WWW and AMP page",
		"code"=>"let l=location;
let d=document;
let c=d.querySelector(\"link[rel=canonical]\").href;
c==l ? l.href=d.querySelector(\"link[rel=amphtml]\").href : l.href=c"
	],
	[
		"bookmarklet"=>"javascript:(function()%7Blet%20i%3D%20location.href.split(%22-%22).slice(-1)%5B0%5D%3Bwindow.open(%22https%3A%2F%2Fi.giphy.com%2F%22%2Bi%2B%22.gif%22)%7D)()",
		"title"=>"Get GIF",
		"desc"=>"Lets you get the original .gif file from giphy instrad of a mp4",
		"code"=>"let i= location.href.split("-").slice(-1)[0];
window.open("https://i.giphy.com/"+i+".gif");"
	]
];

?>
