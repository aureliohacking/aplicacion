# aplicacion
Los dispositivos android por medio de servicios utilizados en aplicaciones móviles no permiten tener accesos que podrán ser usados para vulnerar la integridad de las personas y sus dispositivos unas de estos servicios son utilizados en nuestro proyecto para la captura de todos los contactos que tenga guardados.

Para esto fue utilizado un algoritmo que dentro de la aplicación que controla los leds, donde toma los contactos del dispositivo en una estructura de arreglo, donde se organiza con nombre y número, al momento de pasarlos a la base de datos se implementa una librería llamada volley de android studio la cual se comunica con una base de datos remota por medio de una url y la url será procesada mediante un php y es donde serán almacenados todos los contactos.
