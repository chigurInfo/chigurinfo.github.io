 function correctLangCode_default(lang){
   s = window.location;
   s = s.toString();
   
   if (lang == "zh-CN")
      correctedLang = "zh_CN";
   else if (lang == "zh-CN_CN")
      correctedLang = "zh_CN";
   else if (lang == "zh-TW")
      correctedLang = "zh_TW"; 
   else if (lang == "zh-TW_TW")
      correctedLang = "zh_TW"; 
   else if (lang == "pt-BR")
      correctedLang = "pt_BR"; 
   else if (lang == "pt-BR_BR")
      correctedLang = "pt_BR"; 
   else if (lang == "en-GB")
      correctedLang = "en_GB"; 
   else if (lang == "en-GB_GB")
      correctedLang = "en_GB"; 
   else if (lang == "en-US")
      correctedLang = "en_US"; 
	  
   s = s.replace(lang, correctedLang);
   location.replace(s);

   return correctedLang;
 }

function setCookies_default(cookieName,cookieValue,calledFrom,days) {
   if (cookieValue == "") {
     var cookieValue = getQueryVariable_default("hl");
   }
   if (cookieValue) {
     var today = new Date();
     var expire = new Date();
     if (!days) {
       days = 365;
     }
     expire.setTime(today.getTime() + 3600000*24*days);

     cookie  = cookieName + "=" + escape(cookieValue);
     cookie += ";expires=" + expire.toGMTString();
     cookie += ";path=" + cookie_path;
     if(cookie_domain != "")
       cookie += ";domain=" + cookie_domain;
     document.cookie = cookie;
   }
   if (calledFrom == "dropdown") {
	 newURL = new String(window.location);
	 newURL = newURL.replace("hl=", "hlrm=");
	 if(newURL.search(/#/i)>=0)	{
		 tempURL = newURL.split('#');
		 if(tempURL[0].search(/hlrm=/i)>=0)	{
			tempURL[0]=tempURL[0].replace(/(hlrm=[a-z][a-z]_[A-Z][A-Z])|(hlrm=[a-z][a-z])/i, 'hlrm='+cookieValue);
			newURL = tempURL[0]+((tempURL[1]!= undefined)?'#'+tempURL[1]:'');
		 }
		 else	{
			if(tempURL[0].search(/\?/i)>=0)	{
				newURL = tempURL[0]+'&hlrm='+cookieValue+((tempURL[1]!= undefined)?'#'+tempURL[1]:'');
			}
			else	{
				newURL = tempURL[0]+'?hlrm='+cookieValue+((tempURL[1]!= undefined)?'#'+tempURL[1]:'');
			}
		 }
	 }
	 window.location.href = newURL;
   }
}

function getQueryVariable_default(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  } 
 }

function searchValidate(theForm) {
   if (theForm.query.value=='') {
     alert(lang_search_blank);
     return false;
   }
   return true;
}

function getCookie() {

    var args = getCookie.arguments;
    var name = args[0];
    var sep = args[1];

    var start = document.cookie.indexOf(name + "=");
    var len = start + name.length + 1;
    if ((!start) &&
          (name != document.cookie.substring(0, name.length))) {
        return null;
    }
    if (start == -1) {
        return null;
    }
    var end = document.cookie.indexOf(sep, len);
    if (end == -1) {
        end = document.cookie.length;
    }
    return unescape(document.cookie.substring(len, end));
}


function showLayer(layer){
 try {
 document.getElementById(layer).style.display = "block";
 } catch(e){}
}
function showLayerDefault(layer){
 try {
 document.getElementById(layer).style.display = "";
 } catch(e){}
}
function hideLayer(layer){
 try {
 document.getElementById(layer).style.display = "none";
 } catch(e){}
}

function toggleLayer(id) {
  var obj = document.getElementById(id);
  if (obj) {
    if (obj.style.display == "none") {
      obj.style.display = "block";
    } else {
      obj.style.display = "none";
    }
  }
}

function toggleLayerDefault(id) {
  var obj = document.getElementById(id);
  if (obj) {
    if (obj.style.display == "none") {
      obj.style.display = "";
    } else {
      obj.style.display = "none";
    }
  }
}

function toggleZippy(layer){
 try {
   document.getElementById(layer).className = (document.getElementById(layer).className == "expand")? "collapse": "expand";
 } catch(e){}   
}


function showAll(node){	
	 /* shows all children of "node"  This is for testing purposes. */
	var treeList = '';
	if (node.nodeType ==1 /*Node.ELEMENT_NODE */){
		var holder;
		var child;
		for (var children = node.childNodes, i=0; i <children.length; i++){
			child = children[i];
			holder = 'child ' + i + ' id: ' + child.id + '\tnodeType: ' + child.nodeType + '\n';
			treeList += holder;
			if (child.nodeType == 1){
				child.style.display = "block";
			}
		}
		// alert(treeList);
	}
}


function hideAll(node){	
	 /* shows all children of "node"  This is for testing purposes. */
	var treeList = '';
	if (node.nodeType ==1 /*Node.ELEMENT_NODE */){
		var holder;
		var child;
		for (var children = node.childNodes, i=0; i <children.length; i++){
			child = children[i];
			holder = 'child ' + i + ' id: ' + child.id + '\tnodeType: ' + child.nodeType + '\n';
			treeList += holder;
			if (child.nodeType == 1){
				child.style.display = "none";
			}
		}
		// alert(treeList);
	}
}

function nextElement(node){ //grabs the next non-text element
	/* returns the next sibling of "node"
	   where next sibling is a Node.ELEMENT_NODE nodeType */
	var k = node.nextSibling;
	while (k.nodeType != 1 /*not Node.ELEMENT_NODE*/){
		k = k.nextSibling;
	}
	return k;
}
 
function showNode(node) {if (node.nodeType == 1) node.style.display = "";}
function hideNode(node){if (node.nodeType == 1) node.style.display = "none";}
 
function hideBelow(node){ //hides everything below the level of node
	/* calls hideNode() on all siblings coming after "node"
       where next sibling is a Node.ELEMENT_NODE nodeType */
	var k = nextElement(node);
	while (k.style.display == "block" || k.style.display == ""){
		hideNode(k);
		k = nextElement(k);
	}
}
 
function setNext(currNode, nextNode){
	/* makes sure "nextNode" comes after "currNode"
	   calls showNode() on the "nextNode" */
	if (currNode.parentNode.id == nextNode.parentNode.id){ //same parents?
		var old_node = nextElement(currNode);
		//replace if nextNode is not immediately nextElement of currNode
		if(old_node.id != nextNode.id){
			var parent = currNode.parentNode;
			var new_node = parent.removeChild(nextNode);
			old_node = parent.replaceChild(new_node, old_node);
			parent.appendChild(old_node);
			old_node = nextElement(currNode);
		}
		showNode(old_node);
	} else {
		return;
	}	
}
 
function getNext(curr, next){
	/* uses the "curr" and "next" layer names and grab their respective node elements
       calls hideBelow() on the node associated with "curr"
       calls setNext() on nodes associated with "curr and "next" */
	var n = document.getElementById(curr);
	var m = document.getElementById(next);
 
	hideBelow(n);
	setNext(n, m);
}

function showOnly(parent, child){
        var p = document.getElementById(parent);
        var c = document.getElementById(child);
        hideAll(p);
        showNode(c);
}


function check_radio(formname, forminput) {
radioObj = document.forms[formname].elements[forminput];
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked){
			return radioObj.value;
		} else {
			return "";
                }
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}


  
  function mirrorRadios(radioButton) {
    
    var radios = document.getElementsByName('search_type');
    
    for (var i = 0; i < radios.length; i++) {
      if (radios[i].value == radioButton.value) {
        radios[i].checked = true;
        radioButton.focus();
      }
    }
    
  }



var map = null;
var geocoder = null;

function load() {
  if (GBrowserIsCompatible()) {
    geocoder = new GClientGeocoder();
  }
}

function showAddress(address) {
  if (geocoder) {
    geocoder.getLatLng(
      address,
        function(point) {
          if (!point) {
            document.getElementById('errortxt').style.display='block';
          } else {
            var addressq = address.replace(/ /g, "+");
            document.getElementById('maplink').innerHTML="<br>It looks like you're searching for a location. You can find <a href=http://maps.google.com/?q=" + addressq + "&z=8 onclick=\"urchinTracker('/outbound/helpcenter/geocodesearch')\">results for " + address + " in Google Maps</a>.<br><br>";
          }
       }
    );
  }
}



function makeRequest(url) {

  var http_request = false;

  if (window.XMLHttpRequest) { // Mozilla, Safari, IE7...
    http_request = new XMLHttpRequest();
  } else if (window.ActiveXObject) { // IE6 and older
    http_request = new ActiveXObject("Microsoft.XMLHTTP");
  }

  if(http_request) {
    http_request.open('GET', url, true);
    http_request.send(null);
  }

}

// adds label to form.query
// optional 3rd arg is temp query field name
//  if it exists, then copy value from that field,
//  append label, then set result to form.query
function addLabel(form, label){
  var args = addLabel.arguments;
  var tempFieldname = args[2];
  var finalValue = (tempFieldname != null) ? form[tempFieldname].value : form.query.value;

  if (finalValue != ""){
    finalValue += " label:" + label;
    form.query.value = finalValue;
    return true;
  }
  return false;
} 
