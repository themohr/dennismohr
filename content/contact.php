<h1>Contact - Send me a line</h1>
    <div id="formError"></div>
    <form id="contact" name="contact" action="" method="post">
        <ul class="form-group">
            <li><label for="name">Name:</label><input type="text" required pattern="[A-Za-z]+ [A-Za-z]+" placeholder="Full Name" id="name" name="name" /></li>
            <li><label for="email">Email:</label><input type="email" required id="email" name="email" /></li>
            <li><label for="phone">Phone:</label><input type="text" required pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="###-###-####" id="phone" name="phone"></li>
            <li><label for="message">Message:</label><textarea name="message"></textarea></li>
            <li><div id="btn_form"><input type="submit" name="send" id="send" value="Send" /></div></li>
        </ul>
    </form>
    <script type="text/javascript">
								// Collect form fields
								
								addOnload(validateForm());
								
								function validateForm(){
									var forms = document.getElementsByTagName('form');
									
									for(f in forms){
										var formName = forms[f];
										try{
											var formFields = formName.getElementsByTagName('input');
										}catch(err){
											console.log("An error occurred: " + err);
										}
										for(i in formFields){
											var inputField = formFields[i];
											var formError = document.getElementById('formError');
											
											inputField.onblur = function(){
												var inputPattern = this.pattern;
												var inputPlaceholder = this.placeholder;
												var isValid = this.value.search(inputPattern) >= 0;
												if(!(isValid)){
													formError.innerHTML = "Pattern does not match: " + inputPlaceholder;
													this.focus();
												}else{
													formError.innerHTML = "";
												}
											}
										}
									}
								}
							</script>
