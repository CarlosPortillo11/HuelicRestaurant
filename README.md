# HuelicRestaurant

INDICACIONES PARA CONFIGURACION PARA EL ENVIO CORRECTO DE CORREOS

Primero: copiar la carpeta "sendmail" que está en el repositorio, en Wamp
Segundo: el archivo "sendmail.ini" ya está configurado con lo necesario
Tercero: en Wamp, en el apartado PHP, buscar el archivo "php.ini" y accede a él
Cuarto: Buscaremos "smtp" (usualmente con ctrl+f)
Quinto: Modificar los siguientes códigos de línea:
        SMTP = smtp.gmail.com
        smtp_port = 587
        sendmail_from = LISHuelic@gmail.com
        sendmail_path = "C:\wamp64\sendmail\sendmail.exe -t" (o la raíz donde esté wamp, y después siempre referenciando a sendmail, sendmail.exe)
Sexto: guardar el archivo y cerrarlo
Séptimo: reiniciar los servicios de wamp

Nota: El archivo "sendmail" ya está configurado con las siguientes credenciales (puede acceder al correo para verificar el funcionamiento del envío de correos)
      correo: LISHuelic@gmail.com
      contraseña: SistemaDeRegistroLIS
      
      Si desea acceder con otro correo, debería hacer una serie de modificaciones en "sendmail" y habilitar opciones de seguridad en su correo, para evitar ese proceso,
      proporcionamos ese correo con el archivo "sendmail" ya configurado.
      
      La página "Reservas" en el correo que pide, debe ingresar el que proporcionamos (de momento) para que evidencie que si son enviados los correos al "cliente" de 
      confirmación.
