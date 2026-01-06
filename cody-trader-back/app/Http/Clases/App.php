<?php

namespace App\Http\Clases;

/*
 *
 * Clase auxiliar que agrupa cualquier parametro de configuracion/constante del proyecto
 *
 */

class App
{
    //Nombre de la empresa
    const NOMBRE_EMPRESA = "API TERAL SOFT";

    //Metodo para recuperar password desde navegador
    const NOMBRE_METODO_RECUPERAR_PASSWORD_BROWSER = '/auth/resetPassword';

    //Cantida de intentos de login fallidos para bloquear usuario
    const CANTIDAD_INTENTOS_LOGIN_FALLIDOS_BLOQUEA = 5;

    //Cantida de minutos a bloquear un usuario luego de X intentos de login fallidos
    const CANTIDAD_MINUTOS_LOGIN_FALLIDOS_BLOQUEA = 5;

    //Duracion en horas del token para recuperar password
    const DURACION_HORAS_TOKEN_RESET_PASSWORD = 24;

    //Nro de items a devolver por pagina
    const CANTIDAD_ITEMS_DEVOLVER_POR_PAGINA = 20;

    //IP Lookup
    const URL_IP_LOOKUP = "http://ip-api.com/json";

    //APPLE
    const PREFIJO_PASSWORD_APPLE_LOGIN = "mACame51$1_APL";

    const ARR_MIME_TYPES_IMAGEN = [
        'image/jpeg',
        'image/png',
        'image/webp',
    ];
    const ARR_MIME_TYPES_AUDIO = [
        'audio/mpeg',
        'audio/3gpp',
        'audio/3gpp2',
        'application/vnd.rn-realmedia-vbr',
        'audio/x-wav',
        'audio/x-aac',
        'audio/vnd.dlna.adts',
        'audio/x-hx-aac-adts'
    ];
    const ARR_MIME_TYPES_VIDEO = ['video/mp4',];

    //Ruta carpeta donde se almacenaran imagenes y archivos
    const STORAGE_IMAGENES_EMPRESA = 'imagenes/empresa';
    const STORAGE_IMAGENES_EMPLEADO = 'imagenes/empleado';
    const STORAGE_IMAGENES_PRODUCTO = 'imagenes/producto';
    const STORAGE_IMAGENES_CATEGORIA = 'imagenes/categoria';
    const STORAGE_IMAGENES_BANNER = 'imagenes/banner';
    const STORAGE_ARCHIVOS_GENERAL = 'archivos/general';
    const STORAGE_ARCHIVOS_PRESUPUESTO = 'archivos/presupuesto';
    const STORAGE_ARCHIVOS_FACTURACION = 'archivos/facturacion';
    const STORAGE_ARCHIVOS_COMPROBANTE_TRANSFERENCIA = 'archivos/comprobanteTransferencia';

    //QUEUES (Nombre de las Colas usadas)
    const QUEUE_EMAIL_FORGOT_PASSWORD = 'EmailPassword';
    const QUEUE_EMAIL_PRESUPUESTO = 'EmailPresupuesto';

    //******************************************************************************************************************
    //******************************************************************************************************************
    //CONSTANTES PROPIAS DEL PROYECTO
    //******************************************************************************************************************
    //******************************************************************************************************************

    //Códigos posibles para 'tipo' de mensaje de Chat
    const CODIGO_TIPO_MJE_CHAT = ['text', 'audio', 'image', 'file'];

    //Mime types permitidos para archivos a enviar en Chat
    const MIME_TYPES_AUDIO_ALLOWED_CHAT = ['audio/aac', 'audio/mp4', 'audio/mpeg', 'audio/amr', '  /ogg'];

    const MIME_TYPES_IMAGE_ALLOWED_CHAT = ['image/jpeg', 'image/png'];

    const MIME_TYPES_VIDEO_ALLOWED_CHAT = ['video/mp4'];

    //Constantes de 'estado' para QueueLog
    const QUEUELOG_ESTADO_INICIADO = 'INICIADO';
    const QUEUELOG_ESTADO_FINALIZADO_OK = 'FINALIZADO OK';
    const QUEUELOG_ESTADO_FINALIZADO_ERROR = 'FINALIZADO ERROR';

    //Configuracion
    const CONFIGURACION_DATOS_EMPRESA = "DATOS_EMPRESA";
    //Configuracion entorno Tipos de valor
    const ARR_TIPO_VALOR = [
        'rich text' => 'rich text',
        'string' => 'string',
        'boolean' => 'boolean',
        'integer' => 'integer',
        'decimal' => 'decimal',
        'date' => 'date',
    ];
    //Formas de ordenamiento posibles para registros
    const SORT_BY = ['ASC', 'DESC'];

    //EstadoVenta
    const ESTADO_VENTA_PENDIENTE = "PENDIENTE";
    const ESTADO_PAGO_APROBADO = 'APROBADO';
    const ESTADO_VENTA_PREPARADO = "PREPARADO";
    const ESTADO_VENTA_FACTURADO = "FACTURADO";
    const ESTADO_VENTA_PARA_ENTREGA = "PARA_ENTREGA";
    const ESTADO_VENTA_ENTREGADO = "ENTREGADO";
    const ESTADO_VENTA_RECHAZADA = "RECHAZADA";

    //EstadoPresupuesto
    const ESTADO_PRESUPUESTO_CREADO = "CREADO";
    const ESTADO_PRESUPUESTO_ENVIADO = "ENVIADO";
    const ESTADO_PRESUPUESTO_CONFIRMADO = "CONFIRMADO";

    //EstadoEntrega
    const CODIGO_ENTREGA_PENDIENTE = "PENDIENTE";
    const CODIGO_ENTREGA_EN_CAMINO = "EN CAMINO";
    const CODIGO_ENTREGA_CON_DEMORA = "CON DEMORA";
    const CODIGO_ENTREGA_NO_ATENDIDO = "NO ATENDIDO";
    const CODIGO_ENTREGA_ENTREGADO = "ENTREGADO";
    const CODIGO_ENTREGA_DEVUELTO = "DEVUELTO";

    //TipoComprobanteFactura
    const TIPO_COMPROBANTE_FACTURA_FACTURA = "FACTURA";
    const TIPO_COMPROBANTE_FACTURA_COMPROBANTE_INTERNO = "COMPROBANTE_INTERNO";

    //ROLES
    const ROLE_CLIENTE = 'Cliente';

    //Tipos de descuento 
    const CUOTA = 'CUOTAS';
    const PORCENTAJE = 'PORCENTAJE';

    //Carrito
    const MINUTOS_RETENCION_STOCK = 15;
    const MINUTOS_VIGENCIA_VENTA = 15;

    //Acciones manejo stock
    const REDUCIR_STOCK = 'Reducir';
    const INCREMENTAR_STOCK = 'Incrementar';

    //Estado reserva 
    const ESTADO_RESERVA_NO_ATENDIDO = "NO_ATENDIDO";
    const ESTADO_RESERVA_ATENDIDO = "ATENDIDO";
    const ESTADO_RESERVA_A_RETIRAR = "RESERVA_A_RETIRAR";
    const ESTADO_RESERVA_CANCELADO = "RESERVA_CANCELADO";

    //FORMA DE PAGO
    const FORMA_PAGO_EFECTIVO = "EFECTIVO";
    const FORMA_PAGO_TRANSFERENCIA = "TRANSFERENCIA";
    const FORMA_PAGO_MERCADO_PAGO = "MERCADO_PAGO";

    //TIPO DOCUMENTO
    const TIPO_DOCUMENTO_DNI = "DNI";
    const TIPO_DOCUMENTO_CUIL = "CUIL";
    const TIPO_DOCUMENTO_CUIT = "CUIT";
    const TIPO_DOCUMENTO_PASAPORTE = "PASAPORTE";
    const TIPO_DOCUMENTO_CEDULA = "CEDULA";
    const TIPO_DOCUMENTO_SIN_DOCUMENTO = "SIN_DOCUMENTO";
    //TIPO DOCUMENTO ARRAY
    const ARR_TIPO_DOCUMENTO = [
        'DNI' => self::TIPO_DOCUMENTO_DNI,
        'CUIL' => self::TIPO_DOCUMENTO_CUIL,
        'CUIT' => self::TIPO_DOCUMENTO_CUIT,
        'PASAPORTE' => self::TIPO_DOCUMENTO_PASAPORTE,
        'CEDULA' => self::TIPO_DOCUMENTO_CEDULA,
        'SIN_DOCUMENTO' => self::TIPO_DOCUMENTO_SIN_DOCUMENTO,
    ];
}
