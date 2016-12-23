	var getProtocol=(function(){
		var DEFAULTS={
			securePath:"",
			nonSecurePath:""
			}
			return{
				completePath:function(){
					var args=arguments[0]||"";
					var getProtocol=window.location.protocol;
					var path=getProtocol;
					if(getProtocol==="https:"){
						path+=args.securePath;
					}else{
						path+=args.nonSecurePath;
					}
				return path;
			}
		}
	})();
	
	var elementObject=(function(){
		var DEFAULTS={
			element:"h4",
			appendElement:"body",
			text:"",
			type:"text/javascript",
			path:"",
			id:""
			}
		return{
			create:function(){
				var args=arguments[0]||'';
				var newElement=document.createElement(args.element||DEFAULTS.element);
				if(args.path!=undefined){
					newElement.src=args.path;
				}
				if(args.id!=undefined){
					newElement.id=args.id;
				}
				newElement.type=args.type||DEFAULTS.type;
				newElement.text=args.text||DEFAULTS.text;
				var appendToElement=document.getElementsByTagName('body')[0];
				appendToElement.appendChild(newElement);
				}
			};
		})();
		
		function asyncResource(elementType,resourcePath,feature){$.ajax({type:"HEAD",url:resourcePath,async:true,dataType:"script",success:function(){elementObject.create({element:elementType,path:resourcePath});if(feature!==""){elementObject.create({element:elementType,text:feature,type:'text/html'});}},error:function(xhr,status){console.log("An error occurred: "+status);console.dir(xhr);}});}