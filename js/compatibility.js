	/*descrição: Implementar folha de stilo dinâmicamente para suporte a IE8 e responsividade. */	    	
				var compatibilidade= document.createElement("video");  
				var cssId='mycss';    		
				var head= document.getElementsByTagName('head')[0];
				var link = document.createElement("link"); 		

				if (compatibilidade.play) {  
					link.id =cssId;
					link.rel="stylesheet";
					link.href="css/custom.css";
					head.appendChild(link); 
				}
				else{	   	
					link.id =cssId;
					link.rel="stylesheet";
					link.type="text/css";
					link.href="css/customIe8.css";
					link.media='all';
					head.appendChild(link); 		
				}
