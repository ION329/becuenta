var btn_prg, instance_data, menuType, myParam, general_location, end_charge=0;

var Buena_educacion = {
	init: function(){

		var buena_educacion = angular.module( 'ion' , ['ngRoute']).factory('httpInterceptor', function ($q, $rootScope, $log) {
	    var loadingCount = 0;

		    return {
		        request: function (config) {
		            if(++loadingCount === 1) $rootScope.$broadcast('loading:progress');
		            return config || $q.when(config);
		        },

		        response: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return response || $q.when(response);
		        },

		        responseError: function (response) {
		            if(--loadingCount === 0) $rootScope.$broadcast('loading:finish');
		            return $q.reject(response);
		        }
		    };

		});

		buena_educacion.config( [ '$locationProvider','$routeProvider','$httpProvider', function($locationProvider , $routeProvider, $httpProvider) {

		//$locationProvider.html5Mode(true);


//BUENA EDUCACIÓN

//////// INGRESO DEMO
			$routeProvider.when('/', {
			templateUrl: 'view/formacion/perfil.php',
			controller: 'control_init'
//////// 
			}).when('/mi-proyecto', {
			templateUrl: 'view/formacion/mi-proyecto.php',
			controller: 'control_init'
//////// 
			}).when('/mis-cursos', {
			templateUrl: 'view/formacion/mis-cursos.php',
			controller: 'control_init'
			
//////// 
			}).when('/foros', {
			templateUrl: 'view/formacion/foros.php',
			controller: 'control_init'
//////// 
			}).when('/eventos', {
			templateUrl: 'view/formacion/eventos.php',
			controller: 'control_init'
			
//////// SELECCIÓN DEMO
			}).when('/plataforma/seleccion', {
			templateUrl: 'view/plataforma/ingreso-demo/seleccion/index.php',
			controller: 'control_init'


//////// ESTUDIANTE
			}).when('/plataforma/estudiante', {
			templateUrl: 'view/plataforma/estudiante/perfil.php',
			controller: 'control_init'
			}).when('/plataforma/estudiante/perfil', {
			templateUrl: 'view/plataforma/estudiante/perfil.php',
			controller: 'control_init'
//////// NOTAS
			}).when('/plataforma/estudiante/notas', {
			templateUrl: 'view/plataforma/estudiante/notas.php',
			controller: 'control_init'
//////// HORARIOS
			}).when('/plataforma/estudiante/horario', {
			templateUrl: 'view/plataforma/estudiante/horario.php',
			controller: 'control_init'
//////// HORARIOS
			}).when('/plataforma/estudiante/planestudio', {
			templateUrl: 'view/plataforma/estudiante/planestudio.php',
			controller: 'control_init'
//////// HORARIOS
			}).when('/plataforma/estudiante/mensajes', {
			templateUrl: 'view/plataforma/estudiante/mensajes.php',
			controller: 'control_init'
//////// HORARIOS
			}).when('/plataforma/estudiante/foros', {
			templateUrl: 'view/plataforma/estudiante/foros.php',
			controller: 'control_init'
//////// HORARIOS
			}).when('/plataforma/estudiante/recursos', {
			templateUrl: 'view/plataforma/estudiante/recursos.php',
			controller: 'control_init'


//PLATAFORMA - BUENA EDUCACIÓN [VISOR]
//////// INICIO
			}).when('/plataforma/visor', {
			templateUrl: 'view/plataforma/visor/cali/index.php',
			controller: 'control_init'
//////// BUSCAR
			}).when('/plataforma/visor/busqueda-avanzada', {
			templateUrl: 'view/plataforma/visor/busqueda-avanzada/index.php',
			controller: 'control_init'
//////// BUSCAR
			}).when('/plataforma/visor/resultados', {
			templateUrl: 'view/plataforma/visor/resultados/index.php',
			controller: 'control_init'
//////// LA INSTITUCIÓN
			}).when('/plataforma/visor/institucion', {
			templateUrl: 'view/plataforma/visor/institucion/index.php',
			controller: 'control_init'
//////// ESTUDIANTES
			}).when('/plataforma/visor/estudiantes', {
			templateUrl: 'view/plataforma/visor/busqueda-estudiantes/index.php',
			controller: 'control_init'
//////// ESTUDIANTE
			}).when('/plataforma/visor/estudiante', {
			templateUrl: 'view/plataforma/visor/estudiante/index.php',
			controller: 'control_init'
//////// PERSONAL ACADÉMICO
			}).when('/plataforma/visor/personal', {
			templateUrl: 'view/plataforma/visor/busqueda-personal/index.php',
			controller: 'control_init'
//////// PERFIL
			}).when('/plataforma/visor/planestudio2', {
			templateUrl: 'view/plataforma/visor/planestudio2.php',
			controller: 'control_init'
//////// PERSONAL ACADÉMICO
			}).when('/plataforma/visor/personal-acedemico', {
			templateUrl: 'view/plataforma/visor/personal/index.php',
			controller: 'control_init'
//////// PERFIL
			}).when('/plataforma/visor/planestudio', {
			templateUrl: 'view/plataforma/visor/planestudio.php',
			controller: 'control_init'


//PLATAFORMA - BUENA EDUCACIÓN [ADMINISTRADOR] [REGISTRO INSTITUCIÓN]
//////// INGRESO
			}).when('/plataforma', {
			templateUrl: 'view/plataforma/ingreso/ingreso.php',
			controller: 'control_init'
//////// REGISTRO NOMBRE LOGO
			}).when('/plataforma/admin/registro/', {
			templateUrl: 'view/plataforma/admin/registro/registro_institucion/index.php',
			controller: 'control_init'
//////// REGISTRO INFORMACIÓN
			}).when('/plataforma/admin/registro/registro_informacion', {
			templateUrl: 'view/plataforma/admin/registro/registro_informacion/index.php',
			controller: 'control_init'

//PLATAFORMA - BUENA EDUCACIÓN [ADMINISTRADOR]
//////// DIRECTORIO
			}).when('/plataforma/admin/directorio', {
			templateUrl: 'view/plataforma/admin/zonas/directorio/index.php',
			controller: 'control_init'
//////// PANEL
			}).when('/plataforma/admin/panel', {
			templateUrl: 'view/plataforma/admin/panel/index.php',
			controller: 'control_init'
//////// LOS ESTUDIANTES
			}).when('/plataforma/admin/panel/estudiantes', {
			templateUrl: 'view/plataforma/admin/panel/los-estudiantes/index.php',
			controller: 'control_init'
//////// BUSCAR - INICIO
			}).when('/plataforma/admin/inicio', {
			templateUrl: 'view/plataforma/admin/zonas/buscar-estudiante/index.php',
			controller: 'control_init'
//////// BUSCAR - INICIO
			}).when('/plataforma/admin/buscargrado', {
			templateUrl: 'view/plataforma/admin/zonas/buscar-grado/index.php',
			controller: 'control_init'
//////// CERTIFICADOS
			}).when('/plataforma/admin/certificados', {
			templateUrl: 'view/plataforma/admin/zonas/certificados/index.php',
			controller: 'control_init'
//////// ESTUDIANTE
			}).when('/plataforma/admin/estudiante', {
			templateUrl: 'view/plataforma/admin/zonas/estudiante/index.php',
			controller: 'control_init'
//////// PROFESOR
			}).when('/plataforma/admin/profesor', {
			templateUrl: 'view/plataforma/admin/zonas/profesor/index.php',
			controller: 'control_init'
//////// Grados
			}).when('/plataforma/admin/grados', {
			templateUrl: 'view/plataforma/admin/zonas/grados/index.php',
			controller: 'control_init'
//////// Eventos
			}).when('/plataforma/admin/eventos', {
			templateUrl: 'view/plataforma/admin/zonas/eventos/index.php',
			controller: 'control_init'
//INVIERTA YA
//////// MI CAMPAÑA
			}).when('/inviertaya', {
			templateUrl: 'view/inviertaya/micampana.php',
			controller: 'control_init'
//////// INVERSIONES
			}).when('/inviertaya/inversiones', {
			templateUrl: 'view/inviertaya/inversiones.php',
			controller: 'control_init'
//////// ACTIVIDAD
			}).when('/inviertaya/actividad', {
			templateUrl: 'view/inviertaya/actividad.php',
			controller: 'control_init'
//////// RECOMPENSAS
			}).when('/inviertaya/recompensas', {
			templateUrl: 'view/inviertaya/recompensas.php',
			controller: 'control_init'								
//MENTORIA
//////// MENTORIA
			}).when('/mentoria', {
			templateUrl: 'view/mentoria/mentoria.php',
			controller: 'control_init'

//////// AGENDA			
			}).when('/mentoria/agenda', {
			templateUrl: 'view/mentoria/agenda.php',
			controller: 'control_init'
//////// CURSOS CREADOS			
			}).when('/mentoria/cursos', {
			templateUrl: 'view/mentoria/cursos.php',
			controller: 'control_init'
//////// RECURSOS			
			}).when('/mentoria/recursos', {
			templateUrl: 'view/mentoria/recursos.php',
			controller: 'control_init'			


// VACÍO
			}).otherwise({
				redirectTo: '/',
				templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
				controller: 'control_init'
			});

			$httpProvider.interceptors.push('httpInterceptor');

		}]);

		buena_educacion.run( function ($rootScope) {

    		$rootScope.$on('loading:progress', function(){
			    console.log("Inicia la carga");
			 	//$("#preload").css('display','block');
				//$("#load_status").css('display','block');

			});

			$rootScope.$on('loading:finish', function(){

				console.log("Termina la carga");


				if( menuType == undefined){
					menuType = "personas";
				}

				setTimeout(function(){
					Ion.calcularAlturas();
					Buena_educacion.obtain_selected(menuType);
					Slide.init();
					// console.log(myParam);
					console.log("Url de la pagina: "+general_location);

                [].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {

                        data = Buena_educacion.login();

                new UIProgressButton( bttn, {
                    callback : function( instance_data ) {

                        var progress = 0,
                            interval = setInterval( function() {
                                progress = Math.min( progress + Math.random() * 0.1, 1 );
                                instance_data.setProgress( progress );
                                if( progress === 1 ) {

                                    instance_data.stop( data.stop_data );
                                    clearInterval( interval );

                                    if(data.access == 1){

                        				setTimeout(function(){

                        					//ajax


                        					window.location = data.response;
										}, 2100);

                                    }
                                }
                            }, 50 );
                    }
                } );
            } );

				}, 100);


				$(document).ready(function(){
					var nice = $(".bodBuddy").niceScroll({
						boxzoom:false,
						scrollspeed:100,
						mousescrollstep:50,
						zindex:999999999999999999,
						cursorcolor:"#666",
						cursorwidth:10,
						cursorborder:"none",
						cursorborderradius:"0",
						cursoropacitymin:0.4,
						cursoropacitymax:0.8,
						touchbehavior:false,
						grabcursorenabled:true,
						background:"",
						cursordragontouch:true
					});
				});

				setTimeout(function(){
					// $("#preload").css('display','none');
					// $("#load_status").css('display','none');
				}, 1000);

				end_charge++;

			});

		});

		buena_educacion.controller('control_init', ['$scope','$routeParams','$location', function($scope, $routeParams, $location) {
			menuType         = $routeParams.menuType;
			myParam          = $location.search().myParam;
			general_location = $location.path();
		}]);


	},

	obtain_selected : function(id){
		$(".bUp").removeClass('seleccted');
		$("#bUp_"+id).addClass('seleccted');
	},

	login : function(){

		var data = { stop_data : 1,
					    access : 1,
						response : "#/plataforma/seleccion"
					};

		return data;

	}

};

Buena_educacion.init();