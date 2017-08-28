$.ajax({
	url:"http://gateway.marvel.com/v1/public/creators/32/comics?ts=1&apikey=6c5e573716d0c0b265d780f37930ef08&hash=6ed7fc975858d8c20e9ccb887053ed6e",
	type: "GET",
	success: function(data){

		var comics = document.getElementById("comics");
		
		var list ="";

		for(var i = 0; i < data.data.results.length;i++){			
			
			title = data.data.results[i].title;
			thumb = data.data.results[i].thumbnail;
            description = data.data.results[i].description;
            

			if (description == null) {
				description = "Without description";
			}

            list += 
            "<div class='single-comic col-md-4'>"+
                "<div class='col-xs-12 col-sm-6 col-md-12 center-md'>" +
                    "<img src='"+thumb.path+"/portrait_uncanny."+thumb.extension+"'/>" +
                "</div>" +
                "<div class='col-xs-12 col-sm-6 col-md-12 center-md'>" +
                    "<h3>"+title+"</h3>" +
                    "<p>"+description+"</p>" +                    
                "</div>" +
            "</div>"
		}

		comics.innerHTML = list;

	},
	error: function(){

	}
});