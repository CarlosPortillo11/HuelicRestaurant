# HuelicRestaurant

//INTEGRANTES

Espinoza Anzora, Mirna Elizabeth EA190278
Portillo Martínez, Carlos Emerson PM191144
Martínez Nerio, Mauricio Alejandro MN190349
Aguilar Panameño, David Alexander AP190139
Amaya Ramírez, David Elías AR190019


//LINK TRELLO

https://trello.com/b/WmWpdIi2/huelic-restaurant


//LINK FIGMA (Mock Ups)

https://www.figma.com/file/tG6gXY25vAQfTswYwVSb5R/Huelic-Restaurant?node-id=0%3A1


//DOCUMENTO PDF

[Proyecto de catedra LIS 2022 fase I.pdf](https://github.com/CarlosPortillo11/HuelicRestaurant/files/8357024/Proyecto.de.catedra.LIS.2022.fase.I.pdf)


//INDICACIONES PARA CONFIGURACION DEL ENVIO CORRECTO DE CORREOS

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
//MANUAL DE USUARIO

[Manual_de_Usuario.pdf](https://github.com/CarlosPortillo11/HuelicRestaurant/files/8357032/Manual_de_Usuario.pdf)

https://www.canva.com/design/DAE8JF-j4f0/82WEdG3mlT8rj0Kd-tazdw/view?utm_content=DAE8JF-j4f0&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton

//LICENCIAS CREATIVE COMMONS

<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Este obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a>.
