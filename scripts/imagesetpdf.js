// source: "http://www.java.scripts-fr.com"
function ImageMax(chemin, legende)
   {
   if(!legende) 
		{
			html = '<html> <head> <title>Image</title> </head> <body onBlur="top.close()"><form method="post"><p><input type="button" name="B1" value="Fermer cette fenêtre" onClick="window.close()"></p></form><IMG src="'+chemin+'" style=”max-width:600px;” BORDER=0 NAME=Image onLoad="window.resizeTo(document.Image.width+50, document.Image.height+180)"></body></html>';
		}
	else 
		{
			html = '<html> <head> <title>Image</title> </head> <body onBlur="top.close()"><form method="post"><p><input type="button" name="B1" value="Fermer cette fenêtre" onClick="window.close()"></p><p>'+legende+'</p></form><IMG src="'+chemin+'" style=”max-width:600px;” BORDER=0 NAME=Image onLoad="window.resizeTo(document.Image.width+50, document.Image.height+180)"></body></html>';
		}
   popupImage = window.open('','_blank','toolbar=0, location=0, directories=0, menuBar=0, scrollbars=1, resizable=1');
   popupImage.document.open();
   popupImage.document.write(html);
   popupImage.document.close();
   }

function openPDF (URL){ 
	var Alargeur = screen.availWidth*3/4;
	var Ahauteur = screen.availHeight*3/4;
    window.open(URL,"ventana1", "width="+Alargeur+", height="+Ahauteur+", scrollbars=1, resizable=1");
}



