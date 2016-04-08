var menuType, myParam, general_location, end_charge=0;

var Banco = {
	init: function(){

		var bancoEmprendimiento = angular.module( 'ion' , ['ngRoute']).factory('httpInterceptor', function ($q, $rootScope, $log) {
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

		bancoEmprendimiento.config( [ '$locationProvider','$routeProvider','$httpProvider', function($locationProvider , $routeProvider, $httpProvider) {

			// $locationProvider.html5Mode(true);

//BUENA EDUCACIÓN
//////// HOME
			$routeProvider.when('/page', {
			templateUrl: 'view/buenaeducacion/home.php',
			controller: 'control_init'
//////// PLATAFORMA		
			}).when('/plataformas', {
			templateUrl: 'view/buenaeducacion/plataforma.php',
			controller: 'control_init'
//////// CONTACTO		
			}).when('/contacto', {
			templateUrl: 'view/buenaeducacion/contacto.php',
			controller: 'control_init'
//////// DOCENTES		
			}).when('/docentes', {
			templateUrl: 'view/buenaeducacion/docentes.php',
			controller: 'control_init'
//////// ESTUDIANTES		
			}).when('/estudiantes', {
			templateUrl: 'view/buenaeducacion/estudiantes.php',
			controller: 'control_init'
			
			
//PLATAFORMA - BUENA EDUCACIÓN [ESTUDIANTES]
//////// PERFIL
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
			
//////// INGRESO DEMO
			}).when('/plataforma/demo', {
			templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
			controller: 'control_init'
//////// SELECCIÓN DEMO
			}).when('/plataforma/seleccion', {
			templateUrl: 'view/plataforma/ingreso-demo/seleccion/index.php',
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
	
			
			
			
// VACÍO
			}).otherwise({
				redirectTo: '/',
				templateUrl: 'view/plataforma/ingreso-demo/ingreso-demo.php',
				controller: 'control_init'
			});

			$httpProvider.interceptors.push('httpInterceptor');

		}]);
		
		bancoEmprendimiento.run( function ($rootScope) {

    		$rootScope.$on('loading:progress', function(){
			    console.log("Inicia la carga");
			 	//$("#preload").css('display','block');
				//$("#load_status").css('display','block');

			});

			$rootScope.$on('loading:finish', function(){

				console.log("Termina la carga");
				
				Ion.calcularAlturas();
				
				if( menuType == undefined){
					menuType = "personas";
				}
	
				setTimeout(function(){
					Banco.obtain_selected(menuType);
				}, 100);
	
				console.log(myParam);
				console.log("Url de la pagina: "+general_location);
	
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

		bancoEmprendimiento.controller('control_init', ['$scope','$routeParams','$location', function($scope, $routeParams, $location) {
			menuType         = $routeParams.menuType;
			myParam          = $location.search().myParam;
			general_location = $location.path();
		}]);

		


	},

	obtain_selected : function(id){
		$(".bUp").removeClass('seleccted');
		$("#bUp_"+id).addClass('seleccted');
	},

	sign_in_basic: function(){

	},

	sign_in_face: function(){

	},

	sign_up_basic : function(){

	},

	sign_up_face : function(){

	},

	load_slider : function(){

	},

	last_camps_all : function(){

	},

	last_camps_y : function(){

	},

	last_camps_e : function(){

	},

	last_camps_t : function(){

	},

	load_projects : function(){

	},

	last_news : function(){

	},

	last_quotes : function(){

	},

	mentors_list : function(){

	},

	courses_list : function(){

	},

	modules_list : function(){

	},

	module_detail : function(){

	},


};

Banco.init();