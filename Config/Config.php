<?php 
	const BASE_URL = "https://troncosdelivery.com/";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "u392330023_troncos";
	const DB_USER = "u392330023_adminienda";
	const DB_PASSWORD = "?b7@My*d=hgL";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Q";
	const CURRENCY = "GTQ";

	//Api PayPal
	//SANDBOX PAYPAL
	//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";
	//LIVE PAYPAL
	const URLPAYPAL = "https://api-m.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "TRONCOS DELIVERY";
	const EMAIL_REMITENTE = "no-repply@troncosdelivery.com";
	const NOMBRE_EMPESA = "Troncos Delivery";
	const WEB_EMPRESA = "troncosdelivery.com";

	const DESCRIPCION = "La ejor comida al mejor precio";
	const SHAREDHASH = "Troncos Delivery";

	//Datos Empresa
	const DIRECCION = "Avenida las Américas Zona 13, Guatemala";
	const TELEMPRESA = "+(502)78787845";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "support@troncosdelivery.com";
	const EMAIL_PEDIDOS = "support@troncosdelivery.com"; 
	const EMAIL_SUSCRIPCION = "suppor@troncosdelivery.com";
	const EMAIL_CONTACTO = "suppor@troncosdelivery.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com";
	const INSTAGRAM = "https://www.instagram.com";
	

 ?>