
//=====
//	This is an example of a JavaScript function which opens a new
//	page and places the message passed as an argument in the body
//	of that page. Thus, it is a mechanism for displaying a message.
// 	This message might be annotation or elaboration on information
// 	in another page. This simple example opens a page of fixed size
//	and does not control where the page opens up. It also does not
//	make the page raised; thus, it may be hidden under other pages.
//	Some of these limitations can be easily removed: The length and
//	width of the page can be passed as arguments. The variable win
//	can be global and hence stored for later reference. Thus,
//	instead of oopening a new page, a formerly opend page can be
//	rewritten. This in turn would allow the user to manually size
//	and position a page for a partular purpose (e.g., diplaying
//	source code) and then load new infomration of the same type
//	(and hence hopefully fitting in the same shaped page) into it.
//=====

function tryOpen1(msg)
{
	//alert("start tryOpen1")
	var win = open("","","height=250,width=250")
	win.document.write( "<html><head><title>test</title></head>" +
						"<body>" + msg + "</body></html>" )
	win.document.close()
	//alert("end tryOpen1")
	return false
}

function showHTMLold(docWidth, docHeight, htmlDoc)
{
	//alert("start showHTML")
	win = open("","",
				"height=" + docWidth + 
				",width=" + docHeight + 
				",screenX=400,screenY=0" +
				",resizable,scrollBars")
	win.document.write( htmlDoc )
	win.document.close()
	win.moveTo(600,0)
	//alert("end showHTML")
	return false
}

function showHtmlWH( docWidth, docHeight, htmlDoc)
{
	return showHtmlWHXY(docWidth, docHeight, 400, 0, htmlDoc)
}

function showHtmlWHXY(docWidth, docHeight, xLoc, yLoc, htmlDoc)
{
	//alert("start showHtmlWHXY")
	win = open("","",
				"height=" + docHeight + 
				",width=" + docWidth + 
				",screenX=" + xLoc + ",screenY=" + yLoc +
				",resizable,scrollBars")
	win.document.write( "<html><body>" + htmlDoc + "</body></html>" )
	win.document.close()
	win.moveTo(xLoc,yLoc)
	//alert("end showHtmlWHXY")
	return false
}


//=====
//	This is an example of a JavaScript function which opens a new
//	page and fills it with the contents of a particular URL. Thus,
//	this is a mechanism for displaying a frmae of infomration; e.g.,
//	the description of a method. Note that the URL could in fact be
//	an anchor into a page so there could in fact be a single page
//	for an entire class with anchors at the start of the descriptions
//	of each method, field, virtual site, actual site, type function
//	set, etc. As above, this example gives little control of the size,
//	shape and position of the page, but as above, more can easily be done.
//	The page displayed may of course contain hyperlinks to other pages
//	of the same general type, thus crosslinking these frames.
//=====

function openHrefPage( url )
{
	//alert( "start openHrefPage" )
	win = open( url, "src", "height=300,width=600,resizable,scrollbars" )
	win.moveTo(400,600)
	//alert( "end openHrefPage" )
	return false
}

function openHrefPageHW( url, wHeight, wWidth)
{
	//alert( "start openHrefPageHW" )
	var winArgs = "height=" + wHeight +
				  ",width=" + wWidth +
				  ",resizable,scrollBars"
	//alert( "winArgs" + winArgs)
	win = open( url, "src", winArgs)
	win.moveTo(400,600)
	//alert( "end openHrefPageHW" )
	return false
}


function makeTable( nColumn , body )
{
	str = "<table>"
	str += body
	str += "</table>"
	return str
}

function makeRow( body )
{
	str = "<tr>"
	str += body
	str += "</tr>"
	return str
}

function makeItem( body )
{
	str = "<td>"
	str += body
	str += "</td>"
	return str
}

// These arguments are already HTML-normalized

function showClassAttributes( 	shortName ,
								longName ,
								pkg ,
								loaderName ,
								loaderRef ,
								isPrimitive ,
								isInnerClass ,
								isInterface ,
								isArray ,
								isExtendable ,
								superClassName ,
								superLoaderName ,
								superClassRef
								)
{
	//alert("start showClassAttributes")
	win = open("","src","height=400,width=600,resizable,scrollbars")

	win.document.write( "<html><head><title>class attributes</title></head>" +
						"<body>" +
						makeTable( 2 ,
							makeRow(
								makeItem( "Class name:" ) +
								makeItem( shortName )
							) +
							makeRow(
								makeItem( "Full class name:" ) +
								makeItem( longName )
							) +
							makeRow(
								makeItem( "Class loader:" ) +
								makeItem( loaderRef )
							) +
							makeRow(
								makeItem( "Is primitive:" ) +
								makeItem( isPrimitive )
							) +
							makeRow(
								makeItem( "Is inner class:" ) +
								makeItem( isInnerClass )
							) +
							makeRow(
								makeItem( "Is interface:" ) +
								makeItem( isInterface )
							) +
							makeRow(
								makeItem( "Is array:" ) +
								makeItem( isArray )
							) +
							makeRow(
								makeItem( "Is extendable:" ) +
								makeItem( isExtendable )
							) +
							makeRow(
								makeItem( "Superclass:" ) +
								makeItem( superClassRef )
							)
						) +

						"</body></html>" )
	win.document.close()
	//alert("end showClassAttributes")
	return false
}


function openURLinNav( URL  )
{ 
	return openURLinFrame( URL, parent.parent.fleft.fnav )
}

function openURLinSum( URL  )
{ 
	//alert( "openURLinSum: " + URL )
	return openURLinFrame( URL, parent.parent.fleft.fsum )
	//alert( "end openURLinSum" )
}

function openURLinTfs( URL  )
{ 
	return openURLinFrame( URL, parent.parent.fleft.fTFS )
}

function openURLinSrc( URL  )
{ 
	// For mutability
	//return openURLinFrame( URL, parent.parent.fright.fsrc )
	// For permission
	return openURLinFrame( URL, parent.fbot )
}

function openURLinOth( URL  )
{ 
	return openURLinFrame( URL, parent.parent.fright.foth )
}

function openURLinFrame( URL , frameWin )
{
	//alert("start openURLinFrame  URL=" + URL + " frameWin=" + frameWin )
	frameWin.location.href = URL
	//alert("end openURLinFrame")
	return false
}
