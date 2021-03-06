// Dark Light Theme mode Window match Media
const mql =window.matchMedia('(prefers-color-scheme: dark)');
  try {
    // Chrome & Firefox
    mql.addEventListener('change', (e) => {
      theme = e.matches ? "dark" : "light";
      localStorage.setItem('theme', theme);
      if(theme === "light") {
  			lightMode();
  		}else{
  			darkMode();
  		}
    });
  } catch (e1) {
    try {// Safari
      mql.addListener((e) => {
        theme = e.matches ? "dark" : "light";
        localStorage.setItem('theme', theme);
        if(theme === "light") {
    			lightMode();
    		}else{
    			darkMode();
    		}
      });
    } catch (e2) {
      console.error(e2);
    }
  }
// Dark Light Theme mode
const darktoggle = document.getElementById("darktoggle"),
			body = document.querySelector("body");
let span = document.getElementById("shift");
let theme = "light";
darktoggle.addEventListener("click", themeChange);
function themeChange() {
	theme = theme === "dark" ? "light" : "dark";
	localStorage.setItem('theme', theme);
  if(theme === "light") {
		lightMode();
  }else{
    darkMode();
  }
}
function setStyles(element, params) {
  for(let i in params) {element.style.setProperty(i, params[i]);}
}
function darkMode() {
	setStyles(body, {"--bkg": "#070707", "--text": "#EDEDED", "--color1": "#0e2f2f", "--color2": "#548b90", "--bkg_header": "rgba(7,7,7,0.7)"});
	darktoggle.classList.add("clicked");
  if (document.getElementById("header_img_dark")) {document.getElementById("header_img_dark").style.display="initial";}
  if (document.getElementById("header_img_bright")) {document.getElementById("header_img_bright").style.display="none";}
  if (document.getElementById("github_dark")) {document.getElementById("github_dark").style.display="initial";}
  if (document.getElementById("github")) {document.getElementById("github").style.display="none";}
  if (document.getElementById("notions_dark")) {document.getElementById("notions_dark").style.display="initial";}
  if (document.getElementById("notions")) {document.getElementById("notions").style.display="none";}
  if (document.getElementById("isfsck")) {document.getElementById("isfsck").style.backgroundImage="url(css/bkg/isfscquoi_bande_noir.png)";}
  
  var x = document.getElementsByClassName("waves-dark");
  for(i = 0; i < x.length; i++) {x[i].style.display="initial";}
  x = document.getElementsByClassName("waves-light");
  for(i = 0; i < x.length; i++) {x[i].style.display="none";}

//  if (document.getElementById("waves-dark")) {document.getElementById("waves-dark").style.display='initial';}
//  if (document.getElementById("waves-light")) {document.getElementById("waves-light").style.display='none';}
}
function lightMode() {
	setStyles(body, {
    "--bkg": "#EDEDED", "--text": "#080909", "--color1": "#93B4AD", "--color2": "#77a99e", "--bkg_header": "rgba(237,237,237,0.7)"});
	darktoggle.classList.remove("clicked");
  if (document.getElementById("header_img_dark")) {document.getElementById("header_img_dark").style.display="none";}
  if (document.getElementById("header_img_bright")) {document.getElementById("header_img_bright").style.display="initial";}
  if (document.getElementById("github_dark")) {document.getElementById("github_dark").style.display="none";}
  if (document.getElementById("github")) {document.getElementById("github").style.display="initial";}
  if (document.getElementById("notions_dark")) {document.getElementById("notions_dark").style.display="none";}
  if (document.getElementById("notions")) {document.getElementById("notions").style.display="initial";}
  if (document.getElementById("isfsck")) {document.getElementById("isfsck").style.backgroundImage="url(css/bkg/isfscquoi_bande.png)";}

  var x = document.getElementsByClassName("waves-dark");
  for(i = 0; i < x.length; i++) {x[i].style.display="none";}
  x = document.getElementsByClassName("waves-light");
  for(i = 0; i < x.length; i++) {x[i].style.display="initial";}




  //  if (document.getElementById("waves-dark_color")) {document.getElementById("waves-dark_color").style.display="none";}
//  if (document.getElementById("waves-light_color")) {document.getElementById("waves-light_color").style.display="initial";}
//  if (document.getElementById("waves-dark")) {document.getElementById("waves-dark").style.display='none';}
//  if (document.getElementById("waves-light")) {document.getElementById("waves-light").style.display='initial';}
//  if (document.getElementById("index_bkg")) {document.getElementById("index_bkg").style.backgroundImage="url(../css/bkg/index.png)";}
//  if (document.getElementById("cv_bkg")) {document.getElementById("cv_bkg").style.backgroundImage="url(../css/bkg/cv.png)";}
}

// Filter

/*$(document).ready(function() {
  $('ul#filter a').click(function() {
    $(this).css('outline','none');
    $('ul#filter .current').removeClass('current');
    $(this).parent().addClass('current');

    var filterVal = $(this).text().toLowerCase().replace(' ','-');
    if(filterVal == 'tous') {
      $('ul#items li.hidden').fadeIn('slow').removeClass('hidden');
    } else {

      $('ul#items li').each(function() {
        if(!$(this).hasClass(filterVal)) {
          $(this).fadeOut('normal').addClass('hidden');
        } else {
          $(this).fadeIn('slow').removeClass('hidden');
        }
      });
    }
    return false;
  });
});*/

//Carousel Communication outils

$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));
	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
	}
});
