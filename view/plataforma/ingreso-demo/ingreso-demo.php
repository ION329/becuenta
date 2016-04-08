<div class="allion">
	<div class="tabAll">
    	<div class="tabIn taC">

        	<img src="resources/img/important/buena-educacion.png" class="mb10" />
            <div class="t16 color666 ff0 mb30">Ingreso al DEMO de vendedores</div>

            <div class="ingresus bGray3 p30">

                <div class="dCambiar1">
                    <input class="inpIng rr5 mb10" type="text" placeholder="Número de identificación" />
                    <input class="inpIng rr5 mb15" type="password" placeholder="Contraseña" />
                    <!-- <a href="#/plataforma/seleccion" class="bBasic2 rr5 colorfff bVerde dB taC cP">Ingresar</a> -->
                    <div class="progress-button elastic">
                        <button onclick="Buena_educacion.login(0)"><span>Ingresar</span></button>
                        <svg class="progress-circle" width="70" height="70"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
                        <svg class="checkmark" width="70" height="70"><path d="m31.5,46.5l15.3,-23.2"/><path d="m31.5,46.5l-8.5,-7.1"/></svg>
                        <svg class="cross" width="70" height="70"><path d="m35,35l-9.3,-9.3"/><path d="m35,35l9.3,9.3"/><path d="m35,35l-9.3,9.3"/><path d="m35,35l9.3,-9.3"/></svg>

                    </div>
            	</div>
            </div>
        </div>
    </div>
</div>

<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
}
?>