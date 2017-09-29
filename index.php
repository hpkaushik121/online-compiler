
<html>
	<head>
		<title>Online Compiler </title>
			<meta name="keywords" content="BITS,OffCampus,Pilani,Compiler,WILPD" />
			<link rel="shortcut icon" href="favicon.png" />		
		
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/compile.js"></script>
			<script type="text/javascript" src="js/tab.js"></script>
			<script type="text/javascript" src="js/jquery.form.js"></script>
			<script type="text/javascript">
				$(document).ready(function() { 
					$('#form2').ajaxForm(function(msg) { 
						$('#output2').html(msg); 
					}); 
				});
			</script>
	</head>
<style>
body {
  min-height: 100vh;
  background: -webkit-linear-gradient(300deg, #de7aff, #62a9b9);
  background: linear-gradient(150deg, #de7aff, #62a9b9);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column wrap;
      flex-flow: column wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-family: "Open Sans", sans-serif;
}
body h1, body h2 {
  color: #1a1930;
  margin: 0.3rem;
}
#header{
	border:0px ;
	border-bottom: 20px solid #211d71;;
}
#header img{
	padding-bottom:10px;
}
img.title_name{
	float:right;
}

img.top_bar{
	position:absolute;
	right:10px;
	top:150px;
}
#block{
	color: #211d71;
}

.editor {
  margin-top: 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  min-width: 97vw;
  min-height: 70vh;
  background: grey;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
}
.editor .gutter {
  background: #11101f;
  color: grey;
  float:left;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: column wrap;
      flex-flow: column wrap;
  padding: 1rem;
}
.editor .gutter span {
  padding: 0.25rem;
  color: #62a9b9;
}
.editor textarea {
  background: #1a1930;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  border: 0;
  color: white;
  padding: 1rem;
  line-height: 2;
}
.editor textarea:focus {
  outline: none;
}
.select-hidden {
  display: none;
  visibility: hidden;
  padding-right: 10px;
}

.select {
  cursor: pointer;
  display: inline-block;
  position: relative;
  font-size: 16px;
  color: #fff;
  width: 220px;
  height: 40px;
}

.select-styled {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #c0392b;
  padding: 8px 15px;
  -moz-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.select-styled:after {
  content: "";
  width: 0;
  height: 0;
  border: 7px solid transparent;
  border-color: #fff transparent transparent transparent;
  position: absolute;
  top: 16px;
  right: 10px;
}
.select-styled:hover {
  background-color: #b83729;
}
.select-styled:active, .select-styled.active {
  background-color: #ab3326;
}
.select-styled:active:after, .select-styled.active:after {
  top: 9px;
  border-color: transparent transparent #fff transparent;
}

.select-options {
  display: none;
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  z-index: 999;
  margin: 0;
  padding: 0;
  list-style: none;
  background-color: #ab3326;
}
.select-options li {
  margin: 0;
  padding: 12px 0;
  text-indent: 15px;
  border-top: 1px solid #962d22;
  -moz-transition: all 0.15s ease-in;
  -o-transition: all 0.15s ease-in;
  -webkit-transition: all 0.15s ease-in;
  transition: all 0.15s ease-in;
}
.select-options li:hover {
  color: #c0392b;
  background: #fff;
}
.select-options li[rel="hide"] {
  display: none;
}
</style>
	<body>
	<div id="whole"  style="background:#ffffff; margin-top:0px;">
		<div id="header">
			
			<img style="vertical-align:middle" src="logo.png"></img>

<b><font style="color:#14375F; font-size:50px;">MAHAVIR SWAMI INSTITUE OF TECHNOLOGY</font></b></p>
			
			
			
		</div>
		<div id="content">
			<p id="logout" style="float:right">Click <a href="logout.php">Here</a> to logout!!</p>
			<table class="code">
				<td class="code">	
				<form action="compile.php" method="post" id="form">
				<strong>Select your prefered language:<br></strong>
						<select name="language" id="language" class="dropdown">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							<option value="python2.7">Python</option>
							<option value="python3.2">Python3</option>
						</select> &nbsp <img src="click.png"></img>
					<br />
<br>
					<strong>Enter Your code here:</strong>
					
					<div class="editor">
  <div class="gutter"><span>1</span></div>
  <textarea name="code" rows=15 cols=100 onkeydown=insertTab(this,event) id="code"></textarea>
</div>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input type="submit" value="Submit" id="submit">
					<input type="reset" value="Reset"><br/>
				</form>
				</td>
				
			<tr>
			<td class="code"><strong>Output:</strong>
			<span id="output"></span><br/></td>
			
			</tr>
		</div>
		<table>
		<div id="bottom">
			<img class="bottom_bar" src="styles/BITS_bar.png" width="400px" height="6px" alt="bar" /><br /><hr />
			
			<img class="tagline" src="styles/tagline.png" width="300px" height="98px" style="float:right" />
		</div>
		</table>
	</div>
	
	</body>
	<script>
	var input = document.querySelector('textarea');
var gutter = document.querySelector('.gutter');
var val = input.value;
var i = 1;

input.addEventListener('input', update);

function update() {
	val = input.value;
	
	var lineBreaks = val.match(/\n/g);
	// alert('Hi');
	var numOfSpans = gutter.childElementCount;
	var numOfLines = lineBreaks.length + 1;
	
	
	
	if (numOfSpans < numOfLines) {
			var el = document.createElement('span');
			el.innerHTML = numOfLines;
			gutter.appendChild(el);
		}
	else if (numOfSpans > numOfLines){
			gutter.removeChild(gutter.childNodes[numOfLines]);
		}
	
}

update();
// Darn !! i can't get rid of the second span >_<
	</script>
	<script>
	$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
	</script>
</html>
