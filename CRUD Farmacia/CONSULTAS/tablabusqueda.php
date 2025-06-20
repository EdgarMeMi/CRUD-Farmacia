<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="BAJAS">
    <meta name="description" content="">
    <title>CONSULTAS</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="BAJAS.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.0.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "FARMACIA",
		"logo": "images/_dcf70507-8a07-4e22-8e36-435b7e342c7a-removebg-preview.png",
		"sameAs": [
				"https://www.facebook.com/TecNMSantiago/?locale=es_LA",
				"https://twitter.com/tecnm_santiago?lang=es",
				"https://www.instagram.com/_karely.ruiz_/?hl=es-la",
				"https://www.youtube.com/watch?v=UdAC70N08AQ"
		]
}</script>
    <meta name="theme-color" content="#89b2d8">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BAJAS">
    <meta name="twitter:description" content="FARMACIA">
    <meta property="og:title" content="BAJAS">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="BAJAS.html" data-home-page-title="BAJAS" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="es"><header class="u-align-center-xs u-clearfix u-header u-header" id="sec-75b6"><div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <img href="http://localhost/farma%20-%20copia/" class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="_dcf70507-8a07-4e22-8e36-435b7e342c7a-removebg-preview.png" alt="" data-image-width="500" data-image-height="500" data-href="http://localhost/farma">
        <nav class="u-align-left u-menu u-menu-one-level u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="LG">
          <div class="menu-collapse" style="text-transform: uppercase; font-weight: 700;">
            <a class="u-button-style u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
        
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-2" id="sec-bd3c">
    
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <section class="u-align-center u-clearfix u-section-1" id="sec-3588">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">BUSQUEDA CONSULTAS</h2>
      </div>
      <form action="procesabusca.php" method="GET">
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label">Name</label>
              <input type="text" placeholder="Ingresa el nombre del medicamento" id="name-3b9a" name="nombre" class="u-input u-input-rectangle" required="">
            </div>

            <div class="u-align-left u-form-group u-form-submit">
              <a href="index.php" class="u-btn u-btn-submit u-button-style">BUSCAR</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
</form>
         
    </section>
          <table class="u-table-entity u-table-entity-1">

          <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">Nombre </th>
                <input type="text" value = <?php $_GET['nombre'];?>>
                <th class="u-border-1 u-border-black u-table-cell">Codigo </th>
                <th class="u-border-1 u-border-black u-table-cell">Aplicacion </th>
                <th class="u-border-1 u-border-black u-table-cell">Cantidad</th>
                <th class="u-border-1 u-border-black u-table-cell">Unidades</th>
                <th class="u-border-1 u-border-black u-table-cell">Precio</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-9346"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://www.youtube.com/watch?v=3QjFdJcKkjE" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="_dcf70507-8a07-4e22-8e36-435b7e342c7a-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">Derechos reservados Tecnm Campus Santiago Papasquiaro</p>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/TecNMSantiago/?locale=es_LA"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ca59"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ca59"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/tecnm_santiago?lang=es"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e951"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e951"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/_karely.ruiz_/?hl=es-la"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a32a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a32a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="https://www.youtube.com/watch?v=UdAC70N08AQ"><span class="u-icon u-social-icon u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-886d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-886d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
          </a>
        </div>
      </div></footer>
   
  
</body></html>