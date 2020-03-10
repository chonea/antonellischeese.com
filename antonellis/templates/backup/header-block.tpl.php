<!--// Typekit //-->
<script type="text/javascript" src="http://use.typekit.com/cec3gkj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--// end Typekit //-->
<style type="text/css">
div#header-navigation-subscribe input {border-style:none; background-color:transparent; font-size:11px;}
div#header-navigation-subscribe input.textfield_active {color:#747d50;}
div#header-navigation-subscribe input.textfield_inactive {color:#9ca86c;}
div#header-navigation-subscribe input#idldik-idldik {position:absolute; width:154px; height:11px; top:-1px; left:2px; width:137px;}
div#header-navigation-subscribe div#header-navigation-subscribe-submit {position:absolute; width:28px; height:20px; top:0px; left:150px; cursor:pointer;}
</style>
<script>
$(document).ready(function() {
 // hides the content as soon as the DOM is ready
  $('#hidden-content-0').hide();
  $('#hidden-content-1').hide();
  $('#hidden-content-2').hide();
  $('#hidden-content-3').hide();
  $('#hidden-content-4').hide();
  $('#hidden-content-5').hide();
  $('#hidden-content-6').hide();
  $('#hidden-content-7').hide();
  $('#hidden-content-8').hide();
  $('#hidden-content-9').hide();
  $('#less-content-0').hide();
  $('#less-content-1').hide();
  $('#less-content-2').hide();
  $('#less-content-3').hide();
  $('#less-content-4').hide();
  $('#less-content-5').hide();
  $('#less-content-6').hide();
  $('#less-content-7').hide();
  $('#less-content-8').hide();
  $('#less-content-9').hide();
});
</script>
<div id="header-navigation">
	<div id="header-navigation-links">
		<?
		$textnav = array();
		$textnav['contact-us'] = array(
			"uri" => "/contact-us",
			"text" => "Contact Us"
			);
		$textnav['careers'] = array(
			"uri" => "/careers",
			"text" => "Careers"
			);
		$textnav['settlement-club'] = array(
			"uri" => "/settlement-club",
			"text" => "Settlement Club"
			);

		$first = true;
		foreach ($textnav as $navitem => $navparams) {
			if (!$first) {
			?> &nbsp;|&nbsp; <?
			} else {
				$first = false;
			}
			if (strpos($_SERVER['REQUEST_URI'],$navparams['uri']) === false) {
			?><a href="<?=$navparams['uri']?>"><?=$navparams['text']?></a><?
			} else {
			?><a href="<?=$navparams['uri']?>" class="active"><?=$navparams['text']?></a><?
			}
		}
		?></div>
	<div id="header-navigation-subscribe" onmouseover="this.style.backgroundImage='url(\'/sites/all/themes/antonellis/images/antonellis_signup_rollover.png\')'" onmouseout="this.style.backgroundImage='url(\'/sites/all/themes/antonellis/images/antonellis_signup_static.png\')'">
		<form name="subscribeForm" action="/subscribe" method="post"><input class="textfield_inactive" id="idldik-idldik" name="cm-idldik-idldik" type="text" size="32" value="Email Sign-up" onFocus="if (this.value == 'Email Sign-up') {this.value = ''; this.className = 'textfield_active';}" onBlur="if (this.value == '') {this.value='Email Sign-up'; this.className = 'textfield_inactive';}" />
			<div id="header-navigation-subscribe-submit" name="subscribeSubmit" onClick="if (document.getElementById('idldik-idldik').value == 'Email Sign-up') {return false;} else {document.subscribeForm.submit();}"></div>
		</form></div>
	<div id="header-navigation-donate"><a href="/donate"><img src="/sites/all/themes/antonellis/images/antonellis_donate_static.png" border="0" onmouseover='this.src="/sites/all/themes/antonellis/images/antonellis_donate_rollover.png"' onmouseout='this.src="/sites/all/themes/antonellis/images/antonellis_donate_static.png"' /></a></div>
</div>
<div id="header-tagline"><img src="/sites/all/themes/antonellis/images/antonellis_tagline.png" /></div>