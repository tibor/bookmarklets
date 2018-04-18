$bookmarklets=[
	"Facebook Debugger"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20l%3Dd.location%3Blet%20q%3Dd.querySelector(%22link%20%5Brel%3Dcanonical%5D%22)%3B!q%20%26%26%20(q%3Dl.origin%20%2B%20l.pathname)%3Bwindow.open(%22https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fdebug%2Fsharing%2F%3Fq%3D%22%2BencodeURI(q))%7D)()",
		"title"=>"Facebook Debugger",
		"desc"=>"Öffnet den aktuellen Link im Facebook Debugger",
		"code"=>""
	],
	"Link-Tweets"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20l%3Dd.location%3Blet%20q%3Dd.querySelector(%22link%20%5Brel%3Dcanonical%5D%22)%3B!q%20%26%26%20(q%3Dl.origin%20%2B%20l.pathname)%3Bwindow.open(%22https%3A%2F%2Ftwitter.com%2Fsearch%3Ff%3Dtweets%26vertical%3Ddefault%26q%3D%22%2BencodeURI(q))%7D)()",
		"title"=>"Tweets zum Link",
		"desc"=>"Öffnet die Twitter-Suche mit Tweets zum Link",
		"code"=>""
	],
	"AMP-Cache"=>[
		"bookmarklet"=>"javascript:(function()%7Blet%20d%3Ddocument%3Blet%20t%3Dd.createElement(%22a%22)%3Bt.href%3Dd.querySelector(%22*%5Brel%3D'amphtml'%5D%22).getAttribute(%22href%22)%3Blet%20e%3D%22https%3A%2F%2F%22%2Bt.host.split(%22.%22).join(%22-%22)%2B%22.cdn.ampproject.org%2Fc%2Fs%2F%22%2Bt.host%2Bt.pathname%3Bwindow.open(e)%7D)()",
		"title"=>"AMP-Cache leeren",
		"desc"=>"Liest den aktuellen Link in Googles AMP-Cache neu ein",
		"code"=>""
	]
]
